<?php get_header(); ?>
<div class="main-work main-about__mt">
    <div class="container">
      <div class="main-ambiental">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--amb main-general__description--work">
            <p>¡trabaja con nosotros!</p>
          </div>
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
            <div class="row">
              <div class="form-group col-md-4">
                <label for="inputState">Fecha de nacimiento</label>
                <input class="form-control date" placeholder="DD / MM / YYYY" type="text">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">ubicacion</label>
                <select class="form-control" id="inputState">
                    <option selected="selected">Ciudad</option>
                    <option>...</option>
                  </select>
              </div>
            </div>
            <div class="form-group input-file">
              <p class="label" for="inputState">hoja de vida</p>
              <label class="sr-only" for="file">SELECCIONA ARCHIVO</label>
              <input id="file" type="file">
              <p class="format">(Formatos: *.doc(x), *.rtf, *.pdf)</p>
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
            <div class="btn-form__center">
              <a class="btn_custom btn--medium btn--filled btn--filled--border" href="#contact">
                  Enviar
                </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?> 