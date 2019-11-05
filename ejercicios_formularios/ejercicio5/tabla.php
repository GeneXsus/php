<?php
$numero_de_la_tabla=$_REQUEST['numero'];
print "Tabla de multiplicar del ". $numero_de_la_tabla;
for($x=0; $x<=10; $x++)
{
	print "$numero_de_la_tabla * $x = ".($numero_de_la_tabla *$x )."<br/>";
}

?>