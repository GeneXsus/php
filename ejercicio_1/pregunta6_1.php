<?php
echo "<table border='0' align='center'  cellpadding='0' cellspacing='0'  style='border: 1px solid #000 ;' >";
echo "<tbody>";
	for($x=1; $x<=9; $x++)
	{
		$fila= is_even($x);
		echo "<tr>";
		for($y=1; $y<=9; $y++)
			{
				$columna= is_even($y);
				if ($fila && $columna)
					$color= '#FFF';
				elseif($fila && !$columna)
					$color= '#000';
				elseif(!$fila && $columna)
					$color= '#000';
				else
					$color= '#FFF';
				echo "<td  align='center' style=\" width: 30px; height: 30px; background:$color\">";
				echo "" ;
				echo "</td>";
			}
		echo "</tr>";
	}
echo "<tbody/>";
echo "<table/>";
function is_even($numero){
 if($numero%2 == 0)
	 return true;
 else
	 return false;
}

?>