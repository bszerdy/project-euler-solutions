<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * The sum of the squares of the first ten natural numbers is,
 *	1^(2) + 2^(2) + ... + 10^(2) = 385
 *
 * The square of the sum of the first ten natural numbers is
 * (1 + 2 + ... + 10)^(2) = 55^(2) = 3025
 *
 * Hence the difference between the sum of the squares of the first ten
 *  natural numbers and the square of the sum is 3025 − 385 = 2640.
 *
 * Find the difference between the sum of the squares of the first one
 *  hundred natural numbers and the square of the sum.
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=6
 */
class Problem006 implements EulerProblem
{
	/* @var int */
	const CEILING = 100;

	/**
	 * @return int|number
	 */
	public function solve()
	{
		$sum_of_squares = 0;
		$square_of_sum	= 0;

		/* first get the sum of the squares */
		for ($i = 1; $i <= self::CEILING; $i++) {
			$sum_of_squares += pow($i, 2);
		}

		/* now square the sum */
		for ($i = 1; $i <= self::CEILING; $i++) {
			$square_of_sum += $i;
		}
		$square_of_sum = pow($square_of_sum, 2);

		return $square_of_sum - $sum_of_squares;
	}
}
