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

class Format
{
    // TextDocument
    final public const TEXT_BIB = 'bib';
    final public const TEXT_DOC = 'doc';
    final public const TEXT_DOC6 = 'doc6';
    final public const TEXT_DOC95 = 'doc95';
    final public const TEXT_DOCBOOK = 'docbook';
    final public const TEXT_DOCX = 'docx';
    final public const TEXT_DOCX7 = 'docx7';
    final public const TEXT_FODT = 'fodt';
    final public const TEXT_HTML = 'html';
    final public const TEXT_LATEX = 'latex';
    final public const TEXT_MEDIAWIKI = 'mediawiki';
    final public const TEXT_ODT = 'odt';
    final public const TEXT_OOXML = 'ooxml';
    final public const TEXT_OTT = 'ott';
    final public const TEXT_PDB = 'pdb';
    final public const TEXT_PDF = 'pdf';
    final public const TEXT_PSW = 'psw';
    final public const TEXT_RTF = 'rtf';
    final public const TEXT_SDW = 'sdw';
    final public const TEXT_SDW4 = 'sdw4';
    final public const TEXT_SDW3 = 'sdw3';
    final public const TEXT_STW = 'stw';
    final public const TEXT_SXW = 'sxw';
    final public const TEXT_TEXT = 'text';
    final public const TEXT_TXT = 'txt';
    final public const TEXT_UOT = 'uot';
    final public const TEXT_VOR = 'vor';
    final public const TEXT_VOR4 = 'vor4';
    final public const TEXT_VOR3 = 'vor3';
    final public const TEXT_WPS = 'wps';
    final public const TEXT_XHTML = 'xhtml';

    // WebDocument
    final public const WEB_ETEXT = 'etext';
    final public const WEB_HTML10 = 'html10';
    final public const WEB_HTML = 'html';
    final public const WEB_MEDIAWIKI = 'mediawiki';
    final public const WEB_PDF = 'pdf';
    final public const WEB_SDW3 = 'sdw3';
    final public const WEB_SDW4 = 'sdw4';
    final public const WEB_SDW = 'sdw';
    final public const WEB_TXT = 'txt';
    final public const WEB_TEXT10 = 'text10';
    final public const WEB_TEXT = 'text';
    final public const WEB_VOR4 = 'vor4';
    final public const WEB_VOR = 'vor';

    // Spreadsheet
    final public const SPREADSHEET_CSV = 'csv';
    final public const SPREADSHEET_DBF = 'dbf';
    final public const SPREADSHEET_DIF = 'dif';
    final public const SPREADSHEET_FODS = 'fods';
    final public const SPREADSHEET_HTML = 'html';
    final public const SPREADSHEET_ODS = 'ods';
    final public const SPREADSHEET_OOXML = 'ooxml';
    final public const SPREADSHEET_OTS = 'ots';
    final public const SPREADSHEET_PDF = 'pdf';
    final public const SPREADSHEET_PXL = 'pxl';
    final public const SPREADSHEET_SDC = 'sdc';
    final public const SPREADSHEET_SDC4 = 'sdc4';
    final public const SPREADSHEET_SDC3 = 'sdc3';
    final public const SPREADSHEET_SLK = 'slk';
    final public const SPREADSHEET_STC = 'stc';
    final public const SPREADSHEET_SXC = 'sxc';
    final public const SPREADSHEET_UOS = 'uos';
    final public const SPREADSHEET_VOR3 = 'vor3';
    final public const SPREADSHEET_VOR4 = 'vor4';
    final public const SPREADSHEET_VOR = 'vor';
    final public const SPREADSHEET_XHTML = 'xhtml';
    final public const SPREADSHEET_XLS = 'xls';
    final public const SPREADSHEET_XLS5 = 'xls5';
    final public const SPREADSHEET_XLS95 = 'xls95';
    final public const SPREADSHEET_XLT = 'xlt';
    final public const SPREADSHEET_XLT5 = 'xlt5';
    final public const SPREADSHEET_XLT95 = 'xlt95';
    final public const SPREADSHEET_XLSX = 'xlsx';

    // Graphics
    final public const GRAPHICS_BMP = 'bmp';
    final public const GRAPHICS_EMF = 'emf';
    final public const GRAPHICS_EPS = 'eps';
    final public const GRAPHICS_FODG = 'fodg';
    final public const GRAPHICS_GIF = 'gif';
    final public const GRAPHICS_HTML = 'html';
    final public const GRAPHICS_JPG = 'jpg';
    final public const GRAPHICS_MET = 'met';
    final public const GRAPHICS_ODD = 'odd';
    final public const GRAPHICS_OTG = 'otg';
    final public const GRAPHICS_PBM = 'pbm';
    final public const GRAPHICS_PCT = 'pct';
    final public const GRAPHICS_PDF = 'pdf';
    final public const GRAPHICS_PGM = 'pgm';
    final public const GRAPHICS_PNG = 'png';
    final public const GRAPHICS_PPM = 'ppm';
    final public const GRAPHICS_RAS = 'ras';
    final public const GRAPHICS_STD = 'std';
    final public const GRAPHICS_SVG = 'svg';
    final public const GRAPHICS_SVM = 'svm';
    final public const GRAPHICS_SWF = 'swf';
    final public const GRAPHICS_SXD = 'sxd';
    final public const GRAPHICS_SXD3 = 'sxd3';
    final public const GRAPHICS_SXD5 = 'sxd5';
    final public const GRAPHICS_SXW = 'sxw';
    final public const GRAPHICS_TIFF = 'tiff';
    final public const GRAPHICS_VOR = 'vor';
    final public const GRAPHICS_VOR3 = 'vor3';
    final public const GRAPHICS_WMF = 'wmf';
    final public const GRAPHICS_XHTML = 'xhtml';
    final public const GRAPHICS_XPM = 'xpm';

    // Presentation
    final public const PRESENTATION_BMP = 'bmp';
    final public const PRESENTATION_EMF = 'emf';
    final public const PRESENTATION_EPS = 'eps';
    final public const PRESENTATION_FODP = 'fodp';
    final public const PRESENTATION_GIF = 'gif';
    final public const PRESENTATION_HTML = 'html';
    final public const PRESENTATION_JPG = 'jpg';
    final public const PRESENTATION_MET = 'met';
    final public const PRESENTATION_ODG = 'odg';
    final public const PRESENTATION_ODP = 'odp';
    final public const PRESENTATION_OTP = 'otp';
    final public const PRESENTATION_PBM = 'pbm';
    final public const PRESENTATION_PCT = 'pct';
    final public const PRESENTATION_PDF = 'pdf';
    final public const PRESENTATION_PGM = 'pgm';
    final public const PRESENTATION_PNG = 'png';
    final public const PRESENTATION_POTM = 'potm';
    final public const PRESENTATION_POT = 'pot';
    final public const PRESENTATION_PPM = 'ppm';
    final public const PRESENTATION_PPTX = 'pptx';
    final public const PRESENTATION_PPS = 'pps';
    final public const PRESENTATION_PPT = 'ppt';
    final public const PRESENTATION_PWP = 'pwp';
    final public const PRESENTATION_RAS = 'ras';
    final public const PRESENTATION_SDA = 'sda';
    final public const PRESENTATION_SDD = 'sdd';
    final public const PRESENTATION_SDD3 = 'sdd3';
    final public const PRESENTATION_SDD4 = 'sdd4';
    final public const PRESENTATION_SXD = 'sxd';
    final public const PRESENTATION_STI = 'sti';
    final public const PRESENTATION_SVG = 'svg';
    final public const PRESENTATION_SVM = 'svm';
    final public const PRESENTATION_SWF = 'swf';
    final public const PRESENTATION_SXI = 'sxi';
    final public const PRESENTATION_TIFF = 'tiff';
    final public const PRESENTATION_UOP = 'uop';
    final public const PRESENTATION_VOR = 'vor';
    final public const PRESENTATION_VOR3 = 'vor3';
    final public const PRESENTATION_VOR4 = 'vor4';
    final public const PRESENTATION_VOR5 = 'vor5';
    final public const PRESENTATION_WMF = 'wmf';
    final public const PRESENTATION_XPM = 'xpm';

    /**
     * @var string[]
     */
    protected static $values = [
        // TextDocument
        self::TEXT_BIB,
        self::TEXT_DOC,
        self::TEXT_DOC6,
        self::TEXT_DOC95,
        self::TEXT_DOCBOOK,
        self::TEXT_DOCX,
        self::TEXT_DOCX7,
        self::TEXT_FODT,
        self::TEXT_HTML,
        self::TEXT_LATEX,
        self::TEXT_MEDIAWIKI,
        self::TEXT_ODT,
        self::TEXT_OOXML,
        self::TEXT_OTT,
        self::TEXT_PDB,
        self::TEXT_PDF,
        self::TEXT_PSW,
        self::TEXT_RTF,
        self::TEXT_SDW,
        self::TEXT_SDW4,
        self::TEXT_SDW3,
        self::TEXT_STW,
        self::TEXT_SXW,
        self::TEXT_TEXT,
        self::TEXT_TXT,
        self::TEXT_UOT,
        self::TEXT_VOR,
        self::TEXT_VOR4,
        self::TEXT_VOR3,
        self::TEXT_WPS,
        self::TEXT_XHTML,

        // WebDocument
        self::WEB_ETEXT,
        self::WEB_HTML10,
        self::WEB_HTML,
        self::WEB_MEDIAWIKI,
        self::WEB_PDF,
        self::WEB_SDW3,
        self::WEB_SDW4,
        self::WEB_SDW,
        self::WEB_TXT,
        self::WEB_TEXT10,
        self::WEB_TEXT,
        self::WEB_VOR4,
        self::WEB_VOR,

        // Spreadsheet
        self::SPREADSHEET_CSV,
        self::SPREADSHEET_DBF,
        self::SPREADSHEET_DIF,
        self::SPREADSHEET_FODS,
        self::SPREADSHEET_HTML,
        self::SPREADSHEET_ODS,
        self::SPREADSHEET_OOXML,
        self::SPREADSHEET_OTS,
        self::SPREADSHEET_PDF,
        self::SPREADSHEET_PXL,
        self::SPREADSHEET_SDC,
        self::SPREADSHEET_SDC4,
        self::SPREADSHEET_SDC3,
        self::SPREADSHEET_SLK,
        self::SPREADSHEET_STC,
        self::SPREADSHEET_SXC,
        self::SPREADSHEET_UOS,
        self::SPREADSHEET_VOR3,
        self::SPREADSHEET_VOR4,
        self::SPREADSHEET_VOR,
        self::SPREADSHEET_XHTML,
        self::SPREADSHEET_XLS,
        self::SPREADSHEET_XLS5,
        self::SPREADSHEET_XLS95,
        self::SPREADSHEET_XLT,
        self::SPREADSHEET_XLT5,
        self::SPREADSHEET_XLT95,
        self::SPREADSHEET_XLSX,

        // Graphics
        self::GRAPHICS_BMP,
        self::GRAPHICS_EMF,
        self::GRAPHICS_EPS,
        self::GRAPHICS_FODG,
        self::GRAPHICS_GIF,
        self::GRAPHICS_HTML,
        self::GRAPHICS_JPG,
        self::GRAPHICS_MET,
        self::GRAPHICS_ODD,
        self::GRAPHICS_OTG,
        self::GRAPHICS_PBM,
        self::GRAPHICS_PCT,
        self::GRAPHICS_PDF,
        self::GRAPHICS_PGM,
        self::GRAPHICS_PNG,
        self::GRAPHICS_PPM,
        self::GRAPHICS_RAS,
        self::GRAPHICS_STD,
        self::GRAPHICS_SVG,
        self::GRAPHICS_SVM,
        self::GRAPHICS_SWF,
        self::GRAPHICS_SXD,
        self::GRAPHICS_SXD3,
        self::GRAPHICS_SXD5,
        self::GRAPHICS_SXW,
        self::GRAPHICS_TIFF,
        self::GRAPHICS_VOR,
        self::GRAPHICS_VOR3,
        self::GRAPHICS_WMF,
        self::GRAPHICS_XHTML,
        self::GRAPHICS_XPM,

        // Presentation
        self::PRESENTATION_BMP,
        self::PRESENTATION_EMF,
        self::PRESENTATION_EPS,
        self::PRESENTATION_FODP,
        self::PRESENTATION_GIF,
        self::PRESENTATION_HTML,
        self::PRESENTATION_JPG,
        self::PRESENTATION_MET,
        self::PRESENTATION_ODG,
        self::PRESENTATION_ODP,
        self::PRESENTATION_OTP,
        self::PRESENTATION_PBM,
        self::PRESENTATION_PCT,
        self::PRESENTATION_PDF,
        self::PRESENTATION_PGM,
        self::PRESENTATION_PNG,
        self::PRESENTATION_POTM,
        self::PRESENTATION_POT,
        self::PRESENTATION_PPM,
        self::PRESENTATION_PPTX,
        self::PRESENTATION_PPS,
        self::PRESENTATION_PPT,
        self::PRESENTATION_PWP,
        self::PRESENTATION_RAS,
        self::PRESENTATION_SDA,
        self::PRESENTATION_SDD,
        self::PRESENTATION_SDD3,
        self::PRESENTATION_SDD4,
        self::PRESENTATION_SXD,
        self::PRESENTATION_STI,
        self::PRESENTATION_SVG,
        self::PRESENTATION_SVM,
        self::PRESENTATION_SWF,
        self::PRESENTATION_SXI,
        self::PRESENTATION_TIFF,
        self::PRESENTATION_UOP,
        self::PRESENTATION_VOR,
        self::PRESENTATION_VOR3,
        self::PRESENTATION_VOR4,
        self::PRESENTATION_VOR5,
        self::PRESENTATION_WMF,
        self::PRESENTATION_XPM,
    ];

    /**
     * List of available formats.
     *
     * @return string[]
     */
    public static function getAvailableValues()
    {
        return static::$values;
    }
}
