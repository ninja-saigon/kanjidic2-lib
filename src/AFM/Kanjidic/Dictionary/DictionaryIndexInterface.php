<?php

/*
 * This file is part of the kanjidic2-lib
 *
 * (c) Alberto Fernández <albertofem@gmail.com>
 *
 * For the full copyright and license information, please read
 * the LICENSE file that was distributed with this source code.
 */

namespace AFM\Kanjidic\Dictionary;

/**
 * Represents the index of a kanji dictionary
 */
interface DictionaryIndexInterface
{
	/**
	 * @abstract
	 * @return mixed
	 */
	public function getName();

	/**
	 * @abstract
	 * @return mixed
	 */
	public function getIndex();
}
