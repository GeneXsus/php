<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio4</title>
</head>
<body>
<?php
    $nuevoUsuario=false ;
    $mensaje_error='';
    $mensaje='';
    $usuarios=isset($_COOKIE['usuarios'])?unserialize($_COOKIE['usuarios']):[];
    $usuario=isset($_REQUEST['usuario'])?$_REQUEST['usuario']:'';
    $password=isset($_REQUEST['password'])?$_REQUEST['password']:'';
    if(isset($_REQUEST['enviar'])){

        if ($usuario!=''){
            $password_usuario=isset($usuarios[$usuario])?$usuarios[$usuario]:'';
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
                $usuarios[$usuario]=$password;
                setcookie('usuarios',serialize($usuarios),time()+60*24*360);
                $nuevoUsuario=true;
            }
        }else{
            $mensaje_error='La contraseña no puede estar vacía';
        }

    }else{

    }    

    if (!$nuevoUsuario){
        if($mensaje!=''){
            echo $mensaje;
        }else{

?>

<form action="ejercicio4.php" method="post">
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
<script>
        window.addEventListener("load", ()=>{
            document.getElementById('inputUsuario').addEventListener("focusout",function(){
                let arrayUsuarios=<?php echo json_encode($usuarios); ?>;
                document.getElementById('password').value= arrayUsuarios[this.value]!=undefined?arrayUsuarios[this.value]:'';

            });
        });
    </script>
<?php 
        }
    }else{
        echo "se ha fijado una contraseña para el usuario $usuario";
    }
?>

</body>
</html>




