<?php
session_start() ;
$nombreUsu=isset($_SESSION['usuario'])?$_SESSION['usuario']:"";
?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>


<?php

if($nombreUsu == ''){
    echo "<h1>No tiene acceso</h1>";
    echo "<p>Tiene que loguearse</p>";
    echo "<a href='index.php'>Login</a>";
}else{
?>
<h1>Subida de ficheros</h1>
<h2>Resultado de la insercion de nueva noticia</h2>
    <?php 
        //recoger parametros
        $titulo=$_REQUEST['titulo'];
        $texto=$_REQUEST['texto'];
        $categoria=$_REQUEST['categoria'];
        // Carga de ficheros
        if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
            {
                $nombreDirectorio = "img/";
                $nombreFichero = $_FILES['imagen']['name'];
                $nombreCompleto = $nombreDirectorio . $nombreFichero;
            if (is_file($nombreCompleto))
            {
                $idUnico = time();
                $nombreFichero = $idUnico . "-" . $nombreFichero;
            }
                move_uploaded_file ($_FILES['imagen']['tmp_name'],
                $nombreDirectorio . $nombreFichero);
            }
            else{
                print ("No se ha podido subir el fichero\n");
            }
        echo('La noticia ha sido recibida correctamente:');
        echo('<ul>');
        echo ('<li>Titulo:'.$titulo.'</li>');
        echo ('<li>Texto:'.$texto.'</li>');
        echo ('<li>Categoría:'.$categoria.'</li>');
        echo ('<li>imagen:  <img src="'.$nombreDirectorio . $nombreFichero.'" alt="'.$nombreFichero.'" /></li>');
        echo('</ul>');
    ?> 
    <?php
}
?>
</body>
</html>