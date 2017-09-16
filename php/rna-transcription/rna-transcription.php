<?php

function toRna($nucleotides) {
	
	$dnaToRna = [
		"G" => "C",
		"C" => "G",
		"T" => "A",
		"A" => "U"
	];

	return strtr(strtoupper($nucleotides), $dnaToRna);
}