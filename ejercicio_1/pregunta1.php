<?php
$numero_variables=2;
$variable_0 = 5 ;
$variable_1 = 8;

print "The addition of $variable_0 and $variable_1 is ".($variable_0 + $variable_1)."<br/>";
print "The substraction of $variable_0 and $variable_1 is ".($variable_0 - $variable_1)."<br/>";
print "The multiplication of $variable_0 and $variable_1 is ".($variable_0 * $variable_1)."<br/>";
print "The division of $variable_0 and $variable_1 is ".($variable_0 / $variable_1)."<br/>";


if( $variable_0 > $variable_1)
print "The $variable_0 is bigger than $variable_1";
if( $variable_0 < $variable_1)
print "The $variable_1 is bigger than $variable_0";
if( $variable_0 == $variable_1)
print "The $variable_0 is equals to $variable_1";




// Solucion sin array
function  averaje(){
	$sumaElementos=0;
	for ($i=0; $i < $GLOBALS['numero_variables']; $i++) { 
		$sumaElementos= $GLOBALS['variable'+$i];

		# code...
	}
	return $sumaElementos/$GLOBALS['numero_variables'];
}

function  maximo(){
	$maximo="";
	for ($i=0; $i < $GLOBALS['numero_variables'] ; $i++) { 
		if($maximo==""){
			$maximo= $GLOBALS['variable'+$i];
		}else if($maximo< $GLOBALS['variable'+$i]){
			$maximo= $GLOBALS['variable'+$i];
		}
		

		# code...
	}
	return $maximo;
}

function  minimo(){
	$minimo="";
	for ($i=0; $i < $GLOBALS['numero_variables'] ; $i++) { 
		if($minimo==""){
			$minimo= $GLOBALS['variable'+$i];
		}else if($minimo> $GLOBALS['variable'+$i]){
			$minimo= $GLOBALS['variable'+$i];
		}
		

		# code...
	}
	return $minimo;
}



print "The average of $variable_0 and $variable_1  is ".(averaje() )."<br/>";
print  "The max of values is ".maximo();
print "The min of values is ".minimo();
?>