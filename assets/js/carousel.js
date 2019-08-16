var $ = jQuery.noConflict();

$(document).ready(function(e){

/*=============CAROUSEL HOME==================*/
var owlhome = $('.owl-carousel-home');
owlhome.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true, 
    responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  960: {
                    items: 4
                  },
                  1200: {
                    items: 4
                  }
                }
});

/*=============CAROUSEL ACONTECE==================*/
var owlacontece = $('.owl-carousel-acontece');
owlacontece.owlCarousel({
				loop: true,
                nav: true,
                margin: 7,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  960: {
                    items: 4
                  },
                  1200: {
                    items: 4
                  }
                }
});
   owlacontece.on('.owl-stage' , 'mousewheel', function(e) {
                if (e.deltaY > 0) {
                  owlacontece.trigger('next.owl');
                } else {
                  owlacontece.trigger('prev.owl');
                }
                e.preventDefault();
              }); 


/*=============CAROUSEL ECOSISTEMA==================*/
var owlecosistema = $('.owl-carousel-ecossistema');
owlecosistema.owlCarousel({
				loop: true,
                nav: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  960: {
                    items: 3
                  },
                  1200: {
                    items: 3
                  }
                }
});

     owlecosistema.on('.owl-stage' , 'mousewheel', function(e) {
                if (e.deltaY > 0) {
                  owlecosistema.trigger('next.owl');
                } else {
                  owlecosistema.trigger('prev.owl');
                }
                e.preventDefault();
              });


/*=============CAROUSEL PROFESSORES GRADUAÇÃO==================*/
var owlgraduacao = $('.owl-carousel-graduacao');
owlgraduacao.owlCarousel({
				loop: true,
                nav: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  960: {
                    items: 1
                  },
                  1200: {
                    items: 1
                  }
                }
});

     owlgraduacao.on('.owl-stage' , 'mousewheel', function(e) {
                if (e.deltaY > 0) {
                  owlgraduacao.trigger('next.owl');
                } else {
                  owlgraduacao.trigger('prev.owl');
                }
                e.preventDefault();
              });

  
/*==============CAROUSEL GESTÃO EXECUTIVA=======================*/
 
              var owlgestaoexecutiva = $('.owl-carousel-gestao-executiva');
              owlgestaoexecutiva.owlCarousel({
                loop: false,
                nav: false,
                margin: 7,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  960: {
                    items: 1
                  },
                  1200: {
                    items: 1
                  }
                }
              });


/*=============CAROUSEL ESTRUTURA=========================*/
              var owlestrutura = $('.owl-carousel-estrutura');
              owlestrutura.owlCarousel({
                loop: true,
                nav: true,
                margin: 7,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  960: {
                    items: 1
                  },
                  1200: {
                    items: 1
                  }
                }
              });
              owlestrutura.on('.owl-stage' , 'mousewheel', function(e) {
                if (e.deltaY > 0) {
                  owl.trigger('next.owl');
                } else {
                  owl.trigger('prev.owl');
                }
                e.preventDefault();
              });


});