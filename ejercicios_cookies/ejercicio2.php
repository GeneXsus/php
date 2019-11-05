
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio2</title>
</head>
<body>

<?php
    $enviado=isset($_REQUEST['enviar']);
    $restablecer=isset($_REQUEST['restablecer']);
    $usuario= isset($_REQUEST['usuario'])?$_REQUEST['usuario']:'';
    $existe_usuario= isset($_COOKIE[$usuario]);
    $veces=1;
    if ($restablecer)
        if($existe_usuario){
            setcookie($usuario,$_COOKIE[$usuario],time()-1);
        }
    
    if (!$enviado){

?>
    <form action="ejercicio2.php">
     <label for='usuario'>Usuario:</label><br>
     <input type="text" name="usuario">
     <input type="submit" name='enviar' value="Enviar consulta">
     <br>
     <input type="submit" name='restablecer' value="Restablecer">
    </form>


<?php
    }else{
        
        if($existe_usuario){
            $veces= $_COOKIE[$usuario]+1;
        }
        if($usuario!=''){
            setcookie($usuario,$veces,time()+60*24*360 );
        }
        $textoVeces= ($veces==1)? "$veces vez" : "$veces veces";
        echo "El usuario $usuario ha entrado $textoVeces";
    }
?>



</body>
</html>



