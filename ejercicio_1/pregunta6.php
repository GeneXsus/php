<?php
echo "<table border='0' align='center' cellpadding='0' cellspacing='0' >";
echo "<tbody>";
	for($x=0; $x<=10; $x++)
	{
		echo "<tr>";
		for($y=0; $y<=10; $y++)
			{
				echo "<td  border='1' align='center' style=\"border: 1px solid #000 ;\">";
				echo " $x * $y = " . ($x*$y) ;
				echo "</td>";
			}
		echo "</tr>";
	}
echo "<tbody/>";
echo "<table/>";

?>