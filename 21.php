<?php 






function Sum_Solution($n)
{
	$sum = 0;
	for ($i=1; $i <= $n; $i++) { 
		$sum = $sum+$i;
	}
	return $sum;
}

echo Sum_Solution(5);





 ?>