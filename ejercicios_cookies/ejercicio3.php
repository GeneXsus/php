<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio3</title>
</head>
<body>
<?php
    $nuevoUsuario=false ;
    $mensaje_error='';
    $mensaje='';
    $usuario=isset($_REQUEST['usuario'])?$_REQUEST['usuario']:'';
    $password=isset($_REQUEST['password'])?$_REQUEST['password']:'';
    if(isset($_REQUEST['enviar'])){

        if ($usuario!=''){
            $password_usuario=isset($_COOKIE[$usuario])?$_COOKIE[$usuario]:'';
        }
        if($password != ''){
            if ($password_usuario!= '')
            {
                if ($password==$password_usuario){
                    $mensaje= "correct password";
                }else{
                    $mensaje="wrong password";
                }

            }else{
                setcookie($usuario,$password,time()+60*24*360);
                $nuevoUsuario=true;
            }
        }else{
            $mensaje_error='La contraseña no puede estar vacía';
        }

    }    

    if (!$nuevoUsuario){
        if($mensaje!=''){
            echo $mensaje;
        }else{

?>

<form action="ejercicio3.php" method="post">
    <label for="usuario">USUARIO</label>
    <input type="text" name="usuario" ><br>
    <label for="password">CONTRASEÑA</label>
    <input type="password" name="password"><br>
    <?php 
        echo $mensaje_error;
    ?>
    <br>
    <input type="submit" name="enviar" value="Aceptar">

</form>
<?php 
        }
    }else{
        echo "se ha fijado una contraseña para el usuario $usuario";
    }
?>
    
</body>
</html>




