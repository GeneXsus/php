<?php 
 session_start();

$itemsEnCesta= isset($_SESSION['articulos'])?$_SESSION['articulos']:[];
 $articulo= isset($_REQUEST['item'])?$_REQUEST['item']:'';
 $cantidad= (isset($_REQUEST['cantidad'])&& is_numeric($_REQUEST['cantidad']))?$_REQUEST['cantidad']:null; 

if ($cantidad != null && $articulo != ''){
    $itemsEnCesta[$articulo]= isset( $itemsEnCesta[$articulo])? $itemsEnCesta[$articulo]+(int)$cantidad: (int)$cantidad;

    if($itemsEnCesta[$articulo]<1){
        unset($itemsEnCesta[$articulo]);
    }
}



if (sizeof($itemsEnCesta)<1){
    $itemsEnCesta= null;

}
$_SESSION['articulos']= $itemsEnCesta;

?>
<html>
    <body>
        <h3><u>Bienvenido a CestaTrass</u></h3>
        <br>
        <form action="index.php" method="post">
            Dime el producto <input type="text" name="item" size="20"><br>
            Cuentas unidades <input type="text" name="cantidad" size="20"><br>
        <input type="submit" value="Añadir a la cesta"><br>
        </form>
        <?php
            if(isset($itemsEnCesta)){
                echo "El contenido de la cesta de la compra es:<br><br>";
                echo "<TABLE border='1' align='left' bgcolor='lightGray'>";
                    echo "<th>Articulo</th>";
                    echo "<th>Unidades</th>";
                foreach($itemsEnCesta as $k =>$v){
                    echo "<tr>";
                    echo "<td>$k</td>";
                    echo "<td>$v</td>";
                    echo "</tr>";
                }
                echo "</TABLE>";
            } 
        ?>
    <body>
</html>