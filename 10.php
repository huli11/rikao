<?php 	



 function aaa($m,$n)
{
	for ($i=$m; $i < $n; $i++) { 
		if ($n[$i] >= 150) {
			return 1;
		}else{
			return 2;
		}
	}return 3;
}


echo aaa(100,200);





 ?>