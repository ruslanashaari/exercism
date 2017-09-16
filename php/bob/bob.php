<?php

class Bob{
	function respondTo($a){
  
		if (strtoupper($a) == $a && preg_match('/[A-Z]/', $a)) {
			return "Whoa, chill out!";
		} elseif (preg_match('/[?]$/', trim($a))) {
			return "Sure.";
		} elseif (strlen(trim($a)) == 0) {
			return "Fine. Be that way!";
		} else {
			return "Whatever.";	
		}
	}
}
?>