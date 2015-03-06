<?php
//include_once("conexion.php");

//*************   Funciones   *******************/
//$dbhost="localhost";
//$dbusuario="root";
//$dbpassword="root";
//$db="aiesec_cp";
$dbhost="aiesecipn.db.12058720.hostedresource.com";
$dbusuario="aiesecipn";
$dbpassword="aIesec2014!";
$db="aiesecipn";
$conexion = mysql_connect($dbhost,$dbusuario,$dbpassword);
mysql_select_db($db, $conexion);



function consultaUsuario($usuario, $conexion){
	$consul="SELECT * FROM `usuario` WHERE  `email` =  '".$usuario."';";
	$res = mysql_query($consul, $conexion) or die(mysql_error());
	//$result =  mysql_fetch_all($res); 
	$result =  mysql_fetch_row($res); 
	if($result==null){
		echo "Elemento no encontrado<br/>";
		}
	else
		imprimeUsuario($result);
}


function imprimeUsuario($result) {
	echo "<p> Nombre: ".$result[1]."<br/>  Edad: ".$result[2]."<br/>  Email: ".$result[4]."<br/>  Foto: ".$result[3]."<br/>";
}


function consultaUsuarios($conexion){
	$consul="SELECT `nombre`, `email` FROM `usuario`;";
	$res = mysql_query($consul, $conexion) or die(mysql_error());
	$result =  mysql_fetch_all($res); 
	//print_r($result);
	if($result==null){
		echo "Elemento no encontrado<br/>";
		}
	else
		imprimeUsuarios($result);
}


function imprimeUsuarios($result) {

	for ($x=0; $x < sizeof($result) ; $x++) { 
		echo "<tr><td>".$result[$x][0]."  </td> <td>".$result[$x][1]." </td> </tr>";
		}
	
}


function consultaFoda($usuario, $conexion){
	$consul="SELECT * FROM `foda` WHERE  `email` =  '".$usuario."';";
	$res = mysql_query($consul, $conexion) or die(mysql_error());
	$result =  mysql_fetch_row($res); 
	if($result==null){
		echo "Elemento no encontrado<br/>";
		}
	else
		imprimeFoda($result);
}


function imprimeFoda($result) {

	echo "<table>
		<tr>
			<td class='exist'>Fortalezas:</td>
			<td class='exist'>Debilidades:</td>
		</tr>
		<tr><td>";
			$foda=explode("@", $result[2]);
			for ($i=0; $i < sizeof($foda); $i++) { 
				echo "".$foda[$i]."<br/>";
			}
			echo "</td><td>";

			$foda=explode("@", $result[3]);
			for ($i=0; $i < sizeof($foda); $i++) { 
				echo "".$foda[$i]."<br/>";
			}
		echo "</td></tr>
		<tr><td><br/></td></tr>
		<tr>
			<td class='exist'>Oportunidades:</td>
			<td class='exist'>Amenazas:</td>
		</tr>
		<tr><td>";
			$foda=explode("@", $result[4]);
			for ($i=0; $i < sizeof($foda); $i++) { 
				echo "".$foda[$i]."<br/>";
			}
			echo "</td><td>";

			$foda=explode("@", $result[5]);
			for ($i=0; $i < sizeof($foda); $i++) { 
				echo "".$foda[$i]."<br/>";
			}
		echo "</tr>
	</table>
			";
}



function consultaTL($usuario, $conexion){
	$consul="SELECT * FROM `timeline` WHERE  `email` =  '".$usuario."';";
	$res = mysql_query($consul, $conexion) or die(mysql_error());
	$result = mysql_fetch_row($res); 
	if($result==null){
		echo "Elemento no encontrado<br/>";
		}
	else{

		for ($i=0; $i < sizeof($result) ; $i++) { 
			echo $i;
		}
		}


		//imprimeTL($result);
}

//Consulta
function consultaALL($consulta, $conexion){
	$res = mysql_query($consulta, $conexion) or die(mysql_error());


	$result =  mysql_fetch_all($res); 
//		echo "<pre>";
//		print_r($result);
//		echo "</pre>";
	$contexto="";
	echo "<table border='1'>";
for ($i=0; $i < sizeof($result) ; $i++) { 
			echo "<tr>";

			if ($result[$i][2]=='0') {
					$contexto="AIESEC";
				}
				elseif($result[$i][2]=='1') {
					$contexto="PROFESSIONAL";
				}
				elseif($result[$i][2]=='2') {
					$contexto="PERSONAL";
				}
					echo '<tr>';
                        echo '    <td class="tabla-header '.$contexto.'">METAS SMART</td>';
                        echo '    <td class="tabla-header '.$contexto.'">3 Meses</td>';
                        echo '    <td class="tabla-header '.$contexto.'">6 Meses</td>';
                        echo '    <td class="tabla-header '.$contexto.'">1 Año</td>';
                        echo '    <td class="tabla-header '.$contexto.'">2 Año</td>';
                        echo '    <td class="tabla-header '.$contexto.'">5 Año</td>';
                        echo '    <td class="tabla-header '.$contexto.'">10 Año</td>                        ';
                        echo '</tr>';

			
			for ($j=3; $j < 10; $j++) { 
				echo "<td>".$result[$i][$j]."</td> ";
			}
			echo "<tr/>";
			
		}

		echo "</table>";
	//Imprimir resultados
//	imprime($result);

}






function imprimeTL($result) {
	echo "<p> Fortalezas: ".$result[2]."<br/>  Debilidades: ".$result[3]."<br/>  Oportunidades: ".$result[4]."<br/>  Amenazas: ".$result[5]."<br/>";

	echo "<table>
		<tr>
			<td>Fortalezas:</td>
			<td>Debilidades:</td>
		</tr>
		<tr>
			<td>".$result[2]."</td>
			<td>".$result[3]."</td>
		</tr>
		<tr><td><br/></td></tr>
		<tr>
			<td>Oportunidades:</td>
			<td>Amenazas:</td>
		</tr>
		<tr>
			<td>".$result[4]."</td>
			<td>".$result[5]."</td>
		</tr>
	</table>
			";
}

function consultaSA($usuario, $conexion){
	$consul="SELECT * FROM `self_awareness` WHERE  `email` =  '".$usuario."';";
	$res = mysql_query($consul, $conexion) or die(mysql_error());
	$result =  mysql_fetch_row($res); 
	if($result==null){
		echo "Elemento no encontrado<br/>";
		}
	else
		imprimeSA($result);
}


function imprimeSA($result) {
	echo "<p> Sueños: ".$result[2]."<br/>  Intereses: ".$result[3]."<br/>  Actividades fuera de AIESEC: ".$result[4]."<br/>";
}







//Consulta
function consultaALLVieja($consulta, $conexion){
	$res = mysql_query($consulta, $conexion) or die(mysql_error());
	$result =  mysql_fetch_all($res); 

	//Imprimir resultados
	imprime($result);

}


function consulta($consulta, $conexion){
	$res = mysql_query($consulta, $conexion) or die(mysql_error());
	$result =  mysql_fetch_row($res); 

	//Imprimir resultados
	return $result;
}

function consultaS($consulta, $conexion){
	$res = mysql_query($consulta, $conexion) or die(mysql_error());
	$result =  mysql_fetch_row($res); 
	if($result==null){
		echo "Elemento no encontrado";
		//echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
//		header("Location: """);
//		echo "<script language="javascript"> function regresa() { alert("");}"
		}
	else
	//Imprimir resultados
		imprimeTabla($result);
/*	echo "<pre>";
	print_r($result);
	echo "</pre>";*/

}






function imprime($result)
{
	echo "<pre>";
	print_r($result);
	echo "</pre>";
}

//Función que regresa todo el resultado de la consulta como un arreglo de arreglos
function mysql_fetch_all($res) {
   while($row=mysql_fetch_array($res)) {
       $return[] = $row;
   }
   return $return;
}

	?>