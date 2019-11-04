$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})




// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.nav-top__header').addClass('nav-top__header--detele');
    $('.hamburger-inner').addClass('js-hamburger');
    $("#iso").addClass('img-size').attr('src', 'assets/img/Home/Logo poke.svg').removeClass('scroll-up');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.nav-top__header').removeClass('nav-top__header--detele');
    $('.hamburger-inner').removeClass('js-hamburger');
    $("#iso").removeClass('img-size').attr('src', 'assets/img/Home/Logo poke.svg').removeClass('scroll-up');

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
    $("#iso").addClass('img-size').attr('src', 'assets/img/Logo_CM.png').removeClass('scroll-up');
    $('.nav-link').addClass('fixed-color');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $("#iso").removeClass('img-size').attr('src', 'assets/img/logo-color.png').removeClass('scroll-up');
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

// $(document).ready(function () {
//   // Add smooth scrolling to all links
//   $("a").on('click', function (event) {

//     // Make sure this.hash has a value before overriding default behavior
//     if (this.hash !== "") {
//       // Prevent default anchor click behavior
//       event.preventDefault();

//       // Store hash
//       var hash = this.hash;

//       // Using jQuery's animate() method to add smooth page scroll
//       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//       $('html, body').animate({
//         scrollTop: $(hash).offset().top
//       }, 800, function () {

//         // Add hash (#) to URL when done scrolling (default click behavior)
//         window.location.hash = hash;
//       });
//     } // End if
//   });
// });

var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 900;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName('typewrite');
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-type');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
};