<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * n! means n(n-1) x ... x 3 x 2 x 1
 *
 * For example, 10! = 10 x 9 x ... x 3 x 2 x 1 = 3628800,
 * and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
 *
 * Find the sum of the digits in the number 100!
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-04-26
 * @link http://projecteuler.net/index.php?section=problems&id=20
 */
class Problem020 implements EulerProblem
{
    public function solve()
    {
        $answer = 0;
        $total = 100;
        $n = 99;

        /* get the total of 100! */
        while ($n > 0) {
            $total = bcmul($total, $n);
            $n--;
        }

        /* add it up */
        for ($i = 0; $i < strlen($total)-1; $i++) {
            $p = intval(substr($total, $i, 1));
            $answer = bcadd($answer, $p);
        }

        return $answer;
    }
}
