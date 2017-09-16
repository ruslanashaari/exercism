<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    //
    // YOUR CODE GOES HERE
    //
    $ax = str_split($a);
    $bx = str_split($b);
    $dist = 0;

    for($i = 0; $i<count($ax); $i++){
    	if($ax[$i] != $bx[$i])
    		$dist++;
    }

    return $dist;
}
