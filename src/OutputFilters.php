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

class OutputFilters
{
    /**
     * More filters: https://wiki.openoffice.org/wiki/Framework/Article/Filter/FilterList_OOo_3_0.
     */
    final public const TEXT_ENCODED = 'Text (encoded)';
    final public const UTF8 = 'UTF8';

    /**
     * Default filters for output formats.
     *
     * @param string $outputFormat
     *
     * @return array
     */
    public static function getDefault(
        /*string*/
        $outputFormat
    ) {
        return match ($outputFormat) {
            Format::TEXT_TEXT => [
                static::TEXT_ENCODED,
                static::UTF8,
            ],
            default => [],
        };
    }
}
