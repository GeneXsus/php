<?php
    $numero1=$_REQUEST['primerNum'];
    $numero2=$_REQUEST['segundoNum'];
    $operacion=$_REQUEST['operacion'];
    switch ($operacion) {
        case 'mult':
            echo "El resultado de multipicar ".$numero1." por ".$numero2." es ".($numero1*$numero2);
            break;
        case 'sum':
            echo "El resultado de sumar ".$numero1." y ".$numero2." es ".($numero1+$numero2);
            break;
        case 'res':
            echo "El resultado de restar ".$numero1." y ".$numero2." es ".($numero1-$numero2);
            break;
        case 'div':
            echo "El resultado de dividir ".$numero1." entre ".$numero2." es ".($numero1/$numero2);
            break;
        
        default:
        echo "No ha seleccionado el tipo";
            break;
    }
    
?>