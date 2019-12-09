<?php

$binary_number = "000111011101010101010101010101011010101011111111111111111101010101010101010101";

if(strlen($binary_number) <= 100){
	$search_string = ["111111", "000000"];
	$is_available = false;
	foreach($search_string as $key => $rows){
		$find_string = strpos($binary_number, $rows);
		if($find_string !== false){
			$is_available = true;
		}
	}
	if($is_available){
		echo "Sorry, sorry!";
	} else {
		echo "Good luck!";
	}
} else {
	$find_string = strpos($binary_number, $rows);
	if(){
		echo "Please enter a valid binary string.";
	} else {

	echo "Binary string length should not be greater than 100 characters.";
	}
}
?>