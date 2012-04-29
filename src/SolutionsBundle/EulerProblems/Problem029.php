<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-04-28
 * @link http://projecteuler.net/index.php?section=problems&id=29
 */
class Problem029 implements EulerProblem
{
    public function solve()
    {
        $terms = array();
        /* base */
        for ($n=2;$n<=100;$n++) {
            print "{$n}\n";
            flush();
            /* exponent */
            for ($e=2;$e<=100;$e++) {
                $term = bcpow($n, $e);
                if (!in_array($term, $terms)) {
                    $terms[] = $term;
                }
            }
        }

        return count($terms);
    }
}
