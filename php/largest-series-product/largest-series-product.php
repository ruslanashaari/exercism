<?php

class Series {

	protected $series;
	
	public function __construct($series) {
		$this->series = $series;
	}

	function largestProduct($number_count, $product = 0, $temp = 1, $x = 0, $y = 0) {
		$arr_series = str_split($this->series);

		for ($i=0; $i<sizeof($arr_series)-1; $i++) {

			for ($x=0; $x<$number_count; $x++) { 
			 	$temp = $arr_series[$i] * $arr_series[$i+$x];
			 } 
			// $temp = $arr_series[$i] * $arr_series[$i+1];

			if ($temp > $product)
				$product = $temp;
		}

		return $product;
	}
}

