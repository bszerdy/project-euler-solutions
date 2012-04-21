<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * How many Sundays fell on the first of the month during the twentieth
 * century (1 Jan 1901 to 31 Dec 2000)?
 *
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-04-20
 * @link http://projecteuler.net/index.php?section=problems&id=19
 */
class Problem019 implements EulerProblem
{
    public function solve()
    {
        $sundays = 0;

        $date = \DateTime::createFromFormat('j-m-Y', '1-1-1901', new \DateTimeZone('America/Los_Angeles'));
        $date = $date->setTime(0, 0, 0);

        while ($date->format('Y') <= 2000) {
            if ($date->format('l') == 'Sunday') {
                $sundays++;
            }

            $date = $date->add(new \DateInterval('P1M'));
        }

        return $sundays;
    }
}
