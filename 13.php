<?php 


$arr = [1,2,3,4,5,6];
$ji = $ou = [];
foreach ($arr as $key => $v) {
	if ($v%2 == 1) {
		$ji = $v;
	}else{
		$ou = $v;
	}
}
echo "<pre>";
print_r(array_merge($ji,$ou));





 ?>