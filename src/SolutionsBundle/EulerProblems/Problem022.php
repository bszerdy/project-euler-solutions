<?php

namespace SolutionsBundle\EulerProblems;

use SolutionsBundle\EulerProblems\EulerProblem;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-04-20
 * @link http://projecteuler.net/index.php?section=problems&id=22
 */
class Problem022 implements EulerProblem
{
    const ASCII = 64;

    public function solve()
    {
        $answer = 0;

        /* open file and load names */
        $names_str = file_get_contents(__DIR__.'/../../../resources/names.txt');
        $names_str = str_replace('"', '', $names_str);
        $names = explode(',', $names_str);
        sort($names, SORT_STRING);

        /* add the ASCII value multiplied by the position */
        for ($n=0;$n<count($names);$n++) {
            $position = bcmul($n+1, $this->name_value($names[$n]));
            $answer = bcadd($answer, $position);
        }

        return $answer;
    }

    /**
     * Returns the ASCII value of a name
     * @param $name
     * @return int
     */
    private function name_value($name)
    {
        $total = 0;

        for ($n=0;$n<strlen($name);$n++) {
            $total += ord(substr($name, $n, 1)) - self::ASCII;
        }

        return $total;
    }
}
