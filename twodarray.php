<?php

$arr=array(array(1,2),array(3,4));
echo "<table border=\"2px\">";
for($i=0;$i<count($arr);$i++)
{
	echo "<tr>";
	for($j=0;$j<count($arr[$i]);$j++)
	{
		echo "<td>";
		echo $arr[$i][$j]." ";
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo $arr;//prints array
foreach($arr as $v)//prints array array
{
echo $v;	
}
echo "<br/>";
foreach($arr as $v)
{
foreach($v as $c)
{
	echo $c;
}
echo "<br/>";	
}


?>