const url = window.location.origin;
$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})

// $('.date').datepicker({
//   multidate: true,
//   format: 'dd-mm-yyyy'
// });

$('input[type="file"]').each(function () {
  // get label text
  var label = $(this).parents('.form-group').find('label').text();
  label = (label) ? label : 'Upload File';

  // wrap the file input
  $(this).wrap('<div class="input-file"></div>');
  // display label
  $(this).before('<span class="btn">' + label + '</span>');
  // we will display selected file here
  $(this).before('<span class="file-selected"></span>');

  // file input change listener 
  $(this).change(function (e) {
    // Get this file input value
    var val = $(this).val();

    // Let's only show filename.
    // By default file input value is a fullpath, something like 
    // C:\fakepath\Nuriootpa1.jpg depending on your browser.
    var filename = val.replace(/^.*[\\\/]/, '');

    // Display the filename
    $(this).siblings('.file-selected').text(filename);
  });
});

// Open the file browser when our custom button is clicked.
$('.input-file .btn').click(function () {
  $(this).siblings('input[type="file"]').trigger('click');
});

//active en el menu
const page = window.location.pathname;
const itemsNavbarMenu = $('.navbar-nav.mr-autos li');
switch (page) {
  case '/':
    console.log('index')
    break;
  case '/menu/':
      $(itemsNavbarMenu[0]).find('a').addClass('active');
    break;
  case '/nosotros/':
      $(itemsNavbarMenu[1]).find('a').addClass('active');
    break;
  case '/ubicaciones/':
      $(itemsNavbarMenu[2]).find('a').addClass('active');
    break;
  case '/poke-puntos/':
      $(itemsNavbarMenu[3]).find('a').addClass('active');
    break;
  case '/ambiental/':
      $(itemsNavbarMenu[4]).find('a').addClass('active');
    break;
  case '/eventos/':
      $(itemsNavbarMenu[5]).find('a').addClass('active');
      $('.nav-link-bc').css('text-shadow','none !important');
  case '/escribenos/':
    $('.nav-link-bc').css('text-shadow','none !important');
    //aceptar
      var truecheck = document.getElementById('aceptCheckbox');
      truecheck.addEventListener("change", validatruecheck, false);
      function validatruecheck(){
        let politicaTermino = truecheck.checked;
        if(politicaTermino){
          $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', true);
        }else{
          $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', false);
        }
      }
  case '/trabaja-con-nosotros/':
    $('.nav-link-bc').css('text-shadow','none !important');
    //aceptar
      var truecheck = document.getElementById('aceptCheckbox');
      truecheck.addEventListener("change", validatruecheck, false);
      function validatruecheck(){
        let politicaTermino = truecheck.checked;
        if(politicaTermino){
          $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', true);
        }else{
          $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', false);
        }
      }
  case '/cuentanos-tu-experiencia/':
      $('.nav-link-bc').css('text-shadow','none !important');
      $('.navbar-fixed-js').addClass('fixed');
      /* let selectCiudad = $('#js-ciudad-form');
        selectCiudad[0][0].text = 'Ciudad'; */
      //aceptar

      var truecheck = document.getElementById('aceptCheckbox');
      truecheck.addEventListener("change", validatruecheck, false);
      function validatruecheck(){
        let politicaTermino = truecheck.checked;
        if(politicaTermino){
          $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', true);
        }else{
          $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', false);
        }
      }

      var information = document.getElementById('aceptInformation');
      information.addEventListener("change", validainformation, false);
      function validainformation(){
        let politicaTermino = information.checked;
        if(politicaTermino){
          $("input[value='Deseo_recibir_mas_informacion_sobre_nuestros_establecimientos']").prop('checked', true);
        }else{
          $("input[value='Deseo_recibir_mas_informacion_sobre_nuestros_establecimientos']").prop('checked', false);
        }
      }









    $('.nav-link').addClass('fixed-color');
    $('.nav-top__header').addClass('nav-top__header--detele');
    $('.hamburger-inner').addClass('js-hamburger');
    // $("#iso").addClass('img-size').attr('src', url + '/wp-content/themes/theme/assets/img/Header/Logo-poke.svg').removeClass('scroll-up');

    break;
  
}

// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.nav-top__header').addClass('nav-top__header--detele');
    $('.hamburger-inner').addClass('js-hamburger');
    // $("#iso").addClass('img-size').attr('src', url + '/wp-content/themes/theme/assets/img/Header/Logo-poke.svg').removeClass('scroll-up');
    $("#iso").addClass('display_none');
    $("#iso_green").addClass('display_block');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.nav-top__header').removeClass('nav-top__header--detele');
    $('.hamburger-inner').removeClass('js-hamburger');
    $("#iso").removeClass('display_none');
    $("#iso_green").removeClass('display_block');
    // $("#iso").removeClass('img-size').attr('src', url + '/wp-content/themes/theme/assets/img/Header/Logo-poke-white.svg').removeClass('scroll-up');

  }
});

//menu drop
$(document).ready(function () {
  $('.navbar .dropdown').hover(function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
  }, function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
  });
});




// menu hambuger


$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    // $("#iso").addClass('img-size').attr('src', url + '/wp-content/themes/theme/assets/img/Header/Logo-poke.svg').removeClass('scroll-up');
    $('.nav-link').addClass('fixed-color');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      // $("#iso").removeClass('img-size').attr('src', url + '/wp-content/themes/theme/assets/img/Header/Logo-poke-white.svg').removeClass('scroll-up');
      $('.nav-link').removeClass('fixed-color');

    }
  }
});

// Font
$(document).ready(function () {
  WebFontConfig = {
    google: {
      families: ['Raleway:300,400,500,600,700,900', 'Roboto:300,400,500,700,900']
    }
  };
  (function () {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
});

//productos menu
function menu(e){
  if('banner-'+e.id == 'banner-entradas'){
    $('#banner-pokeBowl').addClass( "js-hiddenMenu" );
    $('#banner-juiceBar').addClass( "js-hiddenMenu" );
    $('#banner-entradas').removeClass( "js-hiddenMenu" );
  }
   if('banner-'+e.id == 'banner-pokeBowl'){
    $('#banner-entradas').addClass( "js-hiddenMenu" );
    $('#banner-juiceBar').addClass( "js-hiddenMenu" );
    $('#banner-pokeBowl').removeClass( "js-hiddenMenu" );
  }
  if('banner-'+e.id == 'banner-juiceBar'){
    $('#banner-entradas').addClass( "js-hiddenMenu" );
    $('#banner-pokeBowl').addClass( "js-hiddenMenu" );
    $('#banner-juiceBar').removeClass( "js-hiddenMenu" );
  }
}

//select
var select = document.getElementById('ubications');
select.addEventListener('change',
  function(){

  var selectedOption = this.options[select.selectedIndex];
  console.log('#'+selectedOption.value);
  $('.js-ubications').addClass( "js-displayNone" );
  $('#'+selectedOption.value).removeClass( "js-displayNone" );
  $('#modal-'+selectedOption.value).removeClass( "js-displayNone" );
  
});

function scroll_top(){
  var posicion = $(".js-scroll").offset().top;
  $("div").animate({
    scrollTop: 0
  }, 2000); 
}

function scroll_bottom(){
  var posicion = $(".js-scroll").offset().top;
  console.log(posicion);
  $("div").animate({
      scrollTop: 660
  }, 2000); 
}

  
  

