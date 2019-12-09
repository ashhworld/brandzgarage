<?php

	$str = "love";
	$input_str = "v3333333lssssosddeasdafvajfgnkdfen33333";
	$final_output = "";
	
	$i = 0;
	for($j = 0; $j<strlen($input_str); $j++){
		$search_char = $str[$i];
		if($input_str[$j] === $search_char){
			$final_output .= $search_char;
			$i++;
			if(strlen($str) == $i){
				break;
			}
		}
	}
	if($final_output == $str){
		echo "I love you, too!";
	} else {
		echo "Let us breakup!";
	}
?>