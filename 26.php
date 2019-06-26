<?php 


// $target = 7 ;
// $array=[
// 			[1,2,8,9],
// 			[2,4,9,12],
// 			[4,7,10,13],
// 			[6,8,11,15]
// 		];


function aaa($target,$array)
{
	$arr = [];
	foreach ($array as $key => $value) {
		foreach ($value as $key => $v) {
			if ($target == $v) {
				$arr[] = true;
			}else{
				$arr[] = false;
			}
		}
	}
	return $arr;
}


echo aaa(7,[
			[1,2,8,9],
			[2,4,9,12],
			[4,7,10,13],
			[6,8,11,15]
		]);


 ?>