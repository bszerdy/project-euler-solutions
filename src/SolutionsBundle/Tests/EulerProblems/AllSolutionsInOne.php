<?php

namespace SolutionsBundle\Tests\EulerProblems;

use PHPUnit_Framework_TestCase;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-11
 */
class AllSolutionsInOne extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function Problem012()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem012();
		assertEquals(76576500, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem011()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem011();
		assertEquals(70600674, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem010()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem010();
		assertEquals(142913828922, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem009()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem009();
		assertEquals(31875000, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem008()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem008();
		assertEquals(40824, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem007()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem007();
		assertEquals(104743, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem006()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem006();
		assertEquals(25164150, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem005()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem005();
		assertEquals(232792560, $problem->solve());
	}

	/**
 	 * @test
	 */
	public function Problem004()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem004();
		assertEquals(906609, $problem->solve());
	}

	/**
	 * disabled because this solution needs to be optimized
	 */
	public function Problem003()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem003();
		assertEquals(6857, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem002()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem002();
		assertEquals(4613732, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem001()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem001();
		assertEquals(233168, $problem->solve());
	}
}
