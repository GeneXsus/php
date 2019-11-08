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
    <title>Formulario</title>
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


    <div class='contenedor'>

    
        <h1>Subida de ficheros</h1>
        <h2>Insertar nueva noticia</h2>
        <form action="resultadoForm.php" method="post" enctype="multipart/form-data">
            <div class='elemento'>
                <label for="titulo">Titulo: *</label>
                <input type="text" name="titulo" required />
            </div>

            <div class='elemento'>
                <label for="texto">Texto: *</label>
                <textarea name="texto" required></textarea>
            </div>

            <div class='elemento'>
                <label for="titulo">Titulo:</label>
                <select name="categoria">
                    <option value="ofertas">ofertas</option>
                    <option value="otros">Demandas</option>
                </select>
            </div>

            <div class='elemento'>
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" />
            </div>

            <div class='elemento'>
                <input type="submit" value="enviar" />
            </div>
        </form>
    </div>

<?php
}
?>
</body>

</html>

