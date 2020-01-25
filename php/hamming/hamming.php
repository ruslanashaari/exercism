<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//
// distance('GGACG', 'AGGACGTGG');

function distance($a, $b)
{
    //
    // YOUR CODE GOES HERE
    //
    $ax = str_split($a);
    $bx = str_split($b);
    $dist = 0;

    if (count($ax) !== count($bx)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    for($i = 0; $i<count($ax); $i++){
    	if($ax[$i] != $bx[$i])
    		$dist++;
    }

    return $dist;
}
