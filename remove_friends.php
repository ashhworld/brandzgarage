<?php
$test_case = array();
$number_of_testcase = 3;
$test_case[0] = array("remove_friend" => 1, "friends_popularity" =>[3, 100, 1]);
$test_case[1] = array("remove_friend" => 2, "friends_popularity" =>[19, 12, 3, 4, 17]);
$test_case[2] = array("remove_friend" => 3, "friends_popularity" => [23, 45, 11, 77, 18]);


for($i = 0; $i < $number_of_testcase; $i++){
	$remove_friend = $test_case[$i]['remove_friend'];
	$friend = $test_case[$i]['friends_popularity'];
	for($j = 0; $j < $remove_friend; $j++){
		$friend = removeFriend($friend);
		$test_case[$i]['friends_popularity'] = $friend;
	}
}
echo "Output: <br>";
foreach($test_case as $key => $rows){
	echo "Test Case ".($key+1)." : ";
	$display = "";
	foreach($rows['friends_popularity'] as $f_key => $f_rows){
		$display .= "  ".$f_rows;
	}

	echo $display."<br>";
}


function removeFriend($Friend){
	$delete_friend = false;
	$total_friend = count($Friend);

	for($k=0; $k<($total_friend-1);$k++){
		
		if(isset($Friend[($k)]) && isset($Friend[($k+1)]) && ($Friend[$k] < $Friend[$k+1])){
			unset($Friend[$k]);

			$delete_friend = true;
			break;
		}
	}
	if($delete_friend == false){
		unset($Friend[count($Friend) - 1]);
	}
	$Friend = array_values($Friend);
	return $Friend;
}

?>