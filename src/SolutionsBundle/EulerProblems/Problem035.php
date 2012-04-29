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

            if (strlen($prime) == 2) {
                if (in_array(strrev($prime), $primes)) {
                    $count++;
                    continue;
                } else {
                    continue;
                }
            }

            /* if it ends in an even number it's not prime */
            if (strpbrk($prime, '02468') !== FALSE) {
                continue;
            }

            $temp = $prime;
            do {
                /* char shift */
                $temp = substr($temp, 1) . substr($temp,0,1);

                if (!in_array(intval($temp), $primes)) {
                    continue 2;
                }

            } while ($temp != $prime);

            $count++;
        }

        return $count;
    }
}
