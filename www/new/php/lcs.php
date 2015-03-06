<?php

//La version 2 de esta pagina debe registrar los LCs en una BD para poder hacer la edición lo más fácil posible.

$lcs = array(
		array('lc' => 'Aguascalientes', 'email' => 'ags','fb' => 'AIESEC en Aguascalientes', 'fblink' => 'aiesec.ags'),//1
		array('lc' => 'Ciudad Victoria', 'email' => 'victoria', 'fb' => 'AIESEC en Cd Victoria', 'fblink' => 'AIESECenCdVictoria'),//MISSING
		array('lc' => 'Celaya', 'email' => 'celaya', 'fb' => 'AIESEC.CELAYA'),
		array('lc' => 'Chihuahua', 'email' => 'ch', 'fb' => 'aiesecchihuahua'),
		array('lc' => 'Ciudad Ju&aacute;rez', 'email' => 'cj', 'fb' => 'aiesec.juarez'),
		array('lc' => 'Ciudad Obreg&oacute;n', 'email' => 'obregon', 'fb' => 'AIESEC en Cd. Obregón', 'fblink' => '237476989780903'),
		array('lc' => 'Cuernavaca', 'email' => 'cv', 'fb' => 'AIESECEnCuernavaca'),
		array('lc' => 'Guadalajara', 'email' => 'gdl', 'fb' => 'AIESEC.Guadalajara'),
		array('lc' => 'Guanajuato', 'email' => 'gto', 'fb' => 'AIESECgt'),
		array('lc' => 'Hermosillo', 'email' => 'hmo', 'fb' => 'AiesecHermosillo'),//10
		array('lc' => 'Ibero', 'email' => 'ib', 'fb' => 'AIESECenSANTAFE'),	///No hay direccion de correo ni pagina de pagina de face	
		array('lc' => 'IPN', 'email' => 'ipn', 'fb' => 'AIESEC.IPN.FANPAGE'),
		array('lc' => 'Irapuato', 'email' => 'irapuato', 'fb' => 'AIESECgt'),///No hay direccion de correo ni pagina de pagina de face
		array('lc' => 'ITAM', 'email' => 'it', 'fb' => 'aiesecenitam'),
		array('lc' => 'ITESM Estado de M&eacute;xico', 'email' => 'em', 'fb' => 'aiesecedomex'),
		array('lc' => 'ITESM Monterrey', 'email' => 'mty', 'fb' => 'AIESECMonterrey'),
		array('lc' => 'ITESM Tampico', 'email' => 'tamp', 'fb' => 'AIESECenTampico'),
		array('lc' => 'ITESM Toluca', 'email' => 'itesmtoluca', 'fb' => 'AIESECITESMToluca'),
		array('lc' => 'la Laguna', 'email' => 'laguna', 'fb' => 'AiesecLaguna'),
		array('lc' => 'Le&oacute;n', 'email' => 'leon', 'fb' => 'AiesecEnLeon'),
		array('lc' => 'Los Mochis', 'email' => 'losmochis', 'fb' => 'AIESECenSinaloa'),///No hay direccion de correo ni pagina de pagina de face
		array('lc' => 'Mazatlan', 'email' => 'maz', 'fb' => 'AIESECenSinaloa'),///No hay direccion de correo ni pagina de pagina de face
		array('lc' => 'M&eacute;rida', 'email' => 'mer', 'fb' => 'AiesecMerida'),
		array('lc' => 'Oaxaca', 'email' => 'oax', 'fb' => 'AIESECenOaxaca'),//20
		array('lc' => 'Poza Rica', 'email' => 'pozarica', 'fb' => 'aiesecinveracruz'),///No hay direccion de correo ni pagina de pagina de face
		array('lc' => 'Puebla', 'email' => 'pue', 'fb' => 'aiesec.puebla'),
		array('lc' => 'Quer&eacute;taro', 'email' => 'qro', 'fb' => 'aiesec.qro'),
		array('lc' => 'Santa Fe', 'email' => 'sf', 'fb' => 'AIESECenSANTAFE'),
		array('lc' => 'Sinaloa', 'email' => 'sin', 'fb' => 'AIESECenSinaloa'),
		array('lc' => 'Silao', 'email' => 'sil', 'fb' => 'AIESECgt'), ///No hay direccion de correo ni pagina de pagina de face
		array('lc' => 'Sur de Guanajuato', 'email' => 'surguanajuato', 'fb' => 'AIESECgt'),///No hay direccion de correo ni pagina de pagina de face
		array('lc' => 'Tabasco', 'email' => 'tab', 'fb' => 'AiesecEnTabasco'),
		array('lc' => 'UAEMEX', 'email' => 'uaemex', 'fb' => 'AIESECUAEMex'),
		array('lc' => 'UdeM', 'email' => 'udem', 'fb' => 'AIESEC.UDEM'),
		array('lc' => 'La Salle', 'email' => 'lasalle', 'fb' => 'AIESECinLaSalle'),
		array('lc' => 'UNAM', 'email' => 'unam', 'fb' => 'aiesec.unam'),
		array('lc' => 'UP', 'email' => 'up', 'fb' => 'AIESEC en UP', 'fblink' => '716272615074367'),//30
		array('lc' => 'Veracruz', 'email' => 'ver', 'fb' => 'aiesecinveracruz'),
		array('lc' => 'Zacatecas', 'email' => 'zac', 'fb' => 'aieseczacatecas')
	);
	
$regions = array(
	array('name' => 'Chihuahua','code' => 'ch','lcs' => array('ch','cj')),
	array('name' => 'DF (Sur)','code' => 'df-sur','lcs' => array('up','it','unam')),
	array('name' => 'DF (Poniente)','code' => 'sf','lcs' => array('sf','ib')),
	array('name' => 'Estado de M&eacute;xico','code' => 'edomex','lcs' => array('em','uaemex','itesmtoluca')),
	array('name' => 'Guanajuato','code' => 'gto','lcs' => array('gto','leon','celaya', 'irapuato', 'surguanajuato', 'sil')),
	array('name' => 'Nuevo Le&oacute;n','code' => 'nl','lcs' => array('mty','udem')),
	array('name' => 'Sonora','code' => 'son','lcs' => array('hmo','obregon')),
	array('name' => 'Sinaloa','code' => 'sin','lcs' => array('losmochis','maz')),
	array('name' => 'Tamaulipas','code' => 'tam','lcs' => array('victoria','tamp')),
	array('name' => 'Veracruz','code' => 'ver','lcs' => array('ver','pozarica'))
);

if(isset($_GET['lc'])) {
	foreach ($lcs as $lc) {
		if($_GET['lc'] == $lc['email']) {
			echo json_encode($lc);
			break;
		}
	}
} else if(isset($_GET['region'])) {
	foreach ($regions as $region) {
		if($_GET['region'] == $region['code']) {
			echo json_encode($region);
			break;
		}
	}
}

?>