
function CloseVideo(){		
	$('.popup-box-cont').remove();
} 

$(document).ready(function(){
	$("#boton-menu").click(function(){
		$("#mobile-menu  ul").slideToggle(500);
	});

	$('#bmm').on('click', function(){
		$(this).toggleClass('act');
		$('#pnc').toggleClass('act');
	});


	$('#box-close img').on('click', function(){
		$('.popup-box-cont').remove();
	});



	
	$('a[href="#"]').on('click', function(e) {
	    e.preventDefault();
	});


});


