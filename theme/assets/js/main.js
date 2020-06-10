const url = window.location.origin;
const URLactual = window.location;
//página menu
if (URLactual == "http://localhost/poke/menu/#entradas") {
  document.getElementById("entradas").click();
} else if (URLactual == "http://localhost/poke/menu/#pokeBowl") {
  document.getElementById("pokeBowl").click();
} else if (URLactual == "http://localhost/poke/menu/#juiceBar") {
  document.getElementById("juiceBar").click();
}

//cookies
$(document).ready(function () {
  if (!localStorage.getItem("session")) {
    $("#modalCoockie").modal("toggle");
    // estableces el localstorage en 1 para que no se vuelva a cumplir la condicion
    localStorage.setItem("session", 1);
  }
});

$(function () {
  "use strict";

  $('[data-toggle="offcanvas"]').on("click", function () {
    $(".offcanvas-collapse").toggleClass("open");
  });
});

// $('.date').datepicker({
//   multidate: true,
//   format: 'dd-mm-yyyy'
// });

$("input.wpcf7-form-control").click(function () {
  $(".main-event__img-bg").addClass("main-event__img-height");
});

$('input[type="file"]').each(function () {
  // get label text
  var label = $(this).parents(".form-group").find("label").text();
  label = label ? label : "Upload File";

  // wrap the file input
  $(this).wrap('<div class="input-file"></div>');
  // display label
  $(this).before('<span class="btn">' + label + "</span>");
  // we will display selected file here
  $(this).before('<span class="file-selected"></span>');

  // file input change listener
  $(this).change(function (e) {
    // Get this file input value
    var val = $(this).val();

    // Let's only show filename.
    // By default file input value is a fullpath, something like
    // C:\fakepath\Nuriootpa1.jpg depending on your browser.
    var filename = val.replace(/^.*[\\\/]/, "");

    // Display the filename
    $(this).siblings(".file-selected").text(filename);
  });
});

// Open the file browser when our custom button is clicked.
$(".input-file .btn").click(function () {
  $(this).siblings('input[type="file"]').trigger("click");
});

//active en el menu
const page = window.location.pathname;
const itemsNavbarMenu = $(".navbar-nav.mr-autos li");
switch (page) {
  case "/poke/":
    console.log("index");
    break;
  case "/poke/menu/":
    $(itemsNavbarMenu[0]).find("a").addClass("active");
    break;
  case "/poke/nosotros/":
    $(itemsNavbarMenu[1]).find("a").addClass("active");
    break;
  case "/poke/ubicaciones/":
    $(itemsNavbarMenu[2]).find("a").addClass("active");
    //select
    var select = document.getElementById("ubications");
    select.addEventListener("change", function () {
      var selectedOption = this.options[select.selectedIndex];
      console.log("#" + selectedOption.value);
      $(".js-ubications").addClass("js-displayNone");
      $("#" + selectedOption.value).removeClass("js-displayNone");
      $("#modal-" + selectedOption.value).removeClass("js-displayNone");
    });

    function scroll_top() {
      var posicion = $(".js-scroll").offset().top;
      $("div").animate(
        {
          scrollTop: 0
        },
        2000
      );
    }

    function scroll_bottom() {
      var posicion = $(".js-scroll").offset().top;
      console.log(posicion);
      $("div").animate(
        {
          scrollTop: 660
        },
        2000
      );
    }

    break;
  case "/poke/poke-puntos/":
    $(itemsNavbarMenu[3]).find("a").addClass("active");
    break;
  case "/poke/ambiental/":
    $(itemsNavbarMenu[4]).find("a").addClass("active");
    break;

  case "/poke/escribenos/":
    $(".nav-link-bc").css("text-shadow", "none !important");
    //aceptar
    var truecheck = document.getElementById("aceptCheckbox");
    truecheck.addEventListener("change", validatruecheck, false);
    function validatruecheck() {
      let politicaTermino = truecheck.checked;
      if (politicaTermino) {
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", true);
      } else {
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", false);
      }
    }
  case "/poke/trabaja-con-nosotros/":
    $(".nav-link-bc").css("text-shadow", "none !important");
    //aceptar
    var truecheck = document.getElementById("aceptCheckbox");
    truecheck.addEventListener("change", validatruecheck, false);
    function validatruecheck() {
      let politicaTermino = truecheck.checked;
      if (politicaTermino) {
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", true);
      } else {
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", false);
      }
    }
  case "/poke/cuentanos-tu-experiencia/":
    $(".nav-link-bc").css("text-shadow", "none !important");
    $(".navbar-fixed-js").addClass("fixed");
    /* let selectCiudad = $('#js-ciudad-form');
        selectCiudad[0][0].text = 'Ciudad'; */
    //aceptar

    var truecheck = document.getElementById("aceptCheckbox");
    truecheck.addEventListener("change", validatruecheck, false);
    function validatruecheck() {
      let politicaTermino = truecheck.checked;
      if (politicaTermino) {
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", true);
      } else {
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", false);
      }
    }

    var information = document.getElementById("aceptInformation");
    information.addEventListener("change", validainformation, false);
    function validainformation() {
      let politicaTermino = information.checked;
      if (politicaTermino) {
        $(
          "input[value='Deseo_recibir_mas_informacion_sobre_nuestros_establecimientos']"
        ).prop("checked", true);
      } else {
        $(
          "input[value='Deseo_recibir_mas_informacion_sobre_nuestros_establecimientos']"
        ).prop("checked", false);
      }
    }
  case "/poke/fep/":
    $(".nav-link-bc").css("text-shadow", "none !important");
  case "/poke/eventos/":
    $(".nav-link-bc").css("text-shadow", "none !important");
    $(".navbar-fixed-js").addClass("fixed");
    let $countevent = 0;
    function formEvent() {
      if ($countevent == 0) {
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", true);
        $countevent += 1;
      } else {
        $countevent = 0;
        $(
          "input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']"
        ).prop("checked", false);
      }
    }

    $(".nav-link").addClass("fixed-color");
    $(".nav-top__header").addClass("nav-top__header--detele");
    $(".hamburger-inner").addClass("js-hamburger");
    // $("#iso").addClass('img-size').attr('src', url + '/wp-content/themes/theme/assets/img/Header/Logo-poke.svg').removeClass('scroll-up');

    break;
}

//menu drop
$(document).ready(function () {
  $(".navbar .dropdown").hover(
    function () {
      $(this).find(".dropdown-menu").first().stop(true, true).slideDown(150);
    },
    function () {
      $(this).find(".dropdown-menu").first().stop(true, true).slideUp(105);
    }
  );
});

// menu hambuger

$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active");
    $(".navbar-fixed-js").addClass("fixed");
    $(".hamburger-inner").addClass("js-hamburger");
    $(".nav-link").addClass("fixed-color");
    $("#iso").addClass("active");
    $("html").css("overflow", "hidden ");
  } else {
    $("html").css("overflow", "hidden auto");
    $("#iso").removeClass("active");
    $(this).removeClass("is-active");
    if ($(document).scrollTop() <= 70 && $(window).width() >= 0) {
      $(".navbar-fixed-js").removeClass("fixed");
      $(".hamburger-inner").removeClass("js-hamburger");
      $(".nav-link").removeClass("fixed-color");
      $("#iso").removeClass("active");
    } else {
      $("#iso").addClass("active");
    }
  }
});

// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && $(window).width() >= 0) {
    $(".navbar-fixed-js").addClass("fixed");
    $(".nav-link").addClass("fixed-color");
    $(".nav-top__header").addClass("nav-top__header--detele");
    $(".hamburger-inner").addClass("js-hamburger");
    $("#iso").addClass("active");
  } else {
    $(".navbar-fixed-js").removeClass("fixed");
    $(".nav-link").removeClass("fixed-color");
    $(".nav-top__header").removeClass("nav-top__header--detele");
    $(".hamburger-inner").removeClass("js-hamburger");
    $("#iso").removeClass("active");
  }
});

// Font
$(document).ready(function () {
  WebFontConfig = {
    google: {
      families: [
        "Raleway:300,400,500,600,700,900",
        "Roboto:300,400,500,700,900"
      ]
    }
  };
  (function () {
    var wf = document.createElement("script");
    wf.src =
      ("https:" == document.location.protocol ? "https" : "http") +
      "://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
    wf.type = "text/javascript";
    wf.async = "true";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(wf, s);
  })();
});

//productos menu
function menu(e) {
  $(`.about-banner`).addClass("js-hiddenMenu");
  $(`#banner-${e.id}`).removeClass("js-hiddenMenu");
}

const urlBowl =
  url + "/poke/wp-content/themes/theme/assets/img/Arma-tu-bowl/container";

var auxBases = "";
var auxTamano = "";
var auxProteinas = "";
var auxToppingsA = "";
var auxToppingsB = "";
var auxMixinsA = "";
var auxMixinsB = "";
var auxSalsas = "";
var calorias = 0;
var alergenos = 0;
var superFoods = 0;
var grasas = 0;

function tamano(event) {
  if (auxTamano == "") {
    $(".bases.bowl").attr("onclick", "openTabs(event, 'Arma')");
    $(".bases .bases").attr("onclick", "bases(this)");
    $(".bases .bases").css("cursor", "pointer");
    $(".bases").css("opacity", "1");
    $(".bases").css("cursor", "pointer");
    $(".bases").css("pointer-events", "inherit");
  } else {
    minInformation(auxTamano.className);
    if (auxBases != "") {
      $("#container__tamano").css("display", "none");
    }
  }
  $("#container__logo--poke").css("display", "none");
  $(event).css("display", "none");
  $(auxTamano).css("display", "block");
  auxTamano = event;
  img(event, "1");
}

function bases(event) {
  $("#container__tamano").find("img").remove();
  if (auxBases == "") {
    $(".proteinas.bowl").attr("onclick", "openTabs(event, 'Arma')");
    $(".proteinas .proteinas").attr("onclick", "proteina(this)");
    $(".proteinas .proteinas").css("cursor", "pointer");
    $(".proteinas").css("opacity", "1");
    $(".proteinas").css("cursor", "pointer");
    $(".proteinas").css("pointer-events", "inherit");
  } else {
    minInformation(auxBases.className);
  }
  $(event).css("display", "none");
  $(auxBases).css("display", "flex");
  auxBases = event;
  img(event, "2");
}

function proteina(event) {
  if (auxProteinas == "") {
    $(".mixins-a.bowl").attr("onclick", "openTabs(event, 'Arma')");
    $(".mixins-a .mixins-a").attr("onclick", "mixinsA(this)");
    $(".mixins-a .mixins-a").css("cursor", "pointer");
    $(".mixins-a").css("opacity", "1");
    $(".mixins-a").css("cursor", "pointer");
    $(".mixins-a").css("pointer-events", "inherit");
  } else {
    minInformation(auxProteinas.className);
  }
  $(event).css("display", "none");
  $(auxProteinas).css("display", "flex");
  auxProteinas = event;
  img(event, "9");
}

function mixinsA(event) {
  if (auxMixinsA == "") {
    $(".mixins-b.bowl").attr("onclick", "openTabs(event, 'Arma')");
    $(".mixins-b .mixins-b").attr("onclick", "mixinsB(this)");
    $(".mixins-b .mixins-b").css("cursor", "pointer");
    $(".mixins-b").css("opacity", "1");
    $(".mixins-b").css("cursor", "pointer");
    $(".mixins-b").css("pointer-events", "inherit");
  } else {
    minInformation(auxMixinsA.className);
  }
  $(event).css("display", "none");
  $(auxMixinsA).css("display", "flex");
  auxMixinsA = event;
  img(event, "4");
}

function mixinsB(event) {
  if (auxMixinsB == "") {
    $(".toppings-a.bowl").attr("onclick", "openTabs(event, 'Arma')");
    $(".toppings-a .toppings-a").attr("onclick", "toppingsA(this)");
    $(".toppings-a .toppings-a").css("cursor", "pointer");
    $(".toppings-a").css("opacity", "1");
    $(".toppings-a ").css("cursor", "pointer");
    $(".toppings-a").css("pointer-events", "inherit");
  } else {
    minInformation(auxMixinsA.className);
  }
  $(event).css("display", "none");
  $(auxMixinsA).css("display", "flex");
  auxMixinsA = event;
  img(event, "5");
}

function toppingsA(event) {
  if (auxToppingsA == "") {
    $(".toppings-b.bowl").attr("onclick", "openTabs(event, 'Arma')");
    $(".toppings-b .toppings-b").attr("onclick", "toppingsB(this)");
    $(".toppings-b .toppings-b").css("cursor", "pointer");
    $(".toppings-b").css("opacity", "1");
    $(".toppings-b ").css("cursor", "pointer");
    $(".toppings-b").css("pointer-events", "inherit");
  } else {
    minInformation(auxToppingsA.className);
  }
  $(event).css("display", "none");
  $(auxToppingsA).css("display", "flex");
  auxToppingsA = event;
  img(event, "6");
}

function toppingsB(event) {
  if (auxToppingsB == "") {
    $(".salsas.bowl").attr("onclick", "openTabs(event, 'Arma')");
    $(".salsas .salsas").attr("onclick", "salsas(this)");
    $(".salsas .salsas").css("cursor", "pointer");
    $(".salsas").css("opacity", "1");
    $(".salsas").css("cursor", "pointer");
    $(".salsas").css("pointer-events", "inherit");
  } else {
    minInformation(auxToppingsA.className);
  }
  $(event).css("display", "none");
  $(auxToppingsB).css("display", "flex");
  auxToppingsB = event;
  img(event, "7");
}

function salsas(event) {
  if (auxSalsas != "") {
    minInformation(auxToppingsA.className);
  }
  $(event).css("display", "none");
  $(auxSalsas).css("display", "flex");
  auxSalsas = event;
  img(event, "8");
}

function minInformation(classInformation) {
  dataInformation = classInformation.split(" ");
  calorias -= parseInt(dataInformation[0], 10);
  alergenos -= parseInt(dataInformation[1], 10);
  superFoods -= parseInt(dataInformation[2], 10);
  grasas -= parseInt(dataInformation[3], 10);
}
function sumInformation(classInformation, id) {
  dataInformation = classInformation.split(" ");
  calorias += parseInt(dataInformation[0], 10);
  alergenos += parseInt(dataInformation[1], 10);
  superFoods += parseInt(dataInformation[2], 10);
  grasas += parseInt(dataInformation[3], 10);
  nameClase = dataInformation[4];

  $("#container__information--calorias").text("-");
  $("#container__information--alergenos").text("-");
  $("#container__information--superFoods").text("-");
  $("#container__information--grasas").text("-");
  let name = $("#" + id + " .items__title").text();
  $(".title__card--" + nameClase).text(name);
}

function img(event, zIndex) {
  sumInformation(event.className, event.id);
  $("#container__" + nameClase)
    .find("img")
    .remove();
  var image = new Image();
  var src = urlBowl + "/" + nameClase + "/" + event.id + ".png";
  image.src = src;
  image.id = event.id;
  image.alt = event.id;
  image.style = "z-index:" + zIndex + ";";
  document.getElementById("container__" + nameClase).append(image);
}
