<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;
use MathFunctionsBundle\Functions\BasicFunctions;

/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143?
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=3
 */
class Problem003 implements EulerProblem
{
	const SUBJECT = 600851475143;

	public function solve()
	{
		$retval = 0;
		$prime_factors = BasicFunctions::getFactors(self::SUBJECT, TRUE);

		foreach ($prime_factors as $factor) {
			if ($factor > $retval) {
				$retval = $factor;
			}
		}

		return $retval;
	}
}
