<?php

function isIsogram($phrase){

	$array_phrase = str_split(strtolower(preg_replace('/[\s-äöü]/', '', $phrase))); 

	return count($array_phrase) == count(array_unique($array_phrase));
}