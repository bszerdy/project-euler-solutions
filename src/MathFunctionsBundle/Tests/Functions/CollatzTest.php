<?php

namespace MathFunctionsBundle\Tests;

use \MathFunctionsBundle\Functions\Collatz;
use \PHPUnit_Framework_TestCase;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-02-14
 */
class CollatzTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function solveOdd()
	{
		$expected = 3;
		$start = 1;
        $instance = new Collatz($start, TRUE);

		$actual = $instance->solution();

		assertEquals($expected, $actual);
	}

	/**
	 * @test
	 */
	public function solveEven()
	{
		$expected = 10;
		$start = 24;
		$instance = new Collatz($start, TRUE);

		$actual = $instance->solution();

		assertEquals($expected, $actual);
	}
}
