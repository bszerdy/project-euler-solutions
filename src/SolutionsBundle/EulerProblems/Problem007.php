<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;
use MathFunctionsBundle\Functions\BasicFunctions;

/**
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13,
 * we can see that the 6^(th) prime is 13.
 *
 * What is the 10001^(st) prime number?
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=7
 */
class Problem007 implements EulerProblem
{
	/**
	 * @return int
	 */
	public function solve()
	{
		$index = 1;
		$n = 2;

		while ($n < 200000) {
			if (BasicFunctions::isPrime($n)) {
				if ($index == 10001) {
					break;
				}
				$index++;
			}
			$n++;
		}

		return $n;
	}
}
