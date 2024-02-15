
<<<<<<< HEAD
function CloseVideo(){		
	$('.popup-box-cont').remove();
} 

$(document).ready(function(){
	$("#boton-menu").click(function(){
		$("#mobile-menu  ul").slideToggle(500);
	});

	$('#bmm').on('click', function(){
=======
function CloseVideo() {
	$('.popup-box-cont').remove();
}

$(document).ready(function () {
	$("#boton-menu").click(function () {
		$("#mobile-menu  ul").slideToggle(500);
	});

	$('#bmm').on('click', function () {
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
		$(this).toggleClass('act');
		$('#pnc').toggleClass('act');
	});


<<<<<<< HEAD
	$('#box-close img').on('click', function(){
=======
	$('#box-close img').on('click', function () {
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
		$('.popup-box-cont').remove();
	});



<<<<<<< HEAD
	
	$('a[href="#"]').on('click', function(e) {
	    e.preventDefault();
=======

	$('a[href="#"]').on('click', function (e) {
		e.preventDefault();
	});


	$('#popup-anuncio').on('click', function (e) {
		$('#polyglass-anuncio').addClass('active');
	});

	$('#close-anuncio').on('click', function (e) {
		$('#polyglass-anuncio').removeClass('active');
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
	});


});
<<<<<<< HEAD


=======
>>>>>>> d37cc0c20eecb27910c078726db35001f92e1921
