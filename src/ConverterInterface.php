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

interface ConverterInterface
{
    /**
     * Convert formats.
     *
     * @return mixed
     *
     * @throws ConverterException
     */
    public function convert(Parameters $parameters);
}
