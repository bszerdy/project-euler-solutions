<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * 2520 is the smallest number that can be divided by each of the numbers
 *	from 1 to 10 without any remainder.
 *
 * What is the smallest number that is evenly divisible by all of the numbers
 *  from 1 to 20?
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=5
 */
class Problem005 implements EulerProblem
{
	//TODO - this is pretty much a brute force solution. It needs to be better.

	/* @var int */
	const CEILING = 300000000;

	/**
	 * @return int
	 */
	public function solve()
	{
		/* shortcut the starting number */
		$n = 232792550;
		while ($n < self::CEILING) {
			for ($i = 1; $i <= 20; $i++) {
				if ($n % $i != 0) {
					break;
				}

				if ($i == 20) {
					return $n;
				}
			}
			$n++;
		}

		return -1;
	}
}
