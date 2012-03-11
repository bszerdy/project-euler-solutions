<?php

namespace MathFunctionsBundle\Functions;

/**
 * User: threadhack <threadhack@gmail.com>
 * Date: 2012-03-10
 */
class BasicFunctions
{
	/**
	 * Every even number is the sum of two primes, This function returns the
	 *	two primes that make up an even number.
	 *
	 * @param long num
	 * @return long[]
	 */
	public static function primesThatMakeEven($number)
	{
		$retval = NULL;

		/* if it's not an even number this is pointless */
		if ($number % 2 != 0) {
			return $retval;
		}

		/* satisfy the purists that say 1 and 2 are prime */
		if ($number == 2) {
			return array(1, 1);
		} elseif ($number == 3) {
			return array(1, 2);
		}

		for ($i = 3; $i < (($number-1)/2); $i += 2) {
			if ((BasicFunctions::isPrime($i)) && (BasicFunctions::isPrime($number - $i))) {
				$retval[] = array($i, $number - $i);
			}
		}

		return $retval;
	}

	/**
	 * Tests if the number is a prime number using the Sieve of Eratosthenes
	 * @static
	 * @param $number
	 * @return bool
	 */
	public static function isPrime($number)
	{
		if (($number == 1) || ($number == 2)) {
			return TRUE;
		}

		$prime = TRUE;
		for ($i=3;$i<=sqrt($number);$i+=2) {
			if ($number % $i == 0) {
				$prime = FALSE;
				break;
			}
		}

		if (($number % 2 != 0) && ($prime)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	/**
	 * A palindrome is a number of units that can be read the same way in either direction
	 * @static
	 * @param $number
	 * @param bool $showStatus
	 * @return bool
	 */
	public static function isPalindrome ($number, $showStatus = FALSE)
	{
		$even = strlen($number) % 2 == 0;

		$max = strlen($number)-1;
		$half = $even ? strlen($number)/2 : (strlen($number)-1)/2;

		$sNumber = strval($number);
		for ($i=0;$i<$half;$i++) {
			if ($showStatus) {
				print(sprintf("Left %s: Right: %s\n", $sNumber[$i], $sNumber[$max-$i]));
			}

			if ($sNumber[$i] != $sNumber[$max-$i]) {
				return FALSE;
			}
		}

		return TRUE;
	}
}
