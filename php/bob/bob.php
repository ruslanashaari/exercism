<?php

class Bob {
	function respondTo($statement){

		if (Statement::isYelling($statement)) {
			return "Whoa, chill out!";
		}

		if (Statement::isQuestion($statement)) {
			return "Sure.";
		}

		if (Statement::isNothing($statement)) {
			return "Fine. Be that way!";
		}

		return "Whatever.";			
	}
}

class Statement {
	
	static function isYelling($statement)
	{
		return (strtoupper($a) == $a && preg_match('/[A-Z]/', $a);
	}

	static function isQuestion($statement)
	{
		return (preg_match('/[?]$/', trim($a)));
	}

	static function isNothing($statement)
	{
		return (strlen(trim($a)) == 0);
	}

}
?>