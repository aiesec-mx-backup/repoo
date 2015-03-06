jQuery(document).ready(function(){
	$('#clock').countdown('2015/1/8').on('update.countdown', function(event) {
   var $this = $(this).html(event.strftime(''
     + '<span class="white">%D</span> '
     + '<span>%H:</span>'
     + '<span>%M:</span>'
     + '<span>%S</span> '));
 });
 
 
 $(".menuScroll").click(function(){
		page = $(this).attr("data-page");
		
        $('html,body').animate({
            scrollTop: $("#"+page).offset().top},
            'slow');

	});
	
 
 
});