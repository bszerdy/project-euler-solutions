<?php

namespace SolutionsBundle\Tests\EulerProblems;

use PHPUnit_Framework_TestCase;
use SolutionsBundle\EulerProblems\Problem001,
	SolutionsBundle\EulerProblems\Problem002,
	SolutionsBundle\EulerProblems\Problem003,
	SolutionsBundle\EulerProblems\Problem004;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 */
class AllSolutionsInOne extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function Problem004()
	{
		$problem = new Problem004();
		assertEquals(906609, $problem->solve());
	}

	/**
	 *
	 */
	public function Problem003()
	{
		$this->markTestSkipped("takes too long to complete."); //<-- throwns an error wf?
		$problem = new Problem003();
		assertEquals(6857, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem002()
	{
		$problem = new Problem002();
		assertEquals(4613732, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem001()
	{
		$problem = new Problem001();
		assertEquals(233168, $problem->solve());
	}
}
