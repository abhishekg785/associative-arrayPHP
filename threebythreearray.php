<?php

$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));

$sum=0;
$sum_even=0;
$sum_odd=0;
$k=0;
for($i=0;$i<count($arr);$i++)
{
	$sum_row=0;
	for($j=0;$j<count($arr[$i]);$j++)
	{
		$sum_row+=$arr[$i][$j];
		$sum+=$arr[$i][$j];
		if($arr[$i][$j]%2==0)
		{
			$sum_even+=$arr[$i][$j];
		}
		else
		{
           $sum_odd+=$arr[$i][$j];
		}
	}
	echo "the sum of row $i is $sum_row<br/>";
}
echo "sum=$sum<br/>";
echo "even sum=$sum_even<br/>";
echo "even odd=$sum_odd";















?>