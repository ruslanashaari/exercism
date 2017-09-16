


<?php

function raindrops($drops) {
	
	$output = '';

	if ($drops%3 == 0) {
		$output .= "Pling";
	}
	if ($drops%5 == 0) {
		$output .= "Plang";
	}
	if ($drops%7 == 0) {
		$output .= "Plong";
	}

	return (empty($output) ? "$drops" : $output);
}