<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * If the numbers 1 to 5 are written out in words: one, two, three, four, five,
 * then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
 *
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out
 * in words, how many letters would be used?
 *
 * NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and
 * forty-two) contains 23 letters and 115 (one hundred and fifteen) contains
 * 20 letters. The use of "and" when writing out numbers is in compliance with
 * British usage.
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-13
 * @link http://projecteuler.net/index.php?section=problems&id=17
 */
class Problem017 implements EulerProblem
{
	/* var array */
	private static $EXCLUDE = array(',', '-', ' ');

	/* var int */
	const CEILING = 1000;

	public function solve()
	{
		for ($i = 1; $i <= self::CEILING; $i++) {

		}

	}

}
