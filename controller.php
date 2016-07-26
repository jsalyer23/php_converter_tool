<?php
	if($this_page == "Temperature") {
		$type = $_GET["temperature"];
		$input = (int)$_GET["input"];
		$temperature = new Temperature($type, $input);
		if($type == "fahrenheit") {
			$type2 = "Celsius";
		}
		else {
			$type2 = "Fahrenheit";
		}
	}
	else if($this_page == "Distance") {
		$type = $_GET["distance"];
		$input = (int)$_GET["input"];
		$distance = new Distance($type, $input);
		if($type == "miles") {
			$type2 = "Kilometers";
		}
		else {
			$type2 = "Miles";
		}
	}
	else if($this_page == "Weight") {
		$type = $_GET["weight"];
		$input = (int)$_GET["input"];
		$convert_to = $_GET["convert_to"];
		$weight = new Weight($type, $input, $convert_to);
		
	}


?>