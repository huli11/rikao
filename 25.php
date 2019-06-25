<?php 




$str = "abcdeefdfagheargv";
$len = strlen($str);
// echo $len;
$arr = [];
for ($i=0; $i < $len; $i++) { 

	if ($str[$i]) {
		echo $str[$i];die;
	}else{
		echo "-1";
	}
}



 ?>