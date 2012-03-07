<?php

namespace src\MathFunctions;

/**
 * Created by JetBrains PhpStorm.
 * User: threadhack
 * Date: 2012-02-14
 */
class Collatz
{
	protected $cycles = 0;
	protected $maxHeight = 0;
	protected $start = 1;
	protected $showStatus = FALSE;

	public function __construct($start = 1, $showStatus = FALSE)
	{
		$this->start = $start;
		$this->showStatus = $showStatus;
	}

	public function solution() {
		if ($this->start == 1) {
			return 1;
		}

		$begin = $this->start;
		$this->maxHeight = $begin;
		$retval = 0;

		while ($begin > 1) {
			$retval++;
			if (($begin % 2) == 0) { /* even */
				$begin /= 2;
			} else { /* odd */
				$begin = (($begin * 3) + 1);
			}

			if ($begin > $this->maxHeight) {
				$this->maxHeight = $begin;
			}

			if ($this->showStatus) {
				print(sprintf("Step %s: value: %s", $retval, $begin));
			}
		}

        if ($this->showStatus) {
			print(sprintf("Solution took %s cycles, with a maximum value of %s.", $retval, $this->maxHeight));
		}

		$this->cycles = $retval;

		return $retval;
	}
}
