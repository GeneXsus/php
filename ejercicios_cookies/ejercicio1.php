<?php
$color=isset($_REQUEST['color'])?$_REQUEST['color']:'#FFF';
if($color!='#FFF'){
    setcookie("color",$color,time()+60*24*360);
    header("location:ejercicio1.php");
}else{
    $color=isset($_COOKIE['color'])?$_COOKIE['color']:$color;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EjercicioCookie</title>
</head>
<body bgcolor=<?php echo $color?>>
<p>Seleccione el color que desea que se sea la página:</p>
<form action="ejercicio1.php" method="post">
    <input type="radio" name="color" id='rojo'  value="red" <?php if($color=='red'){echo 'checked';}?>><label for="rojo">Rojo</label><br>
    <input type="radio" name="color" id='verde' value="green" <?php if($color=='green'){echo 'checked';}?>><label for="verde">Verde</label> <br>
    <input type="radio" name="color" id='azul' value="blue" <?php if($color=='blue'){echo 'checked';}?>><label for="azul">Azul</label><br>
    <br>
    <input type="submit" value="Colorear">
    </form>
    
</body>
</html>

