<?php
$numero_de_la_tabla=$_REQUEST['numero'];
print "Tabla de multiplicar del ". $numero_de_la_tabla."<br>";
if (isset($_REQUEST['enviado'])){
	$error=0;
	for($x=0; $x<=10; $x++){
		$valor=isset($_REQUEST[('numero'.$x)])?$_REQUEST[('numero'.$x)]: "";
		if($valor!=($numero_de_la_tabla * $x)){
			$error++;
			print "El resultado de multiplicar $numero_de_la_tabla * $x es ".($numero_de_la_tabla * $x)." y no $valor <br>";
		}
	}
	print "El número de errores es: $error <br>";
}else{

	$form="<form action='tabla.php' type'post'> ".
	"<input type='hidden' name='numero' value='$numero_de_la_tabla'>";
	for($x=0; $x<=10; $x++)
	{
		$form.="<label for='numero$x'>$numero_de_la_tabla * $x = </label> <input type='number' name='numero$x'><br/>";
	}
	$form.=" <input type='submit' name='enviado' value='submit'> </form>";
	print $form;
}

?>