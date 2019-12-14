<footer class="main-footer">
    <div class="container">
      <div class="main-footer__content">
        <div class="main-footer__item">
          <div class="main-footer__box">
            <div class="main-footer__logo">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Footer/logo-poke-footer.png">
            </div>
            <div class="main-footer__boxsmall">
              <div class="main-footer__boxitem">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/Endeavor.svg">
              </div>
              <div class="main-footer__boxitem">
                <div class="main-footer__text">
                  <p>Part of Foodie Group S.A.S <br> & Endeavor company</p>
                </div>
              </div>
            </div>
            <div class="main-footer__address">
              <a href="#">
                <p>Cl. 69a #No.6-37 - Bogotá, Colombia</p>
              </a>
            </div>
          </div>
        </div>
        <div class="main-footer__item">
          <div class="main-footer__box">
            <div class="main-footer__title">
              <p>mas informacion</p>
            </div>
            <ul>
              <li>
                <a href="<?php echo bloginfo('url').'/escribenos';?>">
                    ESCRÍBENOS
                  </a>
              </li>
              <li>
                <a href="<?php echo bloginfo('url').'/trabaja-con-nosotros';?>">
                    TRABAJA CON NOSOTROS
                  </a>
              </li>
              <li>
                <a href="<?php echo bloginfo('url').'/trabaja-con-nosotros';?>">
                  CUÉNTANOS TU EXPERIENCIA
                  </a>
              </li>
              <li>
                <a href="<?php echo bloginfo('url').'/trabaja-con-nosotros';?>">
                  TERMINOS Y CONDICIONES
                  </a>
              </li>
              <li>
                <a href="<?php echo bloginfo('url').'/trabaja-con-nosotros';?>">
                  POLITICA DE PRIVACIDAD
                  </a>
              </li>
              <!-- / %li -->
              <!-- /   %a{ :href=>"#"} -->
              <!-- /     CUÉNTANOS TU EXPERIENCIA -->
              <!-- / %li -->
              <!-- /   %a{ :href=>"#"} -->
              <!-- /     TERMINOS Y CONDICIONES -->
              <!-- / %li -->
              <!-- /   %a{ :href=>"#"} -->
              <!-- /     POLITICA DE PRIVACIDAD -->
            </ul>
          </div>
        </div>
        <div class="main-footer__item">
          <div class="main-footer__box">
            <div class="main-footer__title">
              <p>NEWSLETTER</p>
            </div>
            <div class="main-footer__subscribe">
              <form>
                <div class="form-group">
                  <input class="input-footer form-control" id="formGroupExampleInput" placeholder="Correo electronico" type="email">
                </div>
                <div class="main-footer-grid">
                  <div class="main-footer__btn">
                    <button class="btn_custom btn--medium btn--filled-footer">
                        Enviar
                      </button>
                  </div>
                  <div class="message">
                    <p>
                      Acepto
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
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="main-footer__item">
          <div class="main-footer__box">
            <div class="main-footer__redes">
              <a href="https://www.facebook.com/pokecolombia.co" target="_blank">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/f_logo_RGB-White_1024_1024.svg">
                </a>
              <a href="https://www.instagram.com/poke.colombia/?hl=es-la" target="_blank">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/glyph-logo_IG-01.svg">
                </a>
              <a href="https://www.facebook.com/pokecolombia.co" target="_blank">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/linked in logo circulo.svg">
                </a>
              <a href="https://www.facebook.com/pokecolombia.co" target="_blank">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/Twitter_Logo_WhiteOnImage.svg">
                </a>
            </div>
            <div class="main-footer__email">
              <a href="mailto:servicios@pokecolombia.co">
                <p>servicio@pokecolombia.co</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-footer__copy">
      <p>Poke colombia, 2019 - Todos los derechos Reservados</p>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
</html>