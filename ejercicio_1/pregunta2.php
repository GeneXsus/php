<?php
$numero_a_comparar = 4 ;
if( is_even($numero_a_comparar))
	print "$numero_a_comparar is even";
else 
	print "$numero_a_comparar is odd";
	

function is_even($numero){
 return ($numero%2 == 0);
}

?>