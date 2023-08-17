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

class Parameters
{
    /**
     * Full path to output file. In case when output is stdout - null.
     *
     * @var string|null
     */
    protected $outputFile;

    /**
     * Output format.
     *
     * @var string|null
     */
    protected $outputFormat;

    /**
     * Document type.
     *
     * information from `libreoffice --help`:
     * --writer       create new text document.
     * --calc         create new spreadsheet document.
     * --draw         create new drawing.
     * --impress      create new presentation.
     * --base         create new database.
     * --math         create new formula.
     * --global       create new global document.
     * --web          create new HTML document.
     *
     * @var string|null
     */
    protected $documentType;

    /**
     * Full path to input file. In case when input is stdin - null.
     *
     * @var string|null
     */
    protected $inputFile;

    /**
     * Input data, eg. HTML as string.
     *
     * @var mixed
     */
    protected $inputData;

    /**
     * Output filters, eg.
     * - Text (encoded)
     * - UTF8.
     *
     * @var string[]
     */
    protected $outputFilters = [];

    public function __construct(
        /*string*/
        $outputFormat = null,
        /*string*/
        $outputFile = null,
        /*string*/
        $inputFile = null
    ) {
        $this->setOutputFormat($outputFormat);
        $this->setOutputFile($outputFile);
        $this->setInputFile($inputFile);
    }

    /**
     * @return string|null
     */
    public function getInputFile()
    {
        return $this->inputFile;
    }

    /**
     * @param string|null $inputFile
     *
     * @return Parameters
     */
    public function setInputFile($inputFile)
    {
        $this->inputFile = $inputFile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOutputFile()
    {
        return $this->outputFile;
    }

    /**
     * @param string|null $outputFile
     *
     * @return Parameters
     */
    public function setOutputFile($outputFile)
    {
        $this->outputFile = $outputFile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }

    /**
     * @param string|null $outputFormat
     *
     * @return Parameters
     *
     * @throws ConverterException
     */
    public function setOutputFormat($outputFormat)
    {
        if ($outputFormat && !in_array($outputFormat, Format::getAvailableValues())) {
            throw new ConverterException('Unknown output format: '.$outputFormat);
        }
        $this->outputFormat = $outputFormat;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param string|null $documentType
     *
     * @return Parameters
     *
     * @throws ConverterException
     */
    public function setDocumentType($documentType)
    {
        if ($documentType && !in_array($documentType, DocumentType::getAvailableValues())) {
            throw new ConverterException('Unknown document type: '.$documentType);
        }
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * @param string $outputFilter
     *
     * @return Parameters
     */
    public function addOutputFilter(/*string*/ $outputFilter)
    {
        $this->outputFilters[] = $outputFilter;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOutputFilters()//: array
    {
        return $this->outputFilters;
    }

    /**
     * @return mixed
     */
    public function getInputData()
    {
        return $this->inputData;
    }

    /**
     * @return Parameters
     */
    public function setInputData(mixed $inputData)
    {
        $this->inputData = $inputData;

        return $this;
    }
}
