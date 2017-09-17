<?php

function squareOfSums($number,  $sum = 0) {
	for ($x = 1; $x <= $number; $x++) {
		$sum += $x;
	}

	return pow($sum, 2);
}

function sumOfSquares($number, $sum = 0) {
	for ($x = 1; $x <= $number; $x++) {
		$sum += pow($x, 2);
	}

	return $sum;
}

function difference($number) {
	return abs(squareOfSums($number) - sumOfSquares($number));
}