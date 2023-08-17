<?php

/*
 * This file is part of the Viterbit Libreoffice converter package.
 *
 * (c) Viterbit <contact@viterbit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Viterbit\LibOfficeConverter;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\Process\Process;

class Converter implements ConverterInterface
{
    use LoggerAwareTrait;

    final public const BINARY_DEFAULT = 'libreoffice';

    /**
     * Temporary path (by defaults is equal to sys_get_temp_dir()).
     *
     * @var string
     */
    protected $tempDir;

    /**
     * Defailt options for libreoffice.
     *
     * @var array
     */
    protected $defaultOptions = [
        '--headless',
        '--invisible',
        '--nocrashreport',
        '--nodefault',
        '--nofirststartwizard',
        '--nologo',
        '--norestore',
    ];

    /**
     * Converter constructor.
     *
     * @param string $binaryPath
     * @param string $tempDir
     * @param int    $timeout
     * @param string $tempPrefix
     * @param array  $env
     */
    public function __construct(
        /*string*/
        protected $binaryPath = self::BINARY_DEFAULT,
        /*string*/
        $tempDir = null,
        /*int*/
        protected $timeout = null,
        LoggerInterface $logger = null,
        /*string*/
        protected $tempPrefix = 'vb_liboffice-converter_',
        /*array*/
        protected $env = null
    ) {
        if (!$logger) {
            $logger = new NullLogger();
        }
        $this->setLogger($logger);

        $this->tempDir = $tempDir ?: sys_get_temp_dir();
        if (str_ends_with($this->tempDir, '/')) {
            $this->tempDir = substr($this->tempDir, 0, -1);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convert(Parameters $parameters)
    {
        $documentType = $parameters->getDocumentType();
        if ($documentType && !in_array($documentType, DocumentType::getAvailableValues(), true)) {
            throw new ConverterException('Unknown document type: '.$documentType);
        }
        $documentType = $documentType ?: DocumentType::getDefault($parameters->getOutputFormat());

        if ($parameters->getOutputFormat() && !in_array($parameters->getOutputFormat(), Format::getAvailableValues(), true)) {
            throw new ConverterException('Unknown output format: '.$parameters->getOutputFormat());
        }

        $inputFile = $this->getInputFile($parameters);
        $outputFilters = implode('', array_map(fn ($item) => ':'.$item, $this->getOutputFilters($parameters)));

        $options = array_merge($this->defaultOptions, [
            $documentType ? '--'.$documentType : '',
            '--convert-to "'.$parameters->getOutputFormat().$outputFilters.'"',
            '"'.$inputFile.'"',
        ]);
        $command = $this->binaryPath.' '.implode(' ', $options);

        $process = $this->createProcess($command);

        if ($this->timeout) {
            $process->setTimeout($this->timeout);
        }

        $this->logger->info(sprintf('Start: %s', $command));

        $self = $this;
        $resultCode = $process->run(function ($type, $buffer) use ($self) {
            if (Process::ERR === $type) {
                $self->logger->warning($buffer);
            } else {
                $self->logger->info($buffer);
            }
        });

        $result = $this->createOutput($inputFile.'.'.$parameters->getOutputFormat(), $parameters->getOutputFile());
        $this->deleteInput($parameters, $inputFile);

        if (0 != $resultCode) {
            $this->logger->error(sprintf('Failed with result code %d: %s', $resultCode, $command));
            throw new ConverterException('Error on converting data with LibreOffice: '.$resultCode, $resultCode);
        } else {
            $this->logger->info(sprintf('Finished: %s', $command));
        }

        return $result;
    }

    /**
     * @param $option
     *
     * @return $this
     */
    public function addOption($option)
    {
        $this->defaultOptions[] = $option;

        return $this;
    }

    /**
     * @param $command
     *
     * @return Process
     */
    protected function createProcess(/*string*/ $command)//: Process
    {
        return Process::fromShellCommandline($command, $this->tempDir, $this->env);
    }

    /**
     * @param string $inputFile
     *
     * @return string
     */
    protected function createTemporaryFile(/*string*/ $inputFile)//: string
    {
        $temporaryFile = $this->genTemporaryFileName();
        copy($inputFile, $temporaryFile);

        return $temporaryFile;
    }

    /**
     * Generate unique name for temporary file.
     *
     * @return string
     */
    protected function genTemporaryFileName()
    {
        return $this->tempDir.'/'.uniqid($this->tempPrefix);
    }

    /**
     * @param string $inputFile
     * @param string $outputFile
     *
     * @return string|null
     *
     * @throws ConverterException
     */
    protected function createOutput(/*string*/ $inputFile, /*string*/ $outputFile = null)
    {
        if (!file_exists($inputFile)) {
            $this->logger->error('LibreOffice did not convert, check its working capacity');
            throw new ConverterException('LibreOffice did not convert, check its working capacity');
        }
        if ($outputFile) {
            if (file_exists($outputFile)) {
                unlink($outputFile);
            }
            rename($inputFile, $outputFile);

            return null;
        }

        $result = file_get_contents($inputFile);
        unlink($inputFile);

        return $result;
    }

    /**
     * Get output filters.
     *
     * @return string[]
     */
    protected function getOutputFilters(Parameters $parameters)
    {
        if (empty($parameters->getOutputFilters())) {
            return OutputFilters::getDefault($parameters->getOutputFormat());
        }

        return $parameters->getOutputFilters();
    }

    /**
     * Get input file - return existed or create from input data.
     *
     * @return string
     */
    protected function getInputFile(Parameters $parameters)
    {
        if ($parameters->getInputFile()) {
            return $parameters->getInputFile();
        }

        $temporaryFile = $this->genTemporaryFileName();
        file_put_contents($temporaryFile, $parameters->getInputData());

        return $temporaryFile;
    }

    /**
     * Delete input file if it was created in process of conversion.
     *
     * @param string $inputFile
     */
    protected function deleteInput(Parameters $parameters, /*string*/ $inputFile)
    {
        unlink($inputFile);
    }
}
