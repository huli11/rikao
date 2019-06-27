<?php 




$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];

$arr = [];

foreach ($arr_A as $key => $v) {
	$arr[] = $v;
}

foreach ($arr_B as $key => $v) {
	$arr[] = $v;
}


foreach ($arr as $key => $v) {
	echo $v;
	echo "<br>";
}
// echo "<pre>";
// print_r($arr);


 ?>