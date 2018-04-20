$(document).ready(function(){
	//var i = $('.ind-botao');

	$('.ind-botao').on('click', function(){
		$('nav li').toggle(); //interrupetor 1 click ou 2 cliks
	});

	$('nav li').on('click', function(){
		var link = $(this).children('a').attr('href');
		window.location.href=link; 
	});

	$('.ind-slid').cycle({
		fx: 'fade'
	})
});

