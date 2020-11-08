<?php

/*
 * This file is part of the Viterbit LibOfficeConverter package.
 *
 * (c) Viterbit <contact@viterbit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Viterbit\LibOfficeConverter;

class DocumentType
{
    public const WRITER = 'writer';
    public const CALC = 'calc';
    public const DRAW = 'draw';
    public const IMPRESS = 'impress';
    public const BASE = 'base';
    public const MATH = 'math';
    public const GLOB = 'global';
    public const WEB = 'web';

    /**
     * Document types.
     *
     * @var string[]
     */
    protected static $values = [
        self::WRITER,
        self::CALC,
        self::DRAW,
        self::IMPRESS,
        self::BASE,
        self::MATH,
        self::GLOB,
        self::WEB,
    ];

    /**
     * Default document types for output formats.
     *
     * @var string[]
     */
    protected static $defaults = [
        Format::TEXT_BIB => DocumentType::WRITER,
        Format::TEXT_DOC => DocumentType::WRITER,
        Format::TEXT_DOC6 => DocumentType::WRITER,
        Format::TEXT_DOC95 => DocumentType::WRITER,
        Format::TEXT_DOCBOOK => DocumentType::WRITER,
        Format::TEXT_DOCX => DocumentType::WRITER,
        Format::TEXT_DOCX7 => DocumentType::WRITER,
        Format::TEXT_FODT => DocumentType::WRITER,
        Format::TEXT_HTML => DocumentType::WRITER,
        Format::TEXT_LATEX => DocumentType::WRITER,
        Format::TEXT_MEDIAWIKI => DocumentType::WRITER,
        Format::TEXT_ODT => DocumentType::WRITER,
        Format::TEXT_OOXML => DocumentType::WRITER,
        Format::TEXT_OTT => DocumentType::WRITER,
        Format::TEXT_PDB => DocumentType::WRITER,
        Format::TEXT_PSW => DocumentType::WRITER,
        Format::TEXT_RTF => DocumentType::WRITER,
        Format::TEXT_STW => DocumentType::WRITER,
        Format::TEXT_SXW => DocumentType::WRITER,
        Format::TEXT_UOT => DocumentType::WRITER,
        Format::TEXT_VOR3 => DocumentType::WRITER,
        Format::TEXT_WPS => DocumentType::WRITER,
        Format::TEXT_XHTML => DocumentType::WRITER,

        Format::WEB_ETEXT => DocumentType::WEB,
        Format::WEB_HTML10 => DocumentType::WEB,
        Format::WEB_PDF => DocumentType::WEB,
        Format::WEB_SDW3 => DocumentType::WEB,
        Format::WEB_SDW4 => DocumentType::WEB,
        Format::WEB_SDW => DocumentType::WEB,
        Format::WEB_TXT => DocumentType::WEB,
        Format::WEB_TEXT10 => DocumentType::WEB,
        Format::WEB_TEXT => DocumentType::WEB,
        Format::WEB_VOR4 => DocumentType::WEB,
        Format::WEB_VOR => DocumentType::WEB,

        Format::SPREADSHEET_CSV => DocumentType::CALC,
        Format::SPREADSHEET_DBF => DocumentType::CALC,
        Format::SPREADSHEET_DIF => DocumentType::CALC,
        Format::SPREADSHEET_FODS => DocumentType::CALC,
        Format::SPREADSHEET_ODS => DocumentType::CALC,
        Format::SPREADSHEET_OTS => DocumentType::CALC,
        Format::SPREADSHEET_PXL => DocumentType::CALC,
        Format::SPREADSHEET_SDC => DocumentType::CALC,
        Format::SPREADSHEET_SDC4 => DocumentType::CALC,
        Format::SPREADSHEET_SDC3 => DocumentType::CALC,
        Format::SPREADSHEET_SLK => DocumentType::CALC,
        Format::SPREADSHEET_STC => DocumentType::CALC,
        Format::SPREADSHEET_SXC => DocumentType::CALC,
        Format::SPREADSHEET_UOS => DocumentType::CALC,
        Format::SPREADSHEET_XLS => DocumentType::CALC,
        Format::SPREADSHEET_XLS5 => DocumentType::CALC,
        Format::SPREADSHEET_XLS95 => DocumentType::CALC,
        Format::SPREADSHEET_XLT => DocumentType::CALC,
        Format::SPREADSHEET_XLT5 => DocumentType::CALC,
        Format::SPREADSHEET_XLT95 => DocumentType::CALC,
        Format::SPREADSHEET_XLSX => DocumentType::CALC,

        Format::GRAPHICS_FODG => DocumentType::DRAW,
        Format::GRAPHICS_ODD => DocumentType::DRAW,
        Format::GRAPHICS_OTG => DocumentType::DRAW,
        Format::GRAPHICS_STD => DocumentType::DRAW,
        Format::GRAPHICS_SXD3 => DocumentType::DRAW,
        Format::GRAPHICS_SXD5 => DocumentType::DRAW,

        Format::PRESENTATION_BMP => DocumentType::IMPRESS,
        Format::PRESENTATION_EMF => DocumentType::IMPRESS,
        Format::PRESENTATION_EPS => DocumentType::IMPRESS,
        Format::PRESENTATION_FODP => DocumentType::IMPRESS,
        Format::PRESENTATION_GIF => DocumentType::IMPRESS,
        Format::PRESENTATION_JPG => DocumentType::IMPRESS,
        Format::PRESENTATION_MET => DocumentType::IMPRESS,
        Format::PRESENTATION_ODG => DocumentType::IMPRESS,
        Format::PRESENTATION_ODP => DocumentType::IMPRESS,
        Format::PRESENTATION_OTP => DocumentType::IMPRESS,
        Format::PRESENTATION_PBM => DocumentType::IMPRESS,
        Format::PRESENTATION_PCT => DocumentType::IMPRESS,
        Format::PRESENTATION_PGM => DocumentType::IMPRESS,
        Format::PRESENTATION_PNG => DocumentType::IMPRESS,
        Format::PRESENTATION_POTM => DocumentType::IMPRESS,
        Format::PRESENTATION_POT => DocumentType::IMPRESS,
        Format::PRESENTATION_PPM => DocumentType::IMPRESS,
        Format::PRESENTATION_PPTX => DocumentType::IMPRESS,
        Format::PRESENTATION_PPS => DocumentType::IMPRESS,
        Format::PRESENTATION_PPT => DocumentType::IMPRESS,
        Format::PRESENTATION_PWP => DocumentType::IMPRESS,
        Format::PRESENTATION_RAS => DocumentType::IMPRESS,
        Format::PRESENTATION_SDA => DocumentType::IMPRESS,
        Format::PRESENTATION_SDD => DocumentType::IMPRESS,
        Format::PRESENTATION_SDD3 => DocumentType::IMPRESS,
        Format::PRESENTATION_SDD4 => DocumentType::IMPRESS,
        Format::PRESENTATION_SXD => DocumentType::IMPRESS,
        Format::PRESENTATION_STI => DocumentType::IMPRESS,
        Format::PRESENTATION_SVG => DocumentType::IMPRESS,
        Format::PRESENTATION_SVM => DocumentType::IMPRESS,
        Format::PRESENTATION_SWF => DocumentType::IMPRESS,
        Format::PRESENTATION_SXI => DocumentType::IMPRESS,
        Format::PRESENTATION_TIFF => DocumentType::IMPRESS,
        Format::PRESENTATION_UOP => DocumentType::IMPRESS,
        Format::PRESENTATION_VOR5 => DocumentType::IMPRESS,
        Format::PRESENTATION_WMF => DocumentType::IMPRESS,
        Format::PRESENTATION_XPM => DocumentType::IMPRESS,
    ];

    /**
     * List of available document types.
     *
     * @return string[]
     */
    public static function getAvailableValues()
    {
        return static::$values;
    }

    /**
     * Get default document type for output format.
     *
     * @param string $outputFormat
     *
     * @return string|null
     */
    public static function getDefault(/*string*/ $outputFormat)
    {
        return static::$defaults[$outputFormat] ?? null;
    }
}
