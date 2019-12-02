<?php get_header(); ?>
  <div class="about-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/fondo chispiado + morado.png');">
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title">
        <h3>ENTRADAS</h3>
      </div>
    </div>
  </div>
  <div class="main-entries">
    <div class="container">
      <div class="main-entries__nav">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs" data-toggle="pill" href="#v-pills-home" id="pills-home-tab" role="tab">entradas</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs active" data-toggle="pill" href="#v-pills-profile" id="pills-profile-tab" role="tab">poke bowls</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a aria-controls="v-pills-contact" aria-selected="true" class="nav-link--tabs" data-toggle="pill" href="#v-pills-contact" id="pills-contact-tab" role="tab">juice bar</a>
          </li>
        </ul>
        <div class="btn__tabs">
          <a class="btn-btn_custom btn--large btn--filled btn--filled-gray" href="createpokebolw.html">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/Bowl.svg">
              <span class="line"></span>
              ARMA TU BOWL
            </a>
        </div>
      </div>
      <hr class="line-gray line-gray--entries">
      <div class="tab-content">
        <div aria-labelledby="pills-home-tab" class="tab-pane fade" id="v-pills-home" role="tabpanel">
          <div class="main-entries__content">
            <a class="main-entries__item" data-target=".entries-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/ceviche.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>ceviche</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".entries-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Menu_entradas/tartar.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>tartar</h3>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="tab-pane fade show active" id="v-pills-profile">
          <div class="main-pokebowls__content">
            <a class="main-entries__item" data-target=".pokebolws-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_bowls/fondo amarillo.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>shaka</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".pokebolws-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_bowls/fondo naranja 1.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>pulled pork</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".pokebolws-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_bowls/fondo piel.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>alii</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".pokebolws-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_bowls/fondo azul agua marina.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>luau</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".pokebolws-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_bowls/fondo azul.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>mahalo</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".pokebolws-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Poke_bowls/fondo amarillo pollo.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>palenq</h3>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-contact">
          <div class="main-pokebowls__content">
            <a class="main-entries__item" data-target=".juicebar-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Juice_bar/limonada.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>limonada</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".juicebar-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Juice_bar/jugo mandarina.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>mandarina</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".juicebar-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Juice_bar/Carrott Blast.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>carrot blast</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".juicebar-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Juice_bar/fresh beet.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>fresh beet</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".juicebar-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Juice_bar/Green Fix.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>Green Fix</h3>
                </div>
              </div>
            </a>
            <a class="main-entries__item" data-target=".juicebar-modals" data-toggle="modal" href="">
              <div class="main-entries__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Juice_bar/Lulada.png">
              </div>
              <div class="main-entries__text">
                <div class="main-entries__title">
                  <h3>Lulada</h3>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?> 