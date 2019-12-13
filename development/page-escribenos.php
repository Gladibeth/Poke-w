<?php get_header(); ?>
<div class="main-work">
    <div class="container">
      <div class="main-ambiental ">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--amb main-general__description--work">
            <p>¡CUÉNTANOS TU EXPERIENCIA!</p>
          </div>
          <div class="main-experience">
            <form>
              <label>Datos personales</label>
              <div class="form-group">
                <input class="form-control" id="formGroupExampleInput" placeholder="Nombre y apellido" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" type="tel">
              </div>
              <div class="form-group">
                <input class="form-control" id="formGroupExampleInput2" placeholder="Correo" type="text">
              </div>
              <div class="form-group">
                <label class="label-cap">¿Visitaste alguno de nuestros locales, pediste para llevar, o pediste a través de Rappi?</label>
                <div class="col-md-4 p-0">
                  <select class="form-control" id="inputState">
                      <option selected="selected">Visité alguno de los locales</option>
                      <option>...</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="label-cap">¿En dónde nos visitaste? Si pediste por Rappi, indícanos desde qué sede salió tu pedido.*</label>
                <div class="col-md-4 p-0">
                  <select class="form-control" id="inputState">
                      <option selected="selected">Poke 81</option>
                      <option>...</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="label-cap">¿Cuándo fue la última vez que comiste uno de nuestros productos?</label>
                <div class="col-md-4 p-0">
                  <select class="form-control" id="inputState">
                      <option selected="selected">La semana pasada</option>
                      <option>...</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="label-cap">¿Cuándo fue la última vez que comiste uno de nuestros productos?</label>
                <p class="format">Siendo 10 excelente y 1 malo.</p>
                <div class="content-form__radio">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio">1</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio2" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio2">2</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio3" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio3">3</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio4" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio4">4</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio5" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio5">5</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio6" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio6">6</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio7" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio7">7</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio8" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio8">8</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio9" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio9">9</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" id="customRadio10" name="example" type="radio" value="customEx">
                    <label class="custom-control-label" for="customRadio10">10</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea placeholder="Mensaje" rows="8"></textarea>
              </div>
              <div class="custom-control custom-checkbox my-1 mr-sm-2">
                <input class="custom-control-input" id="customControlInline" type="checkbox">
                <label class="custom-control-label" for="customControlInline">
                    Acepto
                  </label>
                <a class="text-link" href="#">
                    <strong>
                      política de privacidad
                    </strong>
                  </a> y
                <a class="text-link" href="#">
                    <strong>
                      términos y condiciones
                    </strong>
                  </a>
              </div>
              <div class="custom-control custom-checkbox my-1 mr-sm-2">
                <input class="custom-control-input" id="customControlInline2" type="checkbox">
                <label class="custom-control-label" for="customControlInline2">
                    Deseo recibir más información sobre nuestros establecimientos.
                  </label>
              </div>
              <div class="btn-form__center">
                <a class="btn_custom btn--large btn--filled btn--filled--border" href="#contact">
                    Enviar
                  </a>
              </div>
            </form>
            <div class="logo-experience">
              <div class="main-experience__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Experiencia/V_Black on white.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?> 