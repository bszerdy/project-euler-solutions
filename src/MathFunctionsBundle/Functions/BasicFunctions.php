<?php

namespace MathFunctionsBundle\Functions;

/**
 * @author threadhack <threadhack@gmail.com>
 * @created 2012-03-10
 */
class BasicFunctions
{
	/* var array */
	private static $ONES = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');

	/* var array */
	private static $TEENS = array('ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen',
        'eighteen', 'nineteen');

	/* var array */
	private static $TENS = array('', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety');

	/* var array */
	private static $HUNDRED  = 'hundred';

	/* var array */
	private static $THOUSAND = 'thousand';

	/* var array */
	private static $AND = 'and';

	/**
	 * Returns an array of all proper divisors of a number
	 *
	 * @static
	 * @param $number
	 * @return array|null
	 */
	public static function getProperDivisors($number)
	{
		if ($number < 0) {
			return NULL;
		}

        $retval = array();

        for ($i = 1; $i <= $number; $i++) {
			if (($number % $i) == 0) {
				$retval[] = $i;
			}
		}

		return $retval;
	}

	/**
	 * Returns a list of factors of the given number
	 *
	 * @static
	 * @param $number
	 * @param bool $showStatus
	 * @return array
	 */
	public static function getFactors($number, $showStatus = FALSE)
	{
		$n = 1;
		$retval = array();
		$max = ($number % 2 == 0) ? ($number / 2) : (($number + 1) / 2);
		while ($n <= $max) {
			if (($number % $n) == 0) {
				$mate = $number / $n;
				if ($showStatus) {
					printf("%s and %s are factors of %s\n", $n, $mate, $number);
				}

				if (!in_array($n, $retval, TRUE)) {
					$retval[] = $n;
				}
				if (($mate != $n) && (!in_array($mate, $retval, TRUE))) {
					$retval[] = $mate;
				}
			}

			$n++;
		}

		sort($retval);
		return $retval;
	}

	/**
	 * Every even number is the sum of two primes, This function returns the
	 *	two primes that make up an even number.
	 *
	 * @static
	 * @param $number
	 * @return array|null
	 */
	public static function getPrimesThatMakeAnEvenNumber($number)
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
	 *
	 * @static
	 * @param $number
     * @param $considerOnePrime
	 * @return bool
	 */
	public static function isPrime($number, $considerOnePrime = TRUE)
	{
		if ((($number == 1) && ($considerOnePrime))|| ($number == 2)) {
			return TRUE;
		}

		if ($number % 2 == 0) {
			return FALSE;
		}

		$prime = TRUE;
		for ($i=3;$i<=sqrt($number);$i+=2) {
			if ($number % $i == 0) {
				$prime = FALSE;
				break;
			}
		}

		return $prime;
	}

	/**
	 * A palindrome is a number of units that can be read the same way in either direction
	 *
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

	/**
	 * @static
	 * @param $number
	 * @return mixed
	 * @throws \InvalidArgumentException
	 */
	public static function getHundredSpelledOut($number)
	{
		if (strlen($number) != 3) {
			throw new \InvalidArgumentException('This function only accepts a triple-digit number.');
		}

		$number = strval($number);
		$hundos = $number[0];
		$tens = $number[1];
		$ones = $number[2];

		if (($tens == 0) && ($ones == 0)) {
			return self::$ONES[$hundos] .' '. self::$HUNDRED;
		} else {
			return self::$ONES[$hundos] .' '. self::$HUNDRED .' '. self::$AND .' '
				. self::getTensSpelledOut(intval($tens.$ones));
		}
	}

	/**
	 * @static
	 * @param $number
	 * @return mixed
	 * @throws \InvalidArgumentException
	 */
	public static function getTensSpelledOut($number)
	{
		if (strlen($number) != 2) {
			throw new \InvalidArgumentException('This function only accepts a double-digit number.');
		}
		$number = strval($number);
		$tens = intval($number[0]);
		$ones = intval($number[1]);

		if ($tens == 1) {
			return self::$TEENS[$ones];
		} else {
			return self::$TENS[$tens] .'-'. self::$ONES[$ones];
		}
	}

	/**
	 * @static
	 * @param $number
	 * @return mixed
	 * @throws \InvalidArgumentException
	 */
	public static function getOnesSpelledOut($number)
	{
		if (strlen($number) > 1) {
			throw new \InvalidArgumentException('This function only accepts single digits.');
		}

		return self::$ONES[$number];
	}
}
