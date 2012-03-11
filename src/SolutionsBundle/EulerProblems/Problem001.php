<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * Listing all the natural numbers below 10 that are multiples of 3 or 5,
 *  it yields 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 * note: this is the classic fizz/buzz interview question
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=1
 */
class Problem001 implements EulerProblem
{
	/* @var int */
	const CEILING = 1000;

	/**
	 * @return int
	 */
	public function solve()
	{
		$total = 0;

		for ($i = 3; $i < self::CEILING; $i++) {
			if (($i % 3 == 0) || ($i % 5 == 0)) {
				$total += $i;
			}
		}

		return $total;
	}
}
