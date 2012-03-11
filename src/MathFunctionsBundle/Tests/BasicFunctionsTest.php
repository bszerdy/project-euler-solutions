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
		assertNull(BasicFunctions::primesThatMakeEven(21));
	}

	/**
	 * @test
	 */
	public function primesThatMakeEvenTrue()
	{
		$actual = BasicFunctions::primesThatMakeEven(24);

		assertTrue(count($actual) == 3);
		assertTrue(in_array(array(11, 13), $actual));
		assertTrue(in_array(array(5, 19), $actual));
		assertTrue(in_array(array(7, 17), $actual));
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
	public function isPrimeTrueWithOne()
	{
		assertTrue(BasicFunctions::isPrime(1, TRUE));
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
