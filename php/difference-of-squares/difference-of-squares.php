<?php

function arrayX2($x) {
	return pow($x, 2);
}

function squareOfSums($number) {
	return pow(array_sum(range(1, $number)), 2);
}

function sumOfSquares($number, $x = 1) {
	return array_sum(array_map("arrayX2", range(1, $number)));
}

function difference($number) {
	return abs(squareOfSums($number) - sumOfSquares($number));
}