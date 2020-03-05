<?php get_header(); ?>
<?php
$desktop = false;
$mobile = false;
$tablet_browser = 0;
$mobile_browser = 0;
$body_class = 'desktop';
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
    $body_class = "tablet";
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
    $body_class = "mobile";
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
    $body_class = "mobile";
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
if ($tablet_browser > 0) {
  $mobile = true;
}
else if ($mobile_browser > 0) {
$mobile = true;
}
else {
  $desktop = true;
}  

  if ($mobile){
    $link_rappi = 'https://bnc.lt/scMl/pMH3RUMe61';
  }else{
    $link_rappi = 'https://www.rappi.com.co/restaurantes/poke-cocina-0';
  }
?> 
<div itemscope itemtype = "http://schema.org/Restaurant" >
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="about-banner" >
    <?php 
    $img_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
  ?>
  <?php if($mobile):?>
    <img itemprop = "img" src="<?php echo get_field('banner_mobile'); ?>" alt="<?php echo $alt; ?>">
    <?php else:?>
      <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>"><img itemprop="image" src="<?php the_post_thumbnail_url()?>" alt="<?php echo $alt; ?>">
    <?php endif;?>  
  <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title about-banner__title__space">
        <?php the_content();?>
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
                <!-- <a class="first-icons link-ubication link-ubication--border" onclick="scroll_top()">
                  <i class="fa fa-caret-up"></i>
                </a> -->
                <div aria-labelledby="headingOne" class="js-scroll collapse show" data-parent="#accordion" id="collapseOne" style="height: 300px;overflow-y: scroll;">
                  <div class="card-body">
                    <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                      <a itemprop="name" aria-controls="poke-81" aria-selected="true" class="active link-ubication" data-toggle="pill" href="#poke-81" id="poke-81-tab" role="tab">POKE 81</a>
                      <a itemprop="name" aria-controls="v-poke-zona-g" aria-selected="false" class="link-ubication" data-toggle="pill" href="#v-poke-zona-g" id="v-poke-zona-g-tab" role="tab">POKE  ZONA G</a>
                      <a itemprop="name" aria-controls="poke-usaquen" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-usaquen" id="poke-usaquen-tab" role="tab">POKE USAQUEN</a>
                      <a itemprop="name" aria-controls="poke-chia" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-chia" id="poke-chia-tab" role="tab">POKE CHÍA</a>
                      <a itemprop="name" aria-controls="poke-city-u" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-city-u" id="poke-city-u-tab" role="tab">POKE CITY U</a>
                      <a itemprop="name" aria-controls="poke-parque-93" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-parque-93" id="poke-parque-93-tab" role="tab">PARQUE 93</a>
                      <a itemprop="name" aria-controls="poke-78" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-78" id="poke-78-tab" role="tab">POKE 78</a>
                      <a itemprop="name" aria-controls="poke-aeropuerto" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-aeropuerto" id="poke-aeropuerto-tab" role="tab">POKE AEROPUERTO </a>
                      <!-- <a itemprop="name" aria-controls="poke-centro-internacional" aria-selected="false" class="link-ubication" data-toggle="pill" href="#poke-centro-internacional" id="poke-centro-internacional-tab" role="tab">POKE CENTRO INTERNACIONAL</a> -->
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
                <!-- <a class="first-icons link-ubication link-ubication--border" onclick="scroll_top()">
                  <i class="fa fa-caret-up"></i>
                </a> -->
                <div aria-labelledby="headingOne" class="js-scroll collapse show" data-parent="#accordion" id="collapseOne">
                <div class="card-body">
                    <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                    <a aria-controls="poke-viva-envigado" aria-selected="true" class=" active link-ubication" data-toggle="pill" href="#poke-viva-envigado" id="poke-viva-envigado-tab" role="tab">POKE VIVA ENVIGADO</a>
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
                <!--<a class="first-icons link-ubication link-ubication--border" onclick="scroll_top()">
                   <i class="fa fa-caret-up"></i> 
                </a>-->
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
                  <img itemprop="image" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-81.jpg" alt="Poke 81">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE 81</li>
                      <li itemprop = "streetAddress">Calle 81 # 8 - 35</li>
                      <li>Horario</li>
                      <li><ul class="horario">
                        <li itemprop="openingHours"> L-J: 12:00pm - 9:00pm</li>
                        <li itemprop="openingHours"> V: 12:00pm - 10:00pm</li>
                        <li itemprop="openingHours"> S: 12:00pm - 9:00pm</li>
                        <li itemprop="openingHours"> D: 12:00pm - 5:00pm</li>
                      </ul></li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 2665451</li>
                      <li>Celular</li>
                      <li itemprop="telephone">31964554305</li>
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
                  <img itemprop="image" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-zona-g.jpg" alt="Poke zona g">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE  ZONA G</li>
                      <li itemprop = "streetAddress">CALLE  69 A #  6- 37</li>
                      <li>Celular</li>
                      <li><ul class="horario">
                        <li itemprop="openingHours"> L-J: 12:00pm - 9:00pm</li>
                        <li itemprop="openingHours"> V-S: 1200:pm - 10:00pm</li>
                        <li itemprop="openingHours"> D: 12:00pm - 5:00pm</li>
                      </ul></li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 6019697</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3196454299</li>
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
                  <img itemprop="image" alt="Poke  usaquen" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-usaquen.jpg">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE USAQUEN</li>
                      <li itemprop = "streetAddress">CALLE  120 A # 5 - 61</li>
                      <li>Horario</li>
                      <li><ul class="horario">
                        <li itemprop="openingHours">L-J: 12:00pm - 9:00pm</li>
                        <li itemprop="openingHours">V-S: 12:00pm - 10:00pm</li>
                        <li itemprop="openingHours">D: 12:00pm - 8:00pm</li>
                      </ul></li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 7392278</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3197785780</li>
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
                  <img itemprop="image" alt="Poke chia" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-chia.jpg">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE Cajicá</li>
                      <li itemprop = "streetAddress">K  7 VIA CAJICA - CHIA SAN ROQUE - LOCAL 119-1</li>
                      <li>Horario</li>
                      <li>
                        <ul class="horario">
                          <li itemprop="openingHours">L-J: 12:00pm - 8:00pm</li>
                          <li itemprop="openingHours">V-S: 12:00pm - 10:00pm</li>
                          <li itemprop="openingHours">D: 12:00pm - 8:00pm</li>
                        </ul>
                      </li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 8837275</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3196368166</li>
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
                  <img itemprop="image" alt="Poke city u" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-city-u.jpg">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE CITY U</li>
                      <li itemprop = "streetAddress">CALLE 19 # 2 A 10 CITY U - LOCAL 208</li>
                      <li>Horario</li>
                      <li><ul class="horario">
                        <li itemprop="openingHours">L-S: 11:00am - 7:00pm</li>
                        <li itemprop="openingHours">D-F: 12:00pm - 5:00pm</li>
                      </ul></li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 7447281</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3196368190</li>
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

              <div aria-labelledby="poke-parque-93-tab1" class="tab-pane fade show" id="poke-parque-93" role="tabpanel">
                <div class="main-ubications__img">
                  <img itemprop="image" alt="Poke city u" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-93.jpg">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE PARQUE 93</li>
                      <li itemprop = "streetAddress">Calle 93a # 12 -35 Edificio Salvio L: S3</li>
                      <li>Horario</li>
                      <li>
                        <ul class="horario">
                          <li itemprop="openingHours">L-J: 11:30am - 9:00pm</li>
                          <li itemprop="openingHours">V-S: 11:30am - 10:00pm</li>
                          <li itemprop="openingHours">D: 11:30am - 8:00pm</li>
                        </ul>
                      </li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 7457584</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3197384586</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.53133586658!2d-74.0524516852377!3d4.677296296602543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b3f4c5bdd9b%3A0xa28e3f48b524c391!2sPoke%20Parque%20de%20la%2093!5e0!3m2!1ses!2sve!4v1577230297203!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div aria-labelledby="poke-78-tab1" class="tab-pane fade show" id="poke-78" role="tabpanel">
                <div class="main-ubications__img">
                  <img itemprop="image" alt="Poke 78" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-78.jpg">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE CALLE 78</li>
                      <li itemprop = "streetAddress">CRA 12 A # 78 40 LOCAL 3</li>
                      <li>Horario</li>
                      <li>
                        <ul class="horario">
                          <li itemprop="openingHours">L-V: 12:00pm - 7:00pm</li>
                          <li itemprop="openingHours">S: 12:00pm - 05:00pm</li>
                          <li itemprop="openingHours">D: No abrimos</li>
                        </ul>
                      </li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 7434304</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3024228669</li>
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
                  <img itemprop="image" alt="Poke comming soon" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-aeropuerto.jpg">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                  <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE AEROPUERTO</li>
                      <li itemprop = "streetAddress">Muelle Nacional puertas de embarque 71 - 89 </li>
                      <li>Horario</li>
                      <li>
                        <ul class="horario">
                          <li itemprop="openingHours">L-J: 07:00am - 9:00pm</li>
                          <li itemprop="openingHours">V-S: 07:00am - 10:00pm</li>
                          <li itemprop="openingHours">D: 07:00am - 9:00pm</li>
                        </ul>
                      </li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(031) 7434304</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3024228669</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948280608498!2d-74.0690700845733!3d4.603284596655847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99785d6b068b%3A0x8dd39a9866995e35!2sPoke%20City%20U!5e0!3m2!1ses!2sco!4v1576170576669!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div aria-labelledby="poke-centro-internacional-tab1" class="tab-pane fade show" id="poke-centro-internacional" role="tabpanel">
                <div class="main-ubications__img">
                  <img itemprop="image" alt="Poke comming soon" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/coming-soon.png">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE CENTRO INTERNACIONAL</li>
                      <li itemprop = "streetAddress">CRA 13 # 29 - 31 LOCAL 201</li>
                      <li>Horario</li>
                      <li itemprop="openingHours"><!-- 12:00 PM - 9:00 PM --></li>
                      <li>Celular</li>
                      <li><!-- (031) --></li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948280608498!2d-74.0690700845733!3d4.603284596655847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99785d6b068b%3A0x8dd39a9866995e35!2sPoke%20City%20U!5e0!3m2!1ses!2sco!4v1576170576669!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
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
              <div aria-labelledby="poke-viva-envigado-tab1" class="tab-pane fade show active" id="poke-viva-envigado" role="tabpanel">
                <div class="main-ubications__img">
                  <img itemprop="image" alt="Poke viva envigado" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-viva-envigado.jpg">
                </div>
                <div class="main-ubications__box">
                  <div class="main-ubications__boxitem">
                    <ul class="main-ubications__ul">
                      <li itemprop = "name">POKE VIVA ENVIGADO</li>
                      <li itemprop = "streetAddress">CC viva envigado L: 333 MDE</li>
                      <li>Horario</li>
                      <li>
                        <ul class="horario">
                          <li itemprop="openingHours">L-J: 12:00pm - 9:00pm</li>
                          <li itemprop="openingHours">V-S: 12:00pm - 10:00pm</li>
                          <li itemprop="openingHours">D: 12:00pm - 8:00pm</li>
                        </ul>
                      </li>
                      <li>Teléfono</li>
                      <li itemprop="telephone">(034) 4799067</li>
                      <li>Celular</li>
                      <li itemprop="telephone">3007015735</li>
                    </ul>
                  </div>
                  <div class="main-ubications__boxitem">
                    <div class="main-ubications__boxmap">
                      <div class="main-ubications__img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6538614032274!2d-75.5920962852349!3d6.177069628807301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4683c81ebbb499%3A0xb57dd42ecffd3eeb!2sPoke%20Viva%20Envigado!5e0!3m2!1ses!2sve!4v1577230468960!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
            <img itemprop="image" alt="Poke barranquilla" src="<?php echo get_template_directory_uri();?>/assets/img/Ubication/poke-barranquilla.jpg">
          </div>
          <div class="main-ubications__box">
            <div class="main-ubications__boxitem">
              <ul class="main-ubications__ul">
                <li itemprop = "name">POKE MALL PLAZA</li>
                <li itemprop = "streetAddress">CARRERA  55 # 99 - 51 C.C. MALL PLAZA LOCAL A - 4003 - 01</li>
                <li>Horario</li>
                <li>
                  <ul class="horario">
                    <li itemprop="openingHours">L-J: 12:00pm - 9:00pm</li>
                    <li itemprop="openingHours">V-S: 12:00pm - 10:00pm</li>
                    <li itemprop="openingHours">D: 12:00pm - 8:00pm</li>
                  </ul>
                </li>
                <li>Teléfono</li>
                <li itemprop="telephone">(035) 3117639</li>
                <li>Celular</li>
                <li itemprop="telephone">3045668029</li>
              </ul>
            </div>
          <div class="main-ubications__boxitem">
            <div class="main-ubications__boxmap">
              <div class="main-ubications__img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.289654419305!2d-74.83356918521828!3d11.016880757721804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42c4cd175908d%3A0x9b9bfcb63575d493!2sCentro%20Comercial%20Mallplaza%20Buenavista!5e0!3m2!1ses!2sve!4v1577230638552!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end Modal barranquilla--> 
         
      </div>
    </div>
  </div>
</div>
  <?php endwhile; endif; ?>
<?php get_footer(); ?> 
