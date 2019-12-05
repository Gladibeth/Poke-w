<?php get_header(); ?>
  <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="main-about main-about__mt" style="background-image: url('<?php the_post_thumbnail_url()?>');">
      <div class="mask"></div>
      <div class="container">
        <div class="main-why__content">
          <div class="main-why__item"></div>
          <div class="main-why__item main-why__item--event">
            <div class="main-general__title main-general__title--event">
              <?php the_content();?>
             <!--  <p class="format format--white">Déjanos tus datos, te llamaremos.</p> -->
            </div>
            <hr class="line-gray line--white">
            <form>
              <label class="label--white">Datos personales</label>
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
                  <label class="label--white" for="inputState">Fecha de nacimiento</label>
                  <input class="form-control date" placeholder="DD / MM / YYYY" type="text">
                </div>
                <div class="form-group col-md-4">
                  <input class="mt-4 form-control date" placeholder="HH:MM" type="text">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label--white" for="inputState">invitados</label>
                  <select class="form-control" id="inputState">
                      <option selected="selected">Adultos</option>
                      <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                  <label class="label--white" for="inputState"></label>
                  <select class="form-control" id="inputState">
                      <option selected="selected">Niños</option>
                      <option>...</option>
                    </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label--white" for="inputState">ubicacion</label>
                  <select class="form-control" id="inputState">
                      <option selected="selected">Ciudad</option>
                      <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                  <label class="label--white" for="inputState"></label>
                  <select class="form-control" id="inputState">
                      <option selected="selected">Dirección</option>
                      <option>...</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <textarea placeholder="Mensaje  (opcional)" rows="8"></textarea>
              </div>
              <div class="custom-control custom-checkbox my-1 mr-sm-2">
                <input class="custom-control-input" id="customControlInline" type="checkbox">
                <label class="custom-control-label label--white" for="customControlInline">
                    Acepto
                  </label>
                <a class="text-link text-link--white" href="#">
                    <strong>
                      política de privacidad
                    </strong>
                    y
                  </a>
                <a class="text-link text-link--white" href="#">
                    <strong>
                      términos y condiciones
                    </strong>
                  </a>
              </div>
              <div class="float-left">
                <a class="btn_custom btn--medium btn--filled" href="#">
                    Enviar
                  </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?> 
<?php get_footer(); ?> 