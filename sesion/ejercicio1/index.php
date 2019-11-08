<?php
session_start();
$a_usuarios=['juan'=>'1234','juana'=>'1234','pepe'=>'huhuhu'];

$nombreUsu=isset($_SESSION['usuario'])?$_SESSION['usuario']:"";
$mensaje_error='';

if(isset($_REQUEST['usuario']))
{
    if($_REQUEST['usuario']!=''){

        $usuario= $_REQUEST['usuario'];
        $password= isset($_REQUEST['password'])?$_REQUEST['password']:'';

        if(isset($a_usuarios[$usuario]) && $a_usuarios[$usuario] == $password){
            $_SESSION['usuario']=$usuario;
            $nombreUsu=$usuario;
        }else{
            $mensaje_error='Error usuario o contraseña invalidos';
        }
    }else{
        $mensaje_error='Tiene que rellenar el usuario';
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejecicio Cuenta</title>
</head>
<body> 
<?php
if ($nombreUsu=='')
{
    
?>

<form action="index.php" method="post">
<label for="usuario">USUARIO</label>
    <input type="text" id='inputUsuario' name="usuario" ><br>
    <label for="password">CONTRASEÑA</label>
    <input type="password" id='password' name="password"><br>
    <p id='mensaje_error'><?php 
        echo $mensaje_error;
    ?>
    </p>
    <br>
    <input type="submit" name="enviar" value="Aceptar">

</form>
<?php
}
else{ 
?>
 
 <nav>
    <div>
        <a>Consultar Noticia</a>
    </div>
    <div>
        <a href="noticia.html">Insertar Noticia</a>
    </div>
    <div>
        <a>Eliminar Noticia</a>
    </div>
    <div>
        <a href="logout.php">logout</a>
    </div>

<?php
}
?>



</body>
</html>