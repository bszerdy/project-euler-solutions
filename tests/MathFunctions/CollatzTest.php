<?php

namespace test\MathFunctions;

use src\MathFunctions\Collatz;
use PHPUnit_Framework_TestCase;

/**
 * User: threadhack <threadhack@gmail.com>
 * Date: 2012-02-14
 */
class CollatzTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function init_long()
	{
		$start = 4;
        $instance = new Collatz($start, TRUE);

		$instance->solution();

	}
}
