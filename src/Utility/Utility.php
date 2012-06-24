<?php

namespace Utility;

use \DateTime;
/**
 * Description of Utility
 *
 * @author threadhack
 */
class Utility
{
    public static function TotalRuntime(DateTime $start, DateTime $end, $problem) {
        $interval = $end->diff($start);
        printf("\nThe total runtime for %s was %s seconds", $problem, $interval->s);
        ob_flush();
    }
}
