<script>
function mostrarInfo(cod){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","informaciond.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("lc="+cod);
}
</script>
<?php

$con=mysql_connect("localhost","wwwaiese_conaldb","nC15@ags") or die (mysql_error());
mysql_select_db("wwwaiese_conaldb",$con);

mysql_set_charset('utf8', $con);
$lc=$_POST['lc'];
$query="SELECT * 
FROM inf_us 
INNER JOIN usuario ON inf_us.idUsuario=usuario.idUsuario 
WHERE inf_us.idLC='$lc' AND usuario.permisos='2' OR inf_us.idLC='$lc' AND usuario.permisos='3'";
$result=mysql_query($query,$con)or die (mysql_error());
$count=mysql_num_rows($result);
?>
   <form>
                <select onchange="mostrarInfo(this.value)">
                <option>Selecciona un LC </option>
					<?php
					header("Content-Type: text/html;charset=utf-8");
					$con=mysql_connect("localhost","wwwaiese_conaldb","nC15@ags") or die (mysql_error());
mysql_select_db("wwwaiese_conaldb",$con);

					mysql_set_charset('utf8', $con);
					$queryLC="SELECT * FROM lc";
					$resultLC=mysql_query($queryLC,$con)or die (mysql_error());
					while ($rowLC=mysql_fetch_array($resultLC))
					{
						echo "<option value=".$rowLC['0'].">".$rowLC['1']."</option>";
					}
					?>
                    </select>
                    </form>

<big>
<?php echo "<big><font color='#02f4c1'>Total de delegados aprobados: </font><big>".$count."</big></big>";
 ?>
<table border="1">
<tr align="center">
     <th bgcolor="#FFFFFF" width="200px"><font color="#333333">Delegado</font></th>
          <th bgcolor="#FFFFFF"><font color="#333333">Correo</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">LC</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Celular</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Fiesta</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Playera</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Vegetariano</font></th>
          <th bgcolor="#FFFFFF"><font color="#333333">Souvenirs</font></th>
 </tr>
<?php while($fila=mysql_fetch_array($result)){ 
$id=$fila['idUsuario'];
$query1="SELECT SUM(pulsera), SUM(pelota), SUM(taza) FROM souvenirs WHERE idUsuario='$id'";
$result1=mysql_query($query1,$con)or die (mysql_error());
$row=mysql_fetch_array($result1);
$souvenirs=0;

$souvenirs=($row['0']*10)+($row['1']*20)+($row['2']*50);
$playera=0;
$fiesta=0;
if ($fila['tshirt']==1){
	$playera=100;
	$playeras+=100;
	$totalPlayeras+=1;
}
if ($fila['party']==1){
	$fiesta=350;
	$fiestas+=350;
	$totalFiestas+=1;
}
$totalS+=$souvenirs;
?>
 <tr>
     <td align="center" nowrap><?php echo $fila['nombre']." ".$fila['apellidos']; ?></td>
     <td align="center"><?php echo $fila['correo']; ?></td>
      <td align="center"><?php $q="SELECT * FROM lc WHERE idLC=$lc";
					$re=mysql_query($q,$con)or die (mysql_error());
					$r=mysql_fetch_array($re);
					echo $r['1']; ?></td>
     <td align="center"><?php echo $fila['telefono']; ?></td>
     <td align="center"><?php if ($fila['party']==1){ echo "<font color='#eb0d6c'>Si</font>";} else {echo "No";} ?></td>
     <td align="center"><?php if ($fila['tshirt']==1){ echo "<font color='#eb0d6c'>Si</font>";} else {echo "No";} ?></td>
     <td align="center"><?php if ($fila['vegetariano']==1) echo "<font color='#eb0d6c'>Si</font>"; else echo "No";?></td>
     <td align="center"><?php echo "$ ".$souvenirs; ?></td>
     </tr>

 <?php } ?>
</form>
</table>

<?php 
$totalFP=$fiestas+$playeras;
echo "<big><font color='#02f4c1'>Playeras: </font><big>".$totalPlayeras." </big></big>"; 
echo "<big><font color='#02f4c1'>Total: </font><big>$".$playeras." </big></big><br>"; 
echo "<big><font color='#02f4c1'>Fiestas: </font><big>".$totalFiestas." </big></big>";
echo "<big><font color='#02f4c1'>Total: </font><big>$".$fiestas." </big></big>";
echo "<br><big><font color='#02f4c1'>Total souvenirs: </font><big>$".$totalS."</big></big>";
?>
<?php mysql_close($con); ?>