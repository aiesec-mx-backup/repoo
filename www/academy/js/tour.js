var cursolist = new Array();
var pointer = 0;
//var realurl = "http://localhost:8080/aa/js/";
var realurl = "http://academy.aiesec.org.mx/js/";
var url_id = getIdfromUrl();

function getIdfromUrl() {
	console.log(window.location.search);
	var parts = window.location.search.slice(1).split('=');
	return parts[1];
}

function embedVideo(embedcode) {
	return '<iframe src="//www.youtube.com/embed/'+embedcode+'?rel=0" width="500" height="350" frameborder="0" allowfullscreen></iframe>';
}

function embedPres(embedcode) {
	return '<iframe src="http://www.slideshare.net/slideshow/embed_code/'+embedcode+'?rel=0&startSlide=1" width="500" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px 1px 0; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>';
}

function embedAudio(embedcode) {
	return '<audio controls><source src="'+embedcode+'" type="audio/mpeg">:(</audio>';
}

function showVid() {
	console.log("Pressed");
	$("#video_embed").show();
	$("#pres_embed").hide();
	$("#audio_embed").hide();	
}

function showPres() {
	console.log("Pressed");
	$("#video_embed").hide();
	$("#pres_embed").show();
	$("#audio_embed").hide();	
}

function showAud() {
	console.log("Pressed");
	$("#video_embed").hide();
	$("#pres_embed").hide();
	$("#audio_embed").show();	
}

$(document).ready(function() {
	//var uurl = realurl + "tourlist.php";
	var uurl = realurl + "tourlist.php";
	console.log(url_id);
	$.ajax({
		type:"post",
		url:uurl,
		data:{
			id:url_id
		},
		dataType:"json",
		success:function(data){
			console.log('adding html');
			var navhtml = '[ <a href="javascript:void(0)" onclick="prev()"><</a> |';
			for(var i = 0; i < data.length; i++) {
				$('#tour_title').html('<h1>'+data[i].tour_titulo+'</h1>');
				//$('#tour_content').append(data[i].titulo);
				navhtml += '<a href="javascript:void(0)" onclick="getData('+data[i].curso_id+')"> '+(i+1)+' </a>|';
				cursolist.push(data[i].curso_id);
			}
			navhtml += ' <a href="javascript:void(0)" onclick="next()">></a> ]';
			$('#tour_nav').html(navhtml);
			getData(data[0].curso_id);
		},
		error: function(ts) {
			console.log(ts.responseText);
		}
	});
});

function next() {
	pointer++;

	if (pointer >= cursolist.length)
		pointer = cursolist.length -1;

	getData(cursolist[pointer]);
}

function prev() {
	pointer--;

	if (pointer < 0)
		pointer = 0;

	getData(cursolist[pointer]);
}

function getData(cursoId) {
	//var uurl = realurl + "info.php";
	var uurl = realurl + "info.php";
	$.ajax({
		type:"post",
		url:uurl,
		data:{
			id:cursoId
		},
		dataType:"json",
		success:function(data){
			console.log('adding html');
			var listhtml = '';
			for(var i = 0; i < data.length; i++) {
				$("#title").html(data[0].titulo);
				$("#description").html(data[0].descripcion);
				if (data[0].video_link != '') {
					$("#video_embed").html(embedVideo(data[0].video_link));
					listhtml += '<a id="vid" href="javascript:void(0);" onclick="showVid()"><img src="img/Videos.png" alt="Video" width="32%" height="32%"></a>';
					$("#video_embed").show();
				}
				else {
					$("#video_embed").hide();
					$("#pres_embed").show();
				}
				if (data[0].pres_link != '') {
					$("#pres_embed").html(embedPres(data[0].pres_link));
					listhtml += '<a id="pres" href="javascript:void(0);" onclick="showPres()"><img src="img/handbooks.png" alt="Video" width="32%" height="32%"></a>';
				}
				else {
					$("#pres_embed").hide();
					$("#audio_embed").show();
				}
				if (data[0].audio_link != '') {
					$("#audio_embed").html(embedVideo(data[0].audio_link));
					listhtml += '<a id="aud" href="javascript:void(0);" onclick="showAud()"><img src="img/audioguides.png" alt="Video" width="32%" height="32%"></a>';
				}
				$("#content_list").html(listhtml);
			}
		},
		error: function(ts) {
			console.log(ts.responseText);
		}
	});
}