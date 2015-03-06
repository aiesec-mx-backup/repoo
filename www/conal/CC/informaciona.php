    
<?php

$con=mysql_connect("localhost","wwwaiese_conaldb","nC15@ags") or die (mysql_error());
mysql_select_db("wwwaiese_conaldb",$con);

mysql_set_charset('utf8', $con);
$opcion=$_POST['opcion'];
if ($opcion==3){
	$detalles="SELECT talla, color FROM inf_us 
INNER JOIN usuario ON inf_us.idUsuario=usuario.idUsuario
WHERE 
   inf_us.ronda='1' AND usuario.permisos='2' AND  tshirt=1 AND genero='Mujer' 
OR inf_us.ronda='1' AND usuario.permisos='3' AND  tshirt=1 AND genero='Mujer'
OR inf_us.ronda='2' AND usuario.permisos='2' AND  tshirt=1 AND genero='Mujer'
OR inf_us.ronda='2' AND usuario.permisos='3' AND  tshirt=1 AND genero='Mujer'";
	$detallesS=mysql_query($detalles,$con)or die (mysql_error()); 
	while ($filaD=mysql_fetch_array($detallesS))
	{
		$total+=1;
		if ($filaD['color']=='amarillo' && $filaD['talla']=='x' )
		$ax+=1;
		if ($filaD['color']=='amarillo' && $filaD['talla']=='m' )
		$am+=1;
		if ($filaD['color']=='amarillo' && $filaD['talla']=='g' )
		$ag+=1;
		if ($filaD['color']=='amarillo' && $filaD['talla']=='xg' )
		$axg+=1;
		if ($filaD['color']=='azul' && $filaD['talla']=='x' )
		$azx+=1;
		if ($filaD['color']=='azul' && $filaD['talla']=='m' )
		$azm+=1;
		if ($filaD['color']=='azul' && $filaD['talla']=='g' )
		$azg+=1;
		if ($filaD['color']=='azul' && $filaD['talla']=='xg' )
		$azxg+=1;
		if ($filaD['color']=='rosa' && $filaD['talla']=='x' )
		$rx+=1;
		if ($filaD['color']=='rosa' && $filaD['talla']=='m' )
		$rm+=1;
		if ($filaD['color']=='rosa' && $filaD['talla']=='g' )
		$rg+=1;
		if ($filaD['color']=='rosa' && $filaD['talla']=='xg' )
		$rxg+=1;
		if ($filaD['color']=='verde' && $filaD['talla']=='x' )
		$vx+=1;
		if ($filaD['color']=='verde' && $filaD['talla']=='m' )
		$vm+=1;
		if ($filaD['color']=='verde' && $filaD['talla']=='g' )
		$vg+=1;
		if ($filaD['color']=='verde' && $filaD['talla']=='xg' )
		$vxg+=1;
	}

	?>
    <big> <big>
    Mujeres: <?php echo $total; ?></big></big>
    <big><big>
    <table border="1">
	<tr align="center">
     <th bgcolor="#FFFFFF"><font color="#333333">Color/Talla</font></th>
      <th bgcolor="#FFFFFF"><font color="#333333">Chica</font></th>
      <th bgcolor="#FFFFFF"><font color="#333333">Mediana</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Grande</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Extra Grande</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Total</font></th>
    </tr>
     <tr>
     <td nowrap><font color='#FFFF00'>Amarilla</font></td>
     <td align="center" nowrap><?php echo $ax;?></td>
     <td align="center"><?php echo $am; ?></td>
     <td align="center"><?php echo $ag; ?></td>
     <td align="center"><?php echo $axg; ?></td>
     <td align="center"><?php echo $axg+$am+$ag+$ax; ?></td>
     </tr>
     <tr>
      <td nowrap><font color='#0099FF'>Azul</font></td>
     <td align="center" nowrap><?php echo $azx;?></td>
     <td align="center"><?php echo $azm; ?></td>
     <td align="center"><?php echo $azg; ?></td>
     <td align="center"><?php echo $azxg; ?></td>
     <td align="center"><?php echo $azxg+$azm+$azg+$azx; ?></td>
     </tr>
     <tr>
     <td nowrap><font color='#FF00FF'>Rosa</font></td>
     <td align="center" nowrap><?php echo $rx;?></td>
     <td align="center"><?php echo $rm; ?></td>
     <td align="center"><?php echo $rg; ?></td>
     <td align="center"><?php echo $rxg; ?></td>
     <td align="center"><?php echo $rxg+$rm+$rg+$rx; ?></td>
     </tr>
     <tr>
     <td nowrap><font color='#00FF66'>Verde</font></td>
     <td align="center" nowrap><?php echo $vx;?></td>
     <td align="center"><?php echo $vm; ?></td>
     <td align="center"><?php echo $vg; ?></td>
     <td align="center"><?php echo $vxg; ?></td>
     <td align="center"><?php echo $vxg+$vm+$vg+$vx; ?></td>
     </tr>
     </table></big></big>
  <?php   
     $detallesH="SELECT talla, color FROM inf_us 
INNER JOIN usuario ON inf_us.idUsuario=usuario.idUsuario
WHERE 
   inf_us.ronda='1' AND usuario.permisos='2' AND  tshirt=1 AND genero='Hombre' 
OR inf_us.ronda='1' AND usuario.permisos='3' AND  tshirt=1 AND genero='Hombre'
OR inf_us.ronda='2' AND usuario.permisos='2' AND  tshirt=1 AND genero='Hombre'
OR inf_us.ronda='2' AND usuario.permisos='3' AND  tshirt=1 AND genero='Hombre'";
	$detallesHH=mysql_query($detallesH,$con)or die (mysql_error()); 
	while ($filaH=mysql_fetch_array($detallesHH))
	{
		$totalH+=1;
		if ($filaH['color']=='amarillo' && $filaH['talla']=='x' )
		$axH+=1;
		if ($filaH['color']=='amarillo' && $filaH['talla']=='m' )
		$amH+=1;
		if ($filaH['color']=='amarillo' && $filaH['talla']=='g' )
		$agH+=1;
		if ($filaH['color']=='amarillo' && $filaH['talla']=='xg' )
		$axgH+=1;
		if ($filaH['color']=='azul' && $filaH['talla']=='x' )
		$azxH+=1;
		if ($filaH['color']=='azul' && $filaH['talla']=='m' )
		$azmH+=1;
		if ($filaH['color']=='azul' && $filaH['talla']=='g' )
		$azgH+=1;
		if ($filaH['color']=='azul' && $filaH['talla']=='xg' )
		$azxgH+=1;
		if ($filaH['color']=='rosa' && $filaH['talla']=='x' )
		$rxH+=1;
		if ($filaH['color']=='rosa' && $filaH['talla']=='m' )
		$rmH+=1;
		if ($filaH['color']=='rosa' && $filaH['talla']=='g' )
		$rgH+=1;
		if ($filaH['color']=='rosa' && $filaH['talla']=='xg' )
		$rxgH+=1;
		if ($filaH['color']=='verde' && $filaH['talla']=='x' )
		$vxH+=1;
		if ($filaH['color']=='verde' && $filaH['talla']=='m' )
		$vmH+=1;
		if ($filaH['color']=='verde' && $filaH['talla']=='g' )
		$vgH+=1;
		if ($filaH['color']=='verde' && $filaH['talla']=='xg' )
		$vxgH+=1;
	}

	?>
    <big> <big>
    Hombres: <?php echo $totalH; ?></big></big>
    <big><big>
    <table border="1">
	<tr align="center">
     <th bgcolor="#FFFFFF"><font color="#333333">Color/Talla</font></th>
      <th bgcolor="#FFFFFF"><font color="#333333">Chica</font></th>
      <th bgcolor="#FFFFFF"><font color="#333333">Mediana</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Grande</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Extra Grande</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Total</font></th>
    </tr>
     <tr>
     <td nowrap><font color='#FFFF00'>Amarilla</font></td>
     <td align="center" nowrap><?php echo $axH;?></td>
     <td align="center"><?php echo $amH; ?></td>
     <td align="center"><?php echo $agH; ?></td>
     <td align="center"><?php echo $axgH; ?></td>
     <td align="center"><?php echo $axgH+$amH+$agH+$axH; ?></td>
     </tr>
     <tr>
      <td nowrap><font color='#0099FF'>Azul</font></td>
     <td align="center" nowrap><?php echo $azxH;?></td>
     <td align="center"><?php echo $azmH; ?></td>
     <td align="center"><?php echo $azgH; ?></td>
     <td align="center"><?php echo $azxgH; ?></td>
     <td align="center"><?php echo $azxgH+$azmH+$azgH+$azxH; ?></td>
     </tr>
     <tr>
     <td nowrap><font color='#FF00FF'>Rosa</font></td>
     <td align="center" nowrap><?php echo $rxH;?></td>
     <td align="center"><?php echo $rmH; ?></td>
     <td align="center"><?php echo $rgH; ?></td>
     <td align="center"><?php echo $rxgH; ?></td>
     <td align="center"><?php echo $rxgH+$rmH+$rgH+$rxH; ?></td>
     </tr>
     <tr>
     <td nowrap><font color='#00FF66'>Verde</font></td>
     <td align="center" nowrap><?php echo $vxH;?></td>
     <td align="center"><?php echo $vmH; ?></td>
     <td align="center"><?php echo $vgH; ?></td>
     <td align="center"><?php echo $vxgH; ?></td>
     <td align="center"><?php echo $vxgH+$vmH+$vgH+$vxH; ?></td>
     </tr>
     </table>
     </big></big>
     <?php } ?>

     <?php

//OPCION DE TOTAlES
if ($opcion==2){
	$s="SELECT SUM(pulsera) AS Pulseras, SUM(pelota) AS Pelotas, SUM(taza) AS Tazas FROM souvenirs";
	$resultadoS=mysql_query($s,$con)or die (mysql_error()); 
	$filaS=mysql_fetch_array($resultadoS);
	$p="SELECT COUNT(*) FROM inf_us 
INNER JOIN usuario ON inf_us.idUsuario=usuario.idUsuario
WHERE 
   inf_us.ronda='1' AND usuario.permisos='2' AND  tshirt=1  
OR inf_us.ronda='1' AND usuario.permisos='3' AND  tshirt=1 
OR inf_us.ronda='2' AND usuario.permisos='2' AND  tshirt=1 
OR inf_us.ronda='2' AND usuario.permisos='3' AND  tshirt=1 ";
	$resultadoP=mysql_query($p,$con)or die (mysql_error()); 
	$filaP=mysql_fetch_array($resultadoP);
	$f="SELECT COUNT(*) FROM inf_us 
INNER JOIN usuario ON inf_us.idUsuario=usuario.idUsuario
WHERE 
   inf_us.ronda='1' AND usuario.permisos='2' AND  party=1  
OR inf_us.ronda='1' AND usuario.permisos='3' AND  party=1 
OR inf_us.ronda='2' AND usuario.permisos='2' AND  party=1 
OR inf_us.ronda='2' AND usuario.permisos='3' AND  party=1 ";
	$resultadoF=mysql_query($f,$con)or die (mysql_error()); 
	$filaF=mysql_fetch_array($resultadoF);
	$v="SELECT COUNT(*) FROM inf_us 
INNER JOIN usuario ON inf_us.idUsuario=usuario.idUsuario
WHERE inf_us.ronda='1' AND usuario.permisos='2' AND  vegetariano=1 
OR inf_us.ronda='1' AND usuario.permisos='3' AND  vegetariano=1 
OR inf_us.ronda='2' AND usuario.permisos='2' AND  vegetariano=1 
OR inf_us.ronda='2' AND usuario.permisos='3' AND  vegetariano=1 ";
	$resultadoV=mysql_query($v,$con)or die (mysql_error()); 
	$filaV=mysql_fetch_array($resultadoV);
	?>
    <br /><br />
    <big><big>
	<table border="1">
	<tr align="center">
     <th bgcolor="#FFFFFF"><font color="#333333">Pulseras</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Pelotas</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Tazas</font></th>
	<th bgcolor="#FFFFFF"><font color="#333333">Playeras</font></th>
     <th bgcolor="#FFFFFF"><font color="#333333">Fiestas</font></th>
      <th bgcolor="#FFFFFF"><font color="#333333">Vegetarianos</font></th>
     </tr>
     <tr>
     <td align="center" nowrap><?php echo $filaS['0'];?></td>
     <td align="center"><?php echo $filaS['1']; ?></td>
     <td align="center"><?php echo $filaS['2']; ?></td>
     <td align="center"><?php echo $filaP['0']; ?></td>
     <td align="center"><?php echo $filaF['0']; ?></td>
          <td align="center"><?php echo $filaV['0']; ?></td>
     </tr>
     </table>
     </big>
	<?php }
	//OPCION DE DELEGADOS
	if($opcion==1){?>

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
                    

<?php } ?>



