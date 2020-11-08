<?php

/*
 * This file is part of the Viterbit LibOfficeConverter package.
 *
 * (c) Viterbit <contact@viterbit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Viterbit\LibOfficeConverter\Test;

/*
 * This file is part of the Viterbit LibOfficeConverter package.
 *
 * (c) Viterbit <contact@viterbit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use Viterbit\LibOfficeConverter\Converter;
use Viterbit\LibOfficeConverter\DocumentType;
use Viterbit\LibOfficeConverter\Format;
use Viterbit\LibOfficeConverter\Parameters;

class ConverterTest extends TestCase
{
    /**
     * @dataProvider converterProvider
     *
     * @param mixed      $command
     * @param mixed|null $binary
     */
    public function testConvert(Parameters $parameters, /*string*/ $command, /*string*/ $binary = null)
    {
        $processStub = $this->getMockBuilder(Process::class)
            ->disableOriginalConstructor()
            ->getMock();
        $processStub->method('run')->willReturn(0);

        $mockBuilder = $this->getMockBuilder(Converter::class);
        if ($binary) {
            $mockBuilder->setConstructorArgs([$binary]);
        }
        $converterStub = $mockBuilder->setMethods([
                'createProcess',
                'createTemporaryFile',
                'createOutput',
                'deleteInput',
                'genTemporaryFileName',
                'getInputFile',
            ])
            ->getMock();

        $converterStub->expects($this->once())
            ->method('createProcess')
            ->with($this->equalTo($command))
            ->willReturn($processStub);

        $converterStub
            ->method('createTemporaryFile')
            ->willReturn('some_temp_file');

        $converterStub->expects($this->once())
            ->method('createOutput')
            ->with($this->equalTo('some_temp_file.'.$parameters->getOutputFormat()));

        $converterStub
            ->method('genTemporaryFileName')
            ->willReturn('some_temp_file');

        $converterStub
            ->method('getInputFile')
            ->willReturn('some_temp_file');

        $converterStub->convert($parameters);
    }

    public function converterProvider()
    {
        $command = 'libreoffice --headless --invisible --nocrashreport --nodefault --nofirststartwizard --nologo --norestore ';

        return [
            'From HTML file to HTML stdout' => [
                (new Parameters())
                    ->setDocumentType(DocumentType::WEB)
                    ->setOutputFormat(Format::WEB_HTML)
                    ->setInputFile('test.html')
                    ->setOutputFile('test.docx'),
                $command.'--web --convert-to "html" "some_temp_file"',
                null,
            ],
            'From HTML file to docx file' => [
                (new Parameters())
                    ->setInputFile('test.html')
                    ->setDocumentType(DocumentType::WRITER)
                    ->setOutputFormat(Format::TEXT_DOCX)
                    ->setOutputFile('test.docx'),
                $command.'--writer --convert-to "docx" "some_temp_file"',
                null,
            ],
            'Default document type' => [
                (new Parameters())
                    ->setInputFile('test.html')
                    ->setOutputFormat(Format::TEXT_DOCX)
                    ->setOutputFile('test.docx'),
                $command.'--writer --convert-to "docx" "some_temp_file"',
                null,
            ],
            'Output filter' => [
                (new Parameters())
                    ->setInputFile('test.html')
                    ->setOutputFormat(Format::TEXT_TEXT)
                    ->setOutputFile('test.text')
                    ->addOutputFilter('some filter'),
                $command.'--web --convert-to "text:some filter" "some_temp_file"',
                null,
            ],
            'Default text filter' => [
                (new Parameters())
                    ->setInputFile('test.html')
                    ->setOutputFormat(Format::TEXT_TEXT)
                    ->setOutputFile('test.text'),
                $command.'--web --convert-to "text:Text (encoded):UTF8" "some_temp_file"',
                null,
            ],
            'Input string' => [
                (new Parameters())
                    ->setInputData('example html content')
                    ->setOutputFormat(Format::TEXT_TEXT)
                    ->setOutputFile('test.text'),
                $command.'--web --convert-to "text:Text (encoded):UTF8" "some_temp_file"',
                null,
            ],
            'Binary' => [
                (new Parameters())
                    ->setInputFile('test.html')
                    ->setDocumentType(DocumentType::WRITER)
                    ->setOutputFormat(Format::TEXT_DOCX)
                    ->setOutputFile('test.docx'),
                str_replace('libreoffice', '/test/path', $command).'--writer --convert-to "docx" "some_temp_file"',
                '/test/path',
            ],
        ];
    }
}
