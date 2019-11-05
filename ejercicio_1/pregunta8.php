<?php
//inicializar variables
$asignaturas= array('PHP'=>[3,8,14,19,21,26] ,'JSP'=>[10,13,18,22,27],'DIW'=>[0,5,12,17,23,28],'DWEC'=>[11,15,16,20,24,29],'EIMP'=>[1,4,6,9],'DAW'=>[2,7,25]);
$contador=0;
//crear canecera y estructura de la tabla
echo "<table border='0' align='center'  cellpadding='0' cellspacing='0'   >";
echo"<thead>";
    echo "<th>";
    echo "</th>";
    echo"<th style=' width: 120px; height: 30px;  border: 1px solid #000;'>";
        echo "Lunes";
    echo"</th>";
    echo"<th style=' width: 120px; height: 30px;  border: 1px solid #000;'>";
        echo "Martes";
    echo"</th>";
    echo"<th style=' width: 120px; height: 30px;  border: 1px solid #000;'>";
        echo "Miercoles";
    echo"</th>";
    echo"<th style=' width: 120px; height: 30px;  border: 1px solid #000;'>";
        echo "Jueves";
    echo"</th>";
    echo"<th style=' width: 120px; height: 30px;  border: 1px solid #000;'>";
        echo "Viernes";
    echo"</th>";

echo"</thead>";
echo "<tbody>";

	for($x=0; $x<6; $x++)
	{
        echo "<tr>";
        //crear los rangos horarios
        switch ($x) {
            case 0:
                echo"<th style=' width: 120px; height: 30px; border: 1px solid #000;'>";
                    echo "08:15 - 09:15";
                echo"</th>";
                break;
            case 1:
                echo"<th style=' width: 120px; height: 30px; border: 1px solid #000;'>";
                    echo "09:15 - 10:15";
                echo"</th>";
                break;
            case 2:
                echo"<th style=' width: 120px; height: 30px; border: 1px solid #000;'>";
                    echo "10:15 - 11:15";
                echo"</th>";
                break;
            case 3:
            //añadir la franja del recreo
                echo"<th style=' width: 120px; height: 30px; border: 1px solid #000;'>";
                    echo "11:15 - 11:45";
                echo"</th>";
                echo "<td colspan='5' style='text-align: center; border: 1px solid #000; '> <h1 style='margin:0; padding=5px'>RECREO</h1></td>";
                echo "</tr>";
                //añadir a la siguiente hora
                echo "<tr>";
                echo"<th style=' width: 120px; height: 30px; border: 1px solid #000;'>";
                    echo "11:45 - 12:45";
                echo"</th>";
                break;
            case 4:
                echo"<th style=' width: 120px; height: 30px; border: 1px solid #000;'>";
                    echo "12:45 - 13:45";
                echo"</th>";
                break;
            case 5:
                echo"<th style=' width: 120px; height: 30px; border: 1px solid #000;'>";
                    echo "13:45 - 14:45";
                echo"</th>";
                break;

            
            default:
                break;
        }

		for($y=0; $y<5; $y++)
			{
                echo posicionElemento($asignaturas,$contador);
				
                $contador++;
            }
		echo "</tr>";
	}
echo "<tbody/>";
echo "<table/>";

//Comprobar la posición y añadir una tabla
function posicionElemento($array_com, $posicion){
    if (in_array($posicion, $array_com['PHP'])) {
        echo "<td  align='center' style=\" width: 120px; height: 30px; border: 1px solid #000;background:#787cb4\">";
        echo "PHP";
        echo "</td>";
    }else if(in_array($posicion, $array_com['JSP'])){
        echo "<td  align='center' style=\" width: 120px; height: 30px; border: 1px solid #000; background:#e16c00\">";
        echo "JSP";
        echo "</td>";
    }else if(in_array($posicion, $array_com['DIW'])){
        echo "<td  align='center' style=\" width: 120px; height: 30px; border: 1px solid #000; background-image: linear-gradient(red, yellow,red);\">";
        echo "DIW";
        echo "</td>";
    }else if(in_array($posicion, $array_com['DWEC'])){
        echo "<td  align='center' style=\" width: 120px; height: 30px; border: 1px solid #000 ; background:#009688;color:#FFF\">";
        echo "DWEC";
        echo "</td>";
    }else if(in_array($posicion, $array_com['EIMP'])){
        echo "<td  align='center' style=\" width: 120px; height: 30px; border: 1px solid #000 ;background:#000; color:#FFF\">";
        echo "EIMP";
        echo "</td>";
    }else if(in_array($posicion, $array_com['DAW'])){
        echo "<td  align='center' style=\" width: 120px; height: 30px; border: 1px solid #000 ; background:#fff00f\">";
        echo "DAW";
        echo "</td>";
        
    }else {
        echo "<td  align='center' style=\" width: 120px; height: 30px; border: 1px solid #000 ;\">";
        echo "</td>";
    }
}

?>