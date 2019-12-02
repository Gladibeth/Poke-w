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



// Menú fixed
const url = window.location.origin;
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.nav-top__header').addClass('nav-top__header--detele');
    $('.hamburger-inner').addClass('js-hamburger');
    $("#iso").addClass('img-size').attr('src', url + '/poke/wp-content/themes/theme/assets/img/Header/Logo-poke.svg').removeClass('scroll-up');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.nav-top__header').removeClass('nav-top__header--detele');
    $('.hamburger-inner').removeClass('js-hamburger');
    $("#iso").removeClass('img-size').attr('src', url + '/poke/wp-content/themes/theme/assets/img/Header/Logo-poke-white.svg').removeClass('scroll-up');

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

const pathname = window.location.pathname;



// menu hambuger


$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $("#iso").addClass('img-size').attr('src', url + '/poke/wp-content/themes/theme/assets/img/Header/Logo-poke.svg').removeClass('scroll-up');
    $('.nav-link').addClass('fixed-color');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $("#iso").removeClass('img-size').attr('src', url + '/poke/wp-content/themes/theme/assets/img/Header/Logo-poke-white.svg').removeClass('scroll-up');
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