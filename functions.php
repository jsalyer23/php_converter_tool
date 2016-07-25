<?php
	class Temperature {

		function to_fahrenheit() {
			($input * 1.8) + 32;
		}

		function to_celcius() {
			($input - 32) * 1.8;
		}
	}

	// $converter = 1.609344

	class Distance {

		function to_miles() {
			$input / $converter;
		}

		function to_kilometers() {
			$input * $converter;
		}
	}

	// $kilo_convert = 0.45359237
	// $stone_convert = 14

	class Weight {

		function kilograms_to_pounds() {
			$kilograms / $kilo_convert;
		}

		function stones_to_pounds() {
			$stones * $stone_convert;
		}

		function pounds_to_kilograms() {
			$pounds * $kilo_convert;
		}

		function stones_to_kilograms() {
			$lbs = $stones * $stone_convert;
			$lbs * $kilo_convert;
		}

		function pounds_to_stones() {
			$pounds / $stone_convert;
		}

		function kilograms_to_stones() {
			$lbs = $kilograms / $kilo_convert;
			$lbs / $stone_convert;
		}
	}
?>