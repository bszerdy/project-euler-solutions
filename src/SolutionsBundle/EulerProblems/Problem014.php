<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;
use MathFunctionsBundle\Functions\Collatz;

/**
 * The following iterative sequence is defined for the set of positive integers:
 *
 * n → n/2 (n is even)
 * n → 3n + 1 (n is odd)
 *
 * Using the rule above and starting with 13, we generate the following sequence:
 *	13 → 40 → 20 → 10 → 5 → 16 → 8 → 4 → 2 → 1
 *
 * It can be seen that this sequence (starting at 13 and finishing at 1)
 *	contains 10 terms. Although it has not been proved yet (Collatz Problem),
 * it is thought that all starting numbers finish at 1.
 *
 * Which starting number, under one million, produces the longest chain?
 *
 * NOTE: Once the chain starts the terms are allowed to go above one million.
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-12
 * @link http://projecteuler.net/index.php?section=problems&id=14
 */
class Problem014 implements EulerProblem
{
	const CEILING = 840000;// 1000000;

	public function solve($start = 1)
	{
		$collatz = new Collatz();
		$most_cycles = 1;
		$retval = 0;

		for ($i=$start;$i<self::CEILING;$i++) {
			$collatz->setStart($i);
			$cycles = $collatz->solve();

			if ($cycles > $most_cycles) {
				$retval = $i;
				$most_cycles = $cycles;
			}
		}

		return $retval;
	}
}
