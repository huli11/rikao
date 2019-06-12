<?php 


function aaa($n)
{
	$arr = 1;
	$data = 0;
	while ($arr <= $n) {
		$data = ($n-1)+($n+1);
		$arr++;
	}
	return $data;
}


echo aaa(1);






 ?>