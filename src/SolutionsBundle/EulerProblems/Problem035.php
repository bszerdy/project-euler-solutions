<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;
use MathFunctionsBundle\Functions\BasicFunctions;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-04-20
 * @link http://projecteuler.net/index.php?section=problems&id=35
 */
class Problem035 implements EulerProblem
{
    const CEILING = 1000000;

    public function solve()
    {
        /* starting out count the number 2 */
        $count = 1;
        $primes_str = file_get_contents(__DIR__.'/../../../resources/primes.txt');
        $primes_str = str_replace('"', '', $primes_str);
        $primes = explode(',', $primes_str);

        foreach ($primes as $prime) {
            if (strlen($prime) == 1) {
                $count++;
                continue;
            }

            if ((strlen($prime) == 2) && (in_array(strrev($prime), $primes))) {
                $count++;
                continue;
            }


        }

        return $count;
    }
}
