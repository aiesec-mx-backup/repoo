<?php
header("Content-Type: text/html;charset=utf-8");
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
<form method="POST" >
<big>
<?php echo "<big><font color='#02f4c1'>Total de delegados aprobados: </font><big>".$count."</big></big>"; ?>
<table border="1">
<tr align="center">
     <th bgcolor="#FFFFFF" width="200px"><font color="#333333">Delegado</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Ronda</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Fiesta</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Playera</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Talla</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Color</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Souvenirs</font></th>
<!--     <th bgcolor="#FFFFFF"><font color="#333333">Multa</font></th>-->
     <th bgcolor="#FFFFFF"><font color="#333333">Total</font></th>
 </tr>
<?php while($fila=mysql_fetch_array($result)){ 
$id=$fila['idUsuario'];
$query1="SELECT SUM(pulsera), SUM(pelota), SUM(taza) FROM souvenirs WHERE idUsuario='$id'";
$result1=mysql_query($query1,$con)or die (mysql_error());
$row=mysql_fetch_array($result1);
$souvenirs=($row['0']*10)+($row['1']*20)+($row['2']*50);
$playera=0;
$fiesta=0;
if ($fila['idPago']==3){
	$multa=300;
	}
else{
	$multa=0;
	}
if($fila['idTpago']==2){
$invoice=975;
}
else{
	$invoice=875;
	}

if ($fila['tshirt']==1){
	$playera=100;
	$playeras+=100;
}
if ($fila['party']==1){
	$fiesta=350;
	$fiestas+=350;
}
$totalS+=$souvenirs;
$total=$total+$multa;
?>
 <tr>
     <td align="center" nowrap><?php echo $fila['nombre']." ".$fila['apellidos']; ?></td>
     <td align="center"><?php echo $fila['ronda']; ?></td>
     <td align="center"><?php if ($fila['party']==1){ echo "$ 350";} if ($fila['party']=="0") {echo "<font color='#eb0d6c'>NO</font>"; } if ($fila['party']==NULL) {echo " "; } ;?></td>
     <td align="center"><?php if ($fila['tshirt']==1){ echo "$ 100";} if ($fila['tshirt']=="0"){echo "<font color='#eb0d6c'>NO</font>"; }  if ($fila['tshirt']==NULL) {echo " "; }  ?></td>
     <td align="center"><?php if ($fila['talla']=='x') echo "Chica";  
	 						  if ($fila['talla']=='m') echo "Mediana";
							  if ($fila['talla']=='g') echo "Grande";
							  if ($fila['talla']=='xg') echo "Extra Grande";
							  ?></td>
     <td align="center"><?php if ($fila['color']=='verde') echo "<font color='#00FF66'>Verde</font>";
	 						  if ($fila['color']=='amarillo') echo "<font color='#FFFF00'>Amarilla</font>";
							  if ($fila['color']=='azul') echo "<font color='#0099FF'>Azul</font>";
							  if ($fila['color']=='rosa') echo "<font color='#FF00FF'>Rosa</font>"; ?></td>
     <td align="center"><?php echo "$ ".$souvenirs; ?></td>
     <td align="center"><?php $t=$fiesta+$playera+$souvenirs; echo "$ ".$t; ?></td>
     </tr>

 <?php } ?>
</form>
</table>

<?php 
$totalFP=$fiestas+$playeras;
//echo "<big><font color='#02f4c1'>Total multas: </font><big>$".$total."</big></big><br>"; 
echo "<big><font color='#02f4c1'>Total Fiestas y Playeras: </font><big>$".$totalFP."</big></big>";
echo "<br><big><font color='#02f4c1'>Total souvenirs: </font><big>$".$totalS."</big></big>";
?>
<?php mysql_close($con); ?>

