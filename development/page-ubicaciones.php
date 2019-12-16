<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="about-banner" >
    <img src="<?php the_post_thumbnail_url()?>" alt="">
  <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title about-banner__title__space">
        <h3>Ubicaciones</h3>
      </div>
    </div>
  </div>
  <div class="main-ubications">
    <div class="container">
      <div class="main-ubications__content">
        <div class="main-ubications__item">
          <select class="form-control select-ubication" name="ubications" id="ubications">
            <option value="bogota">Bogotá</option>
            <option value="medellin">Medellín</option>
            <option value="barranquilla">Barranquilla</option>
          </select>
          <!--bogota-->
          
            <div class="div-padre js-ubications" id="bogota">
              <div class="main-content-fix" >
                <a class="first-icons link-ubication link-ubication--border" onclick="scroll_top()">
                  <!--<i class="fa fa-caret-up"></i>-->
                </a>
                <div aria-labelledby="headingOne" class="js-scroll collapse show" data-parent="#accordion" id="collapseOne" style="height: 300px;overflow-y: scroll;">
                  <div class="card-body">
                    <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                      <a aria-controls="poke-81" aria-selected="true" class="active link-ubication" data-toggle="pill" href="#poke-81" id="poke-81-tab" role="tab">POKE 81</a>
                      <a aria-controls="v-poke-zona-g" aria-selected="false" class="link-ubication" data-toggle="pill" href="#v-poke-zona-g" id="v-poke-zona-g-tab" role="tab">POKE  ZONA G</a>
                      <a aria-controls="poke-usaquen" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-usaquen" id="poke-usaquen-tab" role="tab">POKE USAQUEN</a>
                      <a aria-controls="poke-chia" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-chia" id="poke-chia-tab" role="tab">POKE CHÍA</a>
                      <a aria-controls="poke-city-u" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-city-u" id="poke-city-u-tab" role="tab">POKE CITY U</a>
                      <a aria-controls="poke-78" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-78" id="poke-78-tab" role="tab">POKE 78</a>
                      <a aria-controls="poke-aeropuerto" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-aeropuerto" id="poke-aeropuerto-tab" role="tab">POKE AEROPUERTO </a>
                      <a aria-controls="poke-centro-internacional" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-centro-internacional" id="poke-centro-internacional-tab" role="tab">POKE CENTRO INTERNACIONAL</a>
                    </div>
                  </div>
                </div>
                <a class="last-icons link-ubication link-ubication--border" onclick="scroll_bottom()">
                  <i class=""></i>
                </a>
              </div>
            </div>
          <!--End bogota-->

          <!--Medellín-->
            <div class="div-padre js-ubications js-displayNone" id="medellin">
              <div class="main-content-fix" >
                <a class="first-icons link-ubication link-ubication--border" onclick="scroll_top()">
                  <!--<i class="fa fa-caret-up"></i>-->
                </a>
                <div aria-labelledby="headingOne" class="js-scroll collapse show" data-parent="#accordion" id="collapseOne">
                <div class="card-body">
                    <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                    <a aria-controls="poke-viva-emvigado" aria-selected="true" class=" active link-ubication" data-toggle="pill" href="#poke-viva-emvigado" id="poke-viva-emvigado-tab" role="tab">POKE VIVA ENVIGADO</a>
                    </div>
                  </div>
                  </div>
                </div>
                <a class="last-icons link-ubication link-ubication--border" onclick="scroll_bottom()">
                <!--   <i class="fa fa-caret-down a-1"></i> -->
                </a>
              </div>
          <!--End Medellín-->

           <!--barranquilla-->
           <div class="div-padre js-ubications js-displayNone" id="barranquilla">
              <div class="main-content-fix" >
                <a class="first-icons link-ubication link-ubication--border" onclick="scroll_top()">
                  <!-- <i class="fa fa-caret-up"></i> -->
                </a>
                <div aria-labelledby="headingOne" class="js-scroll collapse show" data-parent="#accordion" id="collapseOne">
                <div class="card-body">
                    <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                    <a aria-controls="poke-mall-plaza" aria-selected="true" class=" link-ubication active " data-toggle="pill" href="#poke-mall-plaza" id="poke-mall-plaza-tab" role="tab">POKE MALL PLAZA</a>
                    </div>
                  </div>
                  </div>
                </div>
                <a class="last-icons link-ubication link-ubication--border" onclick="scroll_bottom()">
                 <!--  <i class="fa fa-caret-down a-1"></i> -->
                </a>
              </div>
          <!--End barranquilla-->

        </div>  
        <!--modal bogotá-->
          <div class="main-ubications__item js-ubications" id="modal-bogota">
            <div class="tab-content" id="v-pills-tabContent">
              <div aria-labelledby="poke-81-tab" class="tab-pane fade show active" id="poke-81" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE 81</li>
                      <li>CALLE 81 #  8-35</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031) 2665451</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.610234187451!2d-74.05323778457294!3d4.663380996612569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a60f925b217%3A0x7f95aea92dd37805!2sPoke%20Calle%2081!5e0!3m2!1ses!2sco!4v1576169077444!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div aria-labelledby="v-poke-zona-g-tab" class="tab-pane fade" id="v-poke-zona-g" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE  ZONA G</li>
                      <li>CALLE  69 A #  6- 37</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031) 6019697</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6753055978215!2d-74.0585167845731!3d4.651873096620841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a426ca84bc5%3A0x389ba1a2c993adea!2sPoke%20Rosales!5e0!3m2!1ses!2sco!4v1576169464550!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div aria-labelledby="poke-usaquen-tab" class="tab-pane fade" id="poke-usaquen" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE USAQUEN</li>
                      <li>CALLE  120 A # 5 - 61</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031) 7392278</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.422381243184!2d-74.031743684573!3d4.6964449965887445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f91ac15d4e73f%3A0xf47574c92dc45476!2sPoke%20Usaquen!5e0!3m2!1ses!2sco!4v1576169656357!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div aria-labelledby="poke-chia-tab" class="tab-pane fade" id="poke-chia" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE CHÍA</li>
                      <li>K  7 VIA CAJICA - CHIA SAN ROQUE - LOCAL 119</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031) 8337275</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44975.36590285985!2d-74.03947845199896!3d4.889639306399879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4077e10ec566a5%3A0xce2d33970537e9d9!2sPoke%20Cajic%C3%A1!5e0!3m2!1ses!2sco!4v1576169927142!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div aria-labelledby="poke-city-u-tab1" class="tab-pane fade show" id="poke-city-u" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE CITY U</li>
                      <li>CALLE 19 # 2 A 10 CITY U - LOCAL 208</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031) 7447281</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948280608498!2d-74.0690700845733!3d4.603284596655847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99785d6b068b%3A0x8dd39a9866995e35!2sPoke%20City%20U!5e0!3m2!1ses!2sco!4v1576170576669!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div aria-labelledby="poke-78-tab1" class="tab-pane fade show" id="poke-78" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE 78</li>
                      <li>CRA 12 A # 78 40 LOCAL  3</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031) 7434304</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2811.8850201657365!2d-74.05490492453251!3d4.664140955803561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b2b360f8399%3A0x4af482f5999219d3!2sPoke%20Calle%2078!5e0!3m2!1ses!2sco!4v1576170774820!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div aria-labelledby="poke-aeropuerto-tab1" class="tab-pane fade show" id="poke-aeropuerto" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE AEROPUERTO</li>
                      <li>AC 24 # 124 A - 80</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031)</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948280608498!2d-74.0690700845733!3d4.603284596655847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99785d6b068b%3A0x8dd39a9866995e35!2sPoke%20City%20U!5e0!3m2!1ses!2sco!4v1576170576669!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div aria-labelledby="poke-centro-internacional-tab1" class="tab-pane fade show" id="poke-centro-internacional" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE CENTRO INTERNACIONAL</li>
                      <li>CRA 13 # 29 - 31 LOCAL 201</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031)</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948280608498!2d-74.0690700845733!3d4.603284596655847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99785d6b068b%3A0x8dd39a9866995e35!2sPoke%20City%20U!5e0!3m2!1ses!2sco!4v1576170576669!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!--end modal bogotá-->

         <!--modal medellin-->
         <div class="main-ubications__item js-ubications js-displayNone" id="modal-medellin">
            <div class="tab-content" id="v-pills-tabContent">
              <div aria-labelledby="poke-viva-emvigado-tab1" class="tab-pane fade show active" id="poke-viva-emvigado" role="tabpanel">
                <div class="main-ubications__img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li>POKE VIVA EMVIGADO</li>
                      <li>CRA 48 # 32 B SUR - 132 C.C VIVA LOCAL 333</li>
                      <li>Horario</li>
                      <li>12:00 PM - 9:00 PM</li>
                      <li>Teléfono</li>
                      <li>(031)</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948280608498!2d-74.0690700845733!3d4.603284596655847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99785d6b068b%3A0x8dd39a9866995e35!2sPoke%20City%20U!5e0!3m2!1ses!2sco!4v1576170576669!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!--end modal medellin-->

        <!--Modal barranquilla-->
        <div class="main-ubications__item js-ubications js-displayNone" id="modal-barranquilla">
          <div class="main-ubications__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/_DSC0583.png">
          </div>
          <div class="main-ubications__box">
            <div class="main-ubications__boxitem">
              <ul class="main-ubications__ul">
                <li>POKE MALL PLAZA</li>
                <li>CARRERA  55 # 999 - 51 C.C. MALL PLAZA LOCAL A - 4003 - 01</li>
                <li>Horario</li>
                <li>12:00 PM - 9:00 PM</li>
                <li>Teléfono</li>
                <li>(031)</li>
              </ul>
            </div>
          <div class="main-ubications__boxitem">
            <div class="main-ubications__boxmap">
              <div class="main-ubications__img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948280608498!2d-74.0690700845733!3d4.603284596655847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99785d6b068b%3A0x8dd39a9866995e35!2sPoke%20City%20U!5e0!3m2!1ses!2sco!4v1576170576669!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end Modal barranquilla-->

         

         
         
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>

  <style>
  .js-displayNone{
    display:none;
  }
  </style>
<?php get_footer(); ?> 
