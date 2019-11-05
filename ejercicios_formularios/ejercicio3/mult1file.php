<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3 Jesús Carrillo Castillo</title>

</head>
<body>
    <?php
        $form='<h1>Operar dos números</h1>'.
       '<form action="mult1file.php" method="post">'.
       '    <fieldset>'.
       '       <label for="primerNum">Intruduce el primer número:</label>'.
       '       <input type="number" name="primerNum" required>'.
       '    </fieldset>'.
       '   <fieldset>'.
       '   <label for="segundoNum">Intruduce el segundo número:</label>'.
       '   <input type="number" name="segundoNum" required>'.
       '   </fieldset>'.
       '   <fieldset>'.
       '       <label>tipo de operacion:</label>'.
       '       <label>'.
       '           <input type="radio" value="mult" name="operacion" checked="checked" required>multiplicacion'.
       '       </label>'.
       '        <label>'.
       '           <input type="radio" value="sum" name="operacion" required>suma'.
       '       </label>'.
       '       <label>'.
       '           <input type="radio" value="res" name="operacion" required>resta'.
       '       </label>'.
       '       <label>'.
       '           <input type="radio" value="div" name="operacion" required>division'.
       '       </label>'.
       '   </fieldset>'.
       '   <input type="submit" value="enviar">'.
       ' </form>';
        $error=false;
        if(isset( $_REQUEST['primerNum']) && !empty($_REQUEST['primerNum']))
            $numero1=$_REQUEST['primerNum'];
        else{
            $error=true;
        }
        if (isset( $_REQUEST['segundoNum']) && !empty($_REQUEST['segundoNum'])) {
            $numero2=$_REQUEST['segundoNum'];
        }else{
            $error=true;
        }
        if(isset( $_REQUEST['operacion']) && !empty($_REQUEST['operacion'])){
            $operacion=$_REQUEST['operacion'];
        }else{
            $error=true;
        }

        if($error){
            echo $form;
        }else{   
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
            
        }
     
        
       
        
    ?>



    

    
</body>
</html>