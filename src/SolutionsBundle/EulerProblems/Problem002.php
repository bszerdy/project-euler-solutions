<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * Each new term in the Fibonacci sequence is generated by adding the
 * previous two terms. By starting with 1 and 2, the first 10 terms will be:
 *
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 *
 * Find the sum of all the even-valued terms in the sequence which do not
 * exceed four million.
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=2
 */
class Problem002 implements EulerProblem
{
	/* @var int */
	const CEILING = 4000000;

	/**
	 * @return int
	 */
	public function solve()
	{
		$first	= 1;
		$second	= 2;
		$third	= 0;
		$total	= 2; // need to include the first even number

		/* Execute the Fibonacci sequence and store the values */
		while ($third < self::CEILING) {
			$third = $first + $second;
			if ($third % 2 == 0) {
				$total += $third;
			}

			$third = $first + $second;
			$first = $second;
			$second = $third;
		}

		return $total;
	}
}
