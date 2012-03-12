<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem,
	MathFunctionsBundle\Functions\BasicFunctions;

/**
 * A palindromic number reads the same both ways. The largest palindrome made
 *  from the product of two 2-digit numbers is 9009 = 91 × 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=4
 */
class Problem004 implements EulerProblem
{
	const CEILING = 999;
	const START = 100;

	/**
	 * @return int
	 */
	public function solve()
	{
		$retval = 0;

		for	($i = self::START; $i < self::CEILING; $i++) {
			for ($n = self::CEILING; $n > self::START; $n--) {
				if (BasicFunctions::isPalindrome($n * $i)) {
					$retval = ($n * $i > $retval) ? $n * $i : $retval;
				}
			}
		}

		return $retval;
	}
}
