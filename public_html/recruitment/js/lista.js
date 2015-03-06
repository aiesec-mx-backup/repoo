$(document).ready(function() {
	var realurl = "http://aiesec.org.mx/recruitment/js/info.php";
	//var realurl = "http://localhost:8080/recruit/js/info.php";
	var ubi = $('input#ubicacion').val()
	$.ajax({
		type:"post",
		url:realurl,
		data:{
			  ubi: ubi
			 },
		dataType:"json",
		success:function(data){
			console.log('adding html');
			var html = '', row;
			for(var i = 0; i < data.length; i++) {
				console.log(data[i]);

				html += '<div class="sessionbox"><p>Global '+data[i].prog+'</p><p><b>Tipo:</b> '+data[i].tipo+'</p><p><b>';

				if (data[i].tipo == 'Virtual')
					html += 'Link';
				else
					html += 'Ubicacion';
				
				html += ':</b> '+data[i].link+'</p><p><b>Fecha: </b>'+data[i].fecha+"</p></div><br /><br />";
			}
			console.log(html);
			$('#list').html(html);
		},
		error: function(ts) {
			console.log(ts.responseText);
		}
	});
});