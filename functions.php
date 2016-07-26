<?php


	class Temperature {

		var $type_param;
		var $weight_param;

		function __construct($type_param, $weight_param) {
			$this->type_param = $type_param;
			$this->weight_param = $weight_param;
		}

		// This function converts celsius to fahrenheit
		//
		// RETURNS FLOAT
		function to_fahrenheit() {
			return ($this->weight_param * 1.8) + 32;
		}

		// This function converts fahrenheit to celsius
		//
		// RETURNS FLOAT
		function to_celsius() {
			return ($this->weight_param - 32) * 1.8;
		}

		// This function returns the correct conversion function
		//
		// RETURNS FUNCTION (WHICH RETURNS FLOAT)
		function convert_to() {
			if($this->type_param == "fahrenheit") {
				return $this->to_fahrenheit();
			}
			else if($this->type_param == "celsius") {
				return $this->to_celcius();
			}
		}
	}

	// $converter = 1.609344

	class Distance {

		var $converter;
		var $type_param;
		var $weight_param;

		function __construct($type_param, $weight_param) {
			$this->converter = 1.609344;
			$this->type_param = $type_param;
			$this->weight_param = $weight_param;
		}

		// This function converts kilometers to miles
		//
		// RETURNS FLOAT
		function to_miles() {
			return $this->weight_param / $this->converter;
		}

		// This function converts miles to kilometers
		//
		// RETURNS FLOAT
		function to_kilometers() {
			return $this->weight_param * $this->converter;
		}

		// This function returns the correct conversion function
		//
		// RETURNS FUNCTION (WHICH RETURNS FLOAT)
		function convert_to() {
			if($this->type_param == "miles") {
				return $this->to_miles();
			}
			else if($this->type_param == "kilometers") {
				return $this->to_kilometers();
			}
		}
	}

	// $kilo_convert = 0.45359237
	// $stone_convert = 14

	class Weight {

		var $kilo_convert;
		var $stone_convert;
		var $type;
		var $weight;
		var $convert_to;

		function __construct($type_param, $weight_param, $convert_to_param) {
			$this->type = $type_param;
			$this->weight = $weight_param;
			$this->convert_to = $convert_to_param;
			$this->kilo_convert = 0.45359237;
			$this->stone_convert = 14;
		}

		// This function converts kilograms to pounds
		//
		// RETURNS FLOAT
		function kilograms_to_pounds() {
			return $this->weight / $this->kilo_convert;
		}

		// This function converts stones to pounds
		//
		// RETURNS FLOAT
		function stones_to_pounds() {
			return $this->weight * $this->stone_convert;
		}

		// This function converts pounds to kilograms
		//
		// RETURNS FLOAT
		function pounds_to_kilograms() {
			return $this->weight * $this->kilo_convert;
		}

		// This function converts stones to kilograms
		//
		// RETURNS FLOAT
		function stones_to_kilograms() {
			$lbs = $this->weight * $this->stone_convert;
			return $lbs * $this->kilo_convert;
		}

		// This function converts pounds to stones
		//
		// RETURNS FLOAT
		function pounds_to_stones() {
			return $this->weight / $this->stone_convert;
		}

		// This function converts kilograms to stones
		//
		// RETURNS FLOAT
		function kilograms_to_stones() {
			$lbs = $this->weight / $this->kilo_convert;
			return $lbs / $this->stone_convert;
		}

		// This function returns the correct conversion function
		//
		// RETURNS FUNCTION (WHICH RETURNS FLOAT)
		function convert_to() {
			if($this->type == "kilograms" && $this->convert_to == "pounds") {
				return $this->kilograms_to_pounds();
			}
			else if($this->type == "kilograms" && $this->convert_to == "stones") {
				return $this->kilograms_to_stones();
			}
			else if($this->type == "stones" && $this->convert_to == "pounds") {
				return $this->stones_to_pounds();
			}
			else if($this->type == "stones" && $this->convert_to == "kilograms") {
				return $this->stones_to_kilograms();
			}
			else if($this->type == "pounds" && $this->convert_to == "kilograms") {
				return $this->pounds_to_kilograms();
			}
			else if($this->type == "pounds" && $this->convert_to == "stones") {
				return $this->pounds_to_stones();
			}
		}

		// This function displays an error message if converted from and converted to are the same
		//
		// RETURNS STRING
		function error_message() {
			if($this->type == "pounds" && $this->convert_to == "pounds") {
				return "You can't convert " . $this->type . " to " . $this->convert_to . "!";
			}
			else if($this->type == "kilograms" && $this->convert_to == "kilograms") {
				return "You can't convert " . $this->type . " to " . $this->convert_to . "!";
			}
			else if($this->type == "stones" && $this->convert_to == "stones") {
				return "You can't convert " . $this->type . " to " . $this->convert_to . "!";
			}
			else {
				return "";
			}
		}

	}
	
?>