<?php

namespace MathFunctionsBundle\Tests;

use MathFunctionsBundle\Functions\BasicFunctions;
use PHPUnit_Framework_TestCase;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-10
 */
class BasicFunctionsTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function getProperDivisors()
	{
		$expected = array(1, 2, 4, 5, 10, 20, 25, 50, 100);
		$actual = BasicFunctions::getProperDivisors(100);

		assertEquals($expected, $actual);
	}

	/**
	 * @test
	 */
	public function getFactors()
	{
		$expected = array(1, 2, 4, 5, 10, 20);
		$actual = BasicFunctions::getFactors(20);

		assertEquals($expected, $actual);
	}

	/**
	 * @test
	 */
	public function primesThatMakeEvenFalse()
	{
		assertNull(BasicFunctions::getPrimesThatMakeAnEvenNumber(21));
	}

	/**
	 * @test
	 */
	public function primesThatMakeEvenTrue()
	{
		$actual = BasicFunctions:: getPrimesThatMakeAnEvenNumber(24);

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
