<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-04-28
 * @link http://projecteuler.net/index.php?section=problems&id=25
 */
class Problem025 implements EulerProblem
{
    public function solve()
    {
        $total = 0;
        $count = 2;
        $n1=1;
        $n2=1;
        do {
            $total = bcadd($n1, $n2);
            $n1 = $n2;
            $n2 = $total;
            $count++;
        } while (strlen($total) != 1000);

        return $count;
    }
}
