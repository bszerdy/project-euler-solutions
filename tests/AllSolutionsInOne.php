<?php

namespace SolutionsBundle\Tests\EulerProblems;

use \PHPUnit_Framework_TestCase;
use Utility\Utility;

date_default_timezone_set('America/Los_Angeles');

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 */
class AllSolutionsInOne extends PHPUnit_Framework_TestCase
{
    /**
     *@test 
     */
    public function wtf() {
        $problems = $this->get99Problems();
        
        foreach ($problems as $problem => $answer) {
            if (stristr($problem, '_skipped')) {
                printf("\nSolution %s is marked as skipped...", str_replace('_skipped', '', $problem));
                ob_flush();
                continue;
            }
            
            $start = new \DateTime();
            $s = "\\SolutionsBundle\\EulerProblems\\{$problem}";
            $p = new $s();
            assertEquals($answer, $p->solve());
            $end = new \DateTime();
            Utility::TotalRuntime($start, $end, $problem); 
        }
    }
    
    private function get99Problems() {
        return array(
            'Problem001' => 233168,
            'Problem002' => 4613732,
            'Problem003_skipped' => 6857,
            'Problem004' => 906609,
            'Problem005' => 232792560,
            'Problem006' => 25164150,
            'Problem007' => 104743,
            'Problem008' => 40824,
            'Problem009' => 31875000,
            'Problem010_skipped' => 142913828922,
            'Problem011' => 70600674,
            'Problem012_skipped' => 76576500,
            'Problem013' => 5537376230,
            'Problem014' => 837799,
            'Problem015_skipped' => null,
            'Problem016' => 1366,
            'Problem017_skipped' => null,
            'Problem018_skipped' => null,
            'Problem019' => 171,
            'Problem020' => 648,
            'Problem021_skipped' => null,
            'Problem022' => 871198282,
            'Problem023_skipped' => null,
            'Problem024_skipped' => null,
            'Problem025' => 4782,
            'Problem029' => 9183,
            'Problem035' => 55,
        );
    }
}