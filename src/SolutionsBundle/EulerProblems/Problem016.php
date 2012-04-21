<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * 2^(15) = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
 *
 * What is the sum of the digits of the number 2^(1000)?
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-13
 * @link http://projecteuler.net/index.php?section=problems&id=16
 */
class Problem016 implements EulerProblem
{
	/**
	 * @return int
	 */
	public function solve()
	{
		$calculated = bcpow('2', '1000');
        $retval = 0;

		for ($i = 0; $i < strlen($calculated); $i++) {
			$retval += intval($calculated[$i]);
		}

		return $retval;
	}
}
