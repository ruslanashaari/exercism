<?php

//
// This is only a SKELETON file for the "Hello World" exercise.
// It's been provided as a convenience to get you started writing code faster.
//

function helloWorld($name = null)
{
    //
    // YOUR CODE GOES HERE
    //
    if (is_null($name))
    	return "Hello, World!";

	return "Hello, ".$name."!";
}
