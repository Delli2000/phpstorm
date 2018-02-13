<?php
/**
 * Created by PhpStorm.
 * User: maggioli
 * Date: 13/02/2018
 * Time: 11:09
 */
echo "<table border=1>";
for ($i=1;$i<=10;$i++)
{
	echo "<tr>";
	for ($j=0;$j<=10;$j++)
	{
		if ($i*$j%2==0)
		{
			echo "<td bgcolor='red'>";
		}
		else
		{
			echo "<td bgcolor='green'>";
		}
		echo $i*$j;
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
