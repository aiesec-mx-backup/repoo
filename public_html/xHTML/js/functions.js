console.log('asynchronously');
var Fortalezas=3;
var FortalezasMAX=3;
var Debilidades=3;
var DebilidadesMAX=3;
var Oportunidades=3;
var OportunidadesMAX=3;
var Amenazas=3;
var AmenazasMAX=3;
var AIESEC=3;
var AIESECMAX=3;
var PROFESSIONAL=3;
var PROFESSIONALMAX=3;
var PERSONAL=3;
var PERSONALMAX=3;

/*****************************
	UI functions
	*****************************/
/*
 *@return
 */

 $(document).ready(function() {
// Function for Preview Image.
$(function() {
	$(":file").change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
		}
	});
});
function imageIsLoaded(e) {

	$('#previewimg').attr('src', '');
	$('#previewimg').attr('src', e.target.result);

};


$(".AddFortalezas").click(function(e) {
	e.preventDefault();
	$contexto='Fortalezas';
	Fortalezas+=1;
	FortalezasMAX+=1;
	var foda = document.getElementById('Fortalezas').parentNode.parentNode;
	var html_video = '<tr><td id='+$contexto+'><input class="fodaS '+$contexto+'" type="text" id="'+$contexto+''+(Fortalezas-1)+'" name="foda_'+$contexto+''+(Fortalezas-1)+'" value=""/><img src="images/menos.png" onclick="borrar(this)" class="Remove'+$contexto+'"/> </td></tr>';
	$(html_video).appendTo(foda);
});

$(".AddDebilidades").click(function(e) {
	e.preventDefault();
	$contexto='Debilidades';
	Debilidades+=1;
	DebilidadesMAX+=1;
	var foda = document.getElementById('Debilidades').parentNode.parentNode;
	var html_video = '<tr><td id='+$contexto+'><input class="fodaS '+$contexto+'" type="text" id="'+$contexto+''+(DebilidadesMAX-1)+'" name="foda_'+$contexto+''+(DebilidadesMAX-1)+'" value=""/><img src="images/menos.png" onclick="borrar(this)" class="Remove'+$contexto+'"/> </td></tr>';
	$(html_video).appendTo(foda);
});

$(".AddOportunidades").click(function(e) {
	e.preventDefault();
	$contexto='Oportunidades';
	Oportunidades+=1;
	OportunidadesMAX+=1;
	var foda = document.getElementById('Oportunidades').parentNode.parentNode;
	var html_video = '<tr><td id='+$contexto+'><input class="fodaS '+$contexto+'" type="text" id="'+$contexto+''+(OportunidadesMAX-1)+'" name="foda_'+$contexto+''+(OportunidadesMAX-1)+'" value=""/><img src="images/menos.png" onclick="borrar(this)" class="Remove'+$contexto+'"/> </td></tr>';
	$(html_video).appendTo(foda);
});

$(".AddAmenazas").click(function(e) {
	e.preventDefault();
	$contexto='Amenazas';
	Amenazas+=1;
	AmenazasMAX+=1;
	var foda = document.getElementById('Amenazas').parentNode.parentNode;
	var html_video = '<tr><td id='+$contexto+'><input class="fodaS '+$contexto+'" type="text" id="'+$contexto+''+(AmenazasMAX-1)+'" name="foda_'+$contexto+''+(AmenazasMAX-1)+'" value=""/><img src="images/menos.png" onclick="borrar(this)" class="Remove'+$contexto+'"/> </td></tr>';
	$(html_video).appendTo(foda);
});

$(".AddAIESEC").click(function(e) {
	e.preventDefault();
	$contexto='AIESEC';
	AIESEC+=1;
	AIESECMAX+=1;
	$j=0;
	$i=AIESECMAX-1;
	var foda = document.getElementById('AIESEC');
	var html_video = '<tr> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-meta" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-3m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-6m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-12m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-24m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-60m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-120m" value="" /></textarea></td> <td><input type="hidden" name="'+$j+'-'+$i+'-tipo" value="'+$j+'" /> <img src="images/menos.png" onclick="borrarTimeLine(this)"/> </td> </tr>';
	$(html_video).appendTo(foda);
});

$(".AddPROFESSIONAL").click(function(e) {
	e.preventDefault();
	$contexto='PROFESSIONAL';
	PROFESSIONAL+=1;
	PROFESSIONALMAX+=1;
	$j=0;
	$i=PROFESSIONALMAX-1;
	var foda = document.getElementById('PROFESSIONAL');
	var html_video = '<tr> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-meta" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-3m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-6m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-12m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-24m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-60m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-120m" value="" /></textarea></td> <td><input type="hidden" name="'+$j+'-'+$i+'-tipo" value="'+$j+'" /> <img src="images/menos.png" onclick="borrarTimeLine(this)"/> </td> </tr>';
	$(html_video).appendTo(foda);
});

$(".AddPERSONAL").click(function(e) {
	e.preventDefault();
	$contexto='PERSONAL';
	PERSONAL+=1;
	PERSONALMAX+=1;
	$j=0;
	$i=PERSONALMAX-1;
	var foda = document.getElementById('PERSONAL');
	var html_video = '<tr> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-meta" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-3m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-6m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-12m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-24m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-60m" value="" /></textarea></td> <td><textarea class="myTimeLine" type="text" name="'+$j+'-'+$i+'-120m" value="" /></textarea></td> <td><input type="hidden" name="'+$j+'-'+$i+'-tipo" value="'+$j+'" /> <img src="images/menos.png" onclick="borrarTimeLine(this)"/> </td> </tr>';
	$(html_video).appendTo(foda);
});





});

// Aquí empieza el JS

/*
* Funcion para borrar los elementos del foda.
* @param object
* @return void
*/
function borrar(object) {
	var abuelo=object.parentNode.parentNode;
	abuelo.removeChild(object.parentNode);
	var tabla=abuelo.parentNode.parentNode.id;
	console.log(tabla);
	switch(""+tabla){
		case 'T-Fortalezas':
			Fortalezas=Fortalezas-1;
			break;
		case 'T-Debilidades':
			Debilidades=Debilidades-1;
			break;
		case 'T-Oportunidades':
			Oportunidades=Oportunidades-1;
			break;
		case 'T-Amenazas':
			Amenazas=Amenazas-1;
			break;
	}
}

function borrarTimeLine(object) {
	var abuelo=object.parentNode.parentNode;
	console.log(abuelo.parentNode.parentNode.id);
	removeAllChilds(abuelo);
	

}

function removeAllChilds (parent) {
	if ((""+parent.firstChild)!='null') {
		 parent.removeChild(parent.firstChild);
		 removeAllChilds(parent);
	}
	else
		parent.parentNode.removeChild(parent);
		return 0;
}

function fijarValores(){
	document.getElementById('numF').setAttribute('value', Fortalezas);
	document.getElementById('numD').setAttribute('value', Debilidades);
	document.getElementById('numO').setAttribute('value', Oportunidades);
	document.getElementById('numA').setAttribute('value', Amenazas);
	document.getElementById('numAIESEC').setAttribute('value', AIESEC);
	document.getElementById('numPROF').setAttribute('value', PROFESSIONAL);
	document.getElementById('numPER').setAttribute('value', PERSONAL);
}