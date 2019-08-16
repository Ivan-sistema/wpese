
$(document).on('scroll', function(){

  var st = $(window).scrollTop();

  var lg = $('#topo');
  var hd = $('#scroll-header');

  if(st > 300){

    // lg.addClass('apagatopo');

    hd.addClass('fixo');



  } else if(st < 300){

    // lg.removeClass('apagatopo');

    hd.removeClass('fixo');
 
  }

})




// $('.menu-header a[href^="#"]').on('click', function(e) {
// 	e.preventDefault();
// 	var id = $(this).attr('href'),
// 			targetOffset = $(id).offset().top;
			
// 	$('html, body').animate({ 
// 		scrollTop: targetOffset - 100
// 	}, 500);
// });



var $ = jQuery.noConflict();

$(document).ready(function(e){


	$('.click-active').click(function(){




		$('#cursos').toggleClass('aumentar-qs');

			$('.quemsomos-home-container').toggleClass('ativar');

		if($('#cursos').hasClass('aumentar-qs')){
      $(".click-active").html("<a class='upper'>Ver menos</a>");
    } else {
      $(".click-active").html("<a class='upper'>Ver mais</a>");
    }

	

});





 $('.abrir-nav').click(function(){
  $('.menu-header').toggleClass('active-menu');
  $(this).toggleClass('abrir-nav-hamburguer');
 }); 
$('#menu-item-560,#menu-item-619,#menu-item-561,#menu-item-562,#menu-item-626').click(function(){ 
  $('.menu-header').removeClass('active-menu');
});

$("#cursos .btn-ese-default").hover(function(){
	$(this).stop(true, true).toggleClass('btn-shadow-azul');
	});


// $('.menu-header ul li').prepend("");

$(".menu-header ul li ").hover(function(){
    $(this).find('.bordertop-menu').toggleClass('menu-transition');
});


// document.addEventListener( 'wpcf7submit', function( event ) {
// 	 window.location.assign("http://helptask.com.br/job/ese/agradecimento");
// }, false );



 $('#celular').mask('(00) 0 0000 0000');
 $('#telefone').mask('(00) 0000 0000');
 $('#data_nascimento').mask('99/99/9999', {placeholder: "__/__/____"});

  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  // $('#cpf').mask('000.000.000-00', {reverse: true});


$('.title-acordeon').click(function(){
$(this).parent().find('div.conteudo-acordeon').toggleClass('active-acordeon');
if($('div.conteudo-acordeon').hasClass('active-acordeon')){
  $(this).find('img').attr("src", "http://helptask.com.br/job/ese/wp-content/themes/ese/assets/images/seta-ativa.png");
   $(this).parent().find('div.conteudo-acordeon,.title-acordeon').css('background-color','#fbfcfc');
} else {
     $(this).find('img').attr("src", "http://helptask.com.br/job/ese/wp-content/themes/ese/assets/images/seta-inativa.png");
  $(this).parent().find('div.conteudo-acordeon,.title-acordeon').css('background-color','transparent');
    }
});


$('.title-acordeon-matriz-mobile').click(function(){
$(this).parent().find('div.conteudo-acordeon-matriz-mobile').toggleClass('active-acordeon');
if($('div.conteudo-acordeon-matriz-mobile').hasClass('active-acordeon')){
  // $(this).find('img').attr("src", "http://helptask.com.br/job/ese/wp-content/themes/ese/assets/images/seta-ativa.png");
   $(this).parent().find('div.conteudo-acordeon-matriz-mobile').css({
    "background-color":"transparent",
    "border-bottom":"1px solid #fff",
    "border-left":"1px solid #fff",
    "border-right":"1px solid #fff"
  });
   $(this).parent().find('.title-acordeon-matriz-mobile').css({
    "background-color":"transparent",
    "border-bottom":"none"
  });
} else {
     // $(this).find('img').attr("src", "http://helptask.com.br/job/ese/wp-content/themes/ese/assets/images/seta-inativa.png");
  $(this).parent().find('.title-acordeon-matriz-mobile').css({
    "background-color":"transparent",
    "border-bottom":"1px solid #fff"
  });
    }
});

$('.tab-1').click(function(){
  $('.tab-index-2,.tab-index-3,.tab-index-4').css('display','none');
  $('.tab-2,.tab-3,.tab-4').css('border-bottom','none');
  $('.tab-index-1').css('display','block');
  $(this).css('border-bottom', '4px solid #127bdc');

});
$('.tab-2').click(function(){
  $('.tab-index-1,.tab-index-3,.tab-index-4').css('display','none');
  $('.tab-1,.tab-3,.tab-4').css('border-bottom','none');
  $('.tab-index-2').css('display','block');
  $(this).css('border-bottom', '4px solid #127bdc');

});


$('#menu-item-563').click(function(){
   $('.tab-index-1,.tab-index-3,.tab-index-4').css('display','none');
  $('.tab-1,.tab-3,.tab-4').css('border-bottom','none');
  $('.tab-index-2').css('display','block');
  $('.tab-2').css('border-bottom', '4px solid #127bdc');

});
$('.tab-3').click(function(){
  $('.tab-index-1,.tab-index-2,.tab-index-4').css('display','none');
  $('.tab-1,.tab-2,.tab-4').css('border-bottom','none');
  $('.tab-index-3').css('display','block');
  $(this).css('border-bottom', '4px solid #127bdc');

});
$('.tab-4').click(function(){
  $('.tab-index-1,.tab-index-2,.tab-index-3').css('display','none');
  $('.tab-1,.tab-2,.tab-3').css('border-bottom','none');
  $('.tab-index-4').css('display','block');
  $(this).css('border-bottom', '4px solid #127bdc');

});
 


$('.tab-matriz1').mouseenter(function(){
  $('.content-matriz2,.content-matriz3,.content-matriz4,.content-matriz5,.content-matriz6,.content-matriz7,.content-matriz8').css('display','none');
  $('.content-matriz1').css('display','block');
  $('.tab-matriz2,.tab-matriz3,.tab-matriz4,.tab-matriz5,.tab-matriz6,.tab-matriz7,.tab-matriz8').css({
     "border-bottom":"none",
     "border-top": "none"
  });
  $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});
$('.tab-matriz2').mouseenter(function(){
  $('.content-matriz1,.content-matriz3,.content-matriz4,.content-matriz5,.content-matriz6,.content-matriz7,.content-matriz8').css('display','none');
  $('.content-matriz2').css('display','block');
  $('.tab-matriz1,.tab-matriz3,.tab-matriz4,.tab-matriz5,.tab-matriz6,.tab-matriz7,.tab-matriz8').css({
     "border-bottom":"none",
   "border-top": "none"
  });
 $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});

$('.tab-matriz3').mouseenter(function(){
  $('.content-matriz1,.content-matriz2,.content-matriz4,.content-matriz5,.content-matriz6,.content-matriz7,.content-matriz8').css('display','none');
  $('.content-matriz3').css('display','block');
  $('.tab-matriz2,.tab-matriz1,.tab-matriz4,.tab-matriz5,.tab-matriz6,.tab-matriz7,.tab-matriz8').css({
     "border-bottom":"none",
   "border-top": "none"
  });
  $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});
$('.tab-matriz4').mouseenter(function(){
  $('.content-matriz1,.content-matriz3,.content-matriz2,.content-matriz5,.content-matriz6,.content-matriz7,.content-matriz8').css('display','none');
  $('.content-matriz4').css('display','block');
  $('.tab-matriz1,.tab-matriz3,.tab-matriz2,.tab-matriz5,.tab-matriz6,.tab-matriz7,.tab-matriz8').css({
     "border-bottom":"none",
   "border-top": "none"
  });
 $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});

$('.tab-matriz5').mouseenter(function(){
  $('.content-matriz2,.content-matriz3,.content-matriz4,.content-matriz1,.content-matriz6,.content-matriz7,.content-matriz8').css('display','none');
  $('.content-matriz5').css('display','block');
  $('.tab-matriz2,.tab-matriz3,.tab-matriz4,.tab-matriz1,.tab-matriz6,.tab-matriz7,.tab-matriz8').css({
     "border-bottom":"none",
   "border-top": "none"
  });
  $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});
$('.tab-matriz6').mouseenter(function(){
  $('.content-matriz1,.content-matriz3,.content-matriz4,.content-matriz5,.content-matriz2,.content-matriz7,.content-matriz8').css('display','none');
  $('.content-matriz6').css('display','block');
  $('.tab-matriz1,.tab-matriz3,.tab-matriz4,.tab-matriz5,.tab-matriz2,.tab-matriz7,.tab-matriz8').css({
     "border-bottom":"none",
   "border-top": "none"
  });
 $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});


$('.tab-matriz7').mouseenter(function(){
  $('.content-matriz2,.content-matriz3,.content-matriz4,.content-matriz5,.content-matriz6,.content-matriz1,.content-matriz8').css('display','none');
  $('.content-matriz7').css('display','block');
  $('.tab-matriz2,.tab-matriz3,.tab-matriz4,.tab-matriz5,.tab-matriz6,.tab-matriz1,.tab-matriz8').css({
     "border-bottom":"none",
   "border-top": "none"
  });
  $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});
$('.tab-matriz8').mouseenter(function(){
  $('.content-matriz1,.content-matriz3,.content-matriz4,.content-matriz5,.content-matriz6,.content-matriz7,.content-matriz2').css('display','none');
  $('.content-matriz8').css('display','block');
  $('.tab-matriz1,.tab-matriz3,.tab-matriz4,.tab-matriz5,.tab-matriz6,.tab-matriz7,.tab-matriz2').css({
     "border-bottom":"none",
   "border-top": "none"
  });
 $(this).css({
    "border-bottom":"1px solid #fff",
   "border-top": "1px solid #fff"
  });
});
// $('.tab-matriz').hover(function(){

//   $(this).find('.icone-mais').toggleClass('active');

// });

$('.saiba-mais-1').click(function(){
  $('#modal1').css('display','block');
});
$('.sairmodal').click(function(){

  $('#modal1').css('display','none');
  $('#modal2').css('display','none');
  $('#modal3').css('display','none');
});

$('.saiba-mais-2').click(function(){
  $('#modal2').css('display','block');
});
$('.saiba-mais-3').click(function(){
 $('#modal3').css('display','block');
});








$('input[name=cv]').change(function() {
   console.log($(this).val()); 
});

$('.file-input').click(function() {
    $('input[name=cv]').click();
});


});

