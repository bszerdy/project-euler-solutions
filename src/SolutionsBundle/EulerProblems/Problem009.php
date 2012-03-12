<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for
 * which, a^(2) + b^(2) = c^(2)
 *
 * For example, 3^(2) + 4^(2) = 9 + 16 = 25 = 5^(2).
 *
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 *
 * Find the product abc.
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 * @link http://projecteuler.net/index.php?section=problems&id=9
 */
class Problem009 implements EulerProblem
{
	const CEILING = 1000;

	/**
	 * @return int
	 */
	public function solve()
	{
		for ($a = 200; $a <= self::CEILING; $a++) {
			for ($b = $a; $b <= self::CEILING; $b++) {
				for ($c = $b; $c < self::CEILING; $c++) {

					if (($a + $b + $c == 1000) && ((pow($c, 2)) == (pow($a, 2) + pow($b, 2)))) {
//						printf("%s < %s < %s\n", $a, $b, $c);
						return intval($a * $b * $c);
					}
				}
			}
		}
		return -1;
	}
}
