<?php
$test_case = 2;
$total_roommates = [2,3];
$rage_sum = 0;
$iterate = 1;
$rage_array = array();
for($tc=0;$tc<$test_case;$tc++){
	for($i = $total_roommates; $i > 1; $i--){
		for($k=1; $k<=$i-1;$k++){
			$rage_sum += $i - $k;
		}
	}
	$rage_array[] = $rage_sum;
}

foreach($rage_array as $key => $rows){
	echo $rows."<br>";
}

?>