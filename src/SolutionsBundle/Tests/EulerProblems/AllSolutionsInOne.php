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
    public function Problem020()
    {
        $this->markTestIncomplete('Not Solved');
    }

    /**
     * @test
     */
    public function Problem019()
    {
        $problem = new \SolutionsBundle\EulerProblems\Problem019();
        assertEquals(171, $problem->solve());
    }

    /**
     * @test
     */
    public function Problem017()
    {
        $this->markTestIncomplete('Not Solved');
    }

	/**
	 * @test
	 */
	public function Problem016()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem016();
		assertEquals(1366, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem015()
	{
		$this->markTestIncomplete('Not Solved');
	}

	/**
	 * @test
	 */
	public function Problem014()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem014();
		assertEquals(837799, $problem->solve(837780));
	}

	/**
	 * @test
	 */
	public function Problem013()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem013();
		assertEquals(5537376230, $problem->solve());
	}

	/**
	 * @test
	 */
	public function Problem012()
	{
		$problem = new \SolutionsBundle\EulerProblems\Problem012();
		assertEquals(76576500, $problem->solve(12375, 76564125));
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
		$this->markTestSkipped('Solution 10');
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
	 * @test
	 */
	public function Problem003()
	{
		$this->markTestSkipped('Problem 3');
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
