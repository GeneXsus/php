<html>
    <body>
        <h3><u>Bienvenido a CestaTrass</u></h3>
        <br>
        <form action="<?$_SERVER['PHP_SELF']."?".session_name()."=".session_id()?>" method="post">
            Dime el producto <input type="text" name="item" size="20"><br>
            Cuentas unidades <input type="text" name="cantidad" size="20"><br>
        <input type="submit" value="Añadir a la cesta"><br>
        </form>
        <?
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
                echo "</TABLE>"
            } 
        ?>
    <body>
</html>