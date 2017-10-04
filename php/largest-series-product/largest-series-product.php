<?php

class Series {

	protected $series;
	
	public function __construct($series) {
		$this->series = $series;
	}

	function largestProduct($number_count, $y = 0, $product = 0, $temp = 1) {
		$arr_series = str_split($this->series);

		while ($y<sizeof($arr_series)) {
			for ($x=0; $x<$number_count; $x++) {  
				$temp *= $arr_series[$y];
				$y++;

				if ($y>=sizeof($arr_series))
					break;
			}

			if ($temp > $product) {
				$product = $temp;
			}

			$temp = 1;
		}

		return $product;
	}
}

