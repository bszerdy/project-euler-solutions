<?php

namespace MathFunctionsBundle\Tests;

use MathFunctionsBundle\Functions\BasicFunctions;
use PHPUnit_Framework_TestCase;

/**
 * User: threadhack <threadhack@gmail.com>
 * Date: 2012-03-10
 */
class BasicFunctionsTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function primesThatMakeEvenFalse()
	{
		$expected = array(11, 13);
		$actual = BasicFunctions::primesThatMakeEven(21);

		assertNotEquals($expected, $actual);
	}

	/**
	 * @test
	 */
	public function primesThatMakeEvenTrue()
	{
		$expected = array(11, 13);
		$actual = BasicFunctions::primesThatMakeEven(24);

		assertEquals($expected, $actual);
	}

	/**
	 * @test
	 */
	public function isPrimeTrue()
	{
		assertTrue(BasicFunctions::isPrime(13));
	}

	/**
	 * @test
	 */
	public function isPrimeFalse()
	{
		assertFalse(BasicFunctions::isPrime(22));
	}

	/**
	 * @test
	 */
	public function iCanHazPalindromeOdd()
	{
		assertTrue(BasicFunctions::isPalindrome(12321));
	}

	/**
	 * @test
	 */
	public function iCanHazPalindromeEven()
	{
		assertTrue(BasicFunctions::isPalindrome(123321));
	}

	/**
	 * @test
	 */
	public function notAPalindrome()
	{
		assertFalse(BasicFunctions::isPalindrome(123123));
	}
}
