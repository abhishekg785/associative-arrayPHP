<?php

$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));

$sum=0;
$sum_even=0;
$sum_odd=0;
$k=0;
foreach($arr as $i)
{
	$sum_row=0;
	foreach($i as $c)
	{
		$sum_row+=$c;
		$sum+=$c;
		if($c%2==0)
		{
			$sum_even+=$c;
		}
		else
		{
           $sum_odd+=$c;
		}
	}
	echo "the sum of row $k is $sum_row<br/>";
	$k=$k+1;
}
echo "sum=$sum<br/>";
echo "even sum=$sum_even<br/>";
echo "even odd=$sum_odd";















?>