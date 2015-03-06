function navegacionTabs(){
	$(".nav-tabs li a").click(function(e){
		var activa = $(".nav-tabs li.active a").attr("id");
		var idx = parseInt($(".nav-tabs li a").index($("#"+activa))) + 1;
	});
	$(".siguiente").click(function(e){
		var activa = $(".nav-tabs li.active a").attr("id");
		var idx = parseInt($(".nav-tabs li a").index($("#"+activa))) + 1;
		idx = idx + 1;
		e.preventDefault();
		$("ul.nav-tabs li").removeClass("active");
		$("ul.nav-tabs li:nth-child(" + idx + ")").addClass("active");					
	});
	$(".anterior").click(function(e){
		var activa = $(".nav-tabs li.active a").attr("id");
		var idx = parseInt($(".nav-tabs li a").index($("#"+activa))) + 1;
		idx = idx - 1;
		e.preventDefault();
		$("ul.nav-tabs li").removeClass("active");
		$("ul.nav-tabs li:nth-child(" + idx + ")").addClass("active");					
	});
}

function activaTabError(id){
	//$("ul.nav-tabs li").removeClass("active");
	var idx = $(".tab-content div").index($("#"+id)) + 1;
	//$("ul.nav-tabs li:nth-child(" + idx + ")").addClass("active");
	var tabs = $(".nav-tabs a");
	$(tabs).each(function(index, element) {
		var ref = $(element).attr("href");
		var existe = ref.indexOf(id);
		if(existe >= 0) {
			$("#"+id+"-bt").click();
		} 
    });
}

function focusNombre(){
	$("input#nom").focus();
}

function toggleMaestria() {
	$(".maestria-si").click(function(){
		$(".maestria").css("visibility","visible");	
	});
	$(".maestria-no").click(function(){
		$(".maestria").css("visibility","hidden");
	});
}

function toggleDoctorado() {
	$(".doctorado-si").click(function(){
		$(".doctorado").css("visibility","visible");	
	});
	$(".doctorado-no").click(function(){
		$(".doctorado").css("visibility","hidden");
	});
}

function toggleMesaDir() {
	$(".mesa").css("visibility", "hidden");
	$(".mesa-si").click(function(){
		$(".mesa").css("visibility","visible");	
	});
	$(".mesa-no").click(function(){
		$(".mesa").css("visibility","hidden");
	});
}

function toggleLaboral() {
	$(".trabajo").css("visibility", "hidden");
	$(".trabajo-si").click(function(){
		$(".trabajo").css("visibility","visible");	
	});
	$(".trabajo-no").click(function(){
		$(".trabajo").css("visibility","hidden");
	});
}

function checks() {
	$(".tip_part").click(function() {
			if ($(this).is(":checked")) {
				var group = "input:checkbox[name='" + $(this).attr("name") + "']";
				$(group).prop("checked", false);
				$(this).prop("checked", true);
			} else {
				$(this).prop("checked", false);
			}
		});
}
