<?php


function prime($nth)
{
	if ($nth <= 0) {
		return false;
	}

	$max = 10;
	// 3rd of primes
	for ($i = 2; $i < $max; $i++) 
	{
			if (isPrime($i)) 
			{
				$prime[] = $i;

				if (count($prime) == $nth)
				{
					return $i; 	
				}

				$max*=2;
			}
	}
}

function isPrime($number)
{
	if ($number < 2) {
		return false;
	}

	for ($i = 2; $i < $number; $i++) {
		if ($number % $i == 0) {
			return false;
		}
	}

	return true;
}
