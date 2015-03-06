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
	var realurl = "http://academy.aiesec.org.mx/js/info.php";
	//var realurl = "http://localhost:8080/aa/js/info.php";
	console.log(url_id);
	$.ajax({
		type:"post",
		url:realurl,
		data:{
			id:url_id
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
					$("#audio_embed").html(embedAudio(data[0].audio_link));
					listhtml += '<a id="aud" href="javascript:void(0);" onclick="showAud()"><img src="img/audioguides.png" alt="Video" width="32%" height="32%"></a>';
				}
				$("#content_list").html(listhtml);
			}
		},
		error: function(ts) {
			console.log(ts.responseText);
		}
	});
});