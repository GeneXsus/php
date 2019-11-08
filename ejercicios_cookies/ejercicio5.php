<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio5</title>
</head>
<body>
<?php
$cuerpo_tabla='';
$mostrar='jornada';
$numero_partidos=0;
$error='';
$jornada= isset($_COOKIE('jornada'))?$_COOKIE('jornada'):0;
if(isset($_REQUEST['enviarJornada'])){
    if(isset($_REQUEST['numeroP'])&& $_REQUEST['numeroP']!=''){
        $numero_partidos=$_REQUEST['numeroP'];
        $mostrar='partidos';
    }else{
        $mostrar='jornada';
        $error='<p> "Necesita meter el número de partidos"</p> ';
    }
}
if(isset($_REQUEST['enviarPartidos'])){
    $mostrar='clasificacion';
    
}

switch ($mostrar) {
    case 'jornada':

        ?>
        <h1>Jornada <?php echo $jornada?></h1>
        <form action="ejercicio5.php" method="post">
            <label for="numeroP">Introduce el número de partidos para la jornada</label><br>
            <input type="number" name="numeroP" min='1'>
            <input type="submit" name='enviarJornada' value="Enviar Jornada">
        </form>
        <?php
            echo $error;

        break;
    
    case 'partidos':

        ?>       
        <h1>Partidos<h1>
        <form action="ejercicio5.php" method="post">
            <?php
            for ($i=0; $i < $numero_partidos; $i++) { 
                # code...
            ?>  
                <div class='partido'>
                    <input type="text" name="partido_<?php echo"$i";?>_equipo_1" placeholder='Equipo' require>
                    <input type="number" name="partido_<?php echo"$i";?>_goles_1" require>
                    <input type="text" name="partido_<?php echo"$i";?>_equipo_2" placeholder='Equipo' require>
                    <input type="number" name="partido_<?php echo"$i";?>_goles_2" require>
                </div>
                <br>
            <?php
                }
            ?>  
            <input type="submit" name='enviarPartidos' value="Aceptar">
        </form>
        <?php
        break;
    
    case 'clasificacion':

        ?>      
        <h1>Clasificación</h1>
        <table>
            <thead>
                <tr>
                    <th>Equipos</th>
                    <th>Puntos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo $cuerpo_tabla;
                ?>
            </tbody>
        </table>
        <?php
        break;
    
    default:
        
        echo '<h1>Error no debería estar aqui</h1>';
        break;
}
?>





</body>
</html>




