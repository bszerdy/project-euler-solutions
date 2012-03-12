<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;
use MathFunctionsBundle\Functions\BasicFunctions;

/**
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 *
 * Find the sum of all the primes below two million.
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=10
 */
class Problem010 implements EulerProblem
{
	const CEILING = 2000000;

	public function solve()
	{
		$retval = 2;

		for ($i = 3; $i < self::CEILING; $i+=2) {
			if (BasicFunctions::isPrime($i)) {
				$retval += $i;
			}
		}

		return $retval;
	}
}
