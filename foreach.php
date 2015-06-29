<?php

$arr=array(2,5,3,4,7,8,10);
$sum=0;
$sum_even=0;
$sum_odd=0;
foreach($arr as $v)
{
	$sum+=$v;
	if($v%2==0)
	{
		$sum_even+=$v;
	}
	else
	{
		$sum_odd+=$v;
	}
}
echo "$sum<br/>$sum_even<br/>$sum_odd";



?>