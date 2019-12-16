<?php get_header(); ?>
<div class="main-work">
    <div class="container">
      <div class="main-ambiental ">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--amb main-general__description--work main__form">
            <p>¡ESCRÍBENOS!</p>
          </div>
          <div class="main-experience">
            <?php echo do_shortcode('[contact-form-7 id="196" title="Escribenos"]'); ?>
            <div class="logo-experience">
              <div class="main-experience__img">
                <img src="https://sisenoragencia.com/poke/wp-content/themes/theme/assets/img/Experiencia/logo-poke-experiencia.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?> 

<script>
//recibir-Catalogo
var truecheck = document.getElementById('aceptCheckbox');
truecheck.addEventListener("change", validatruecheck, false);
function validatruecheck(){
  let recibirCatalogo = truecheck.checked;
  if(recibirCatalogo){
    $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', true);
  }else{
    $("input[value='Acepto_politica_de_privacidad_y_terminos_y_condiciones']").prop('checked', false);
  }
}
</script>