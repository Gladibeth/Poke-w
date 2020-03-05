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
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
<div id="nosotros" itemscope itemtype = "http://schema.org/Restaurant" >  
<div class="about-banner">
  <?php 
    $img_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
  ?>
  <?php if($mobile):?>
    <img itemprop = "img" src="<?php echo get_field('banner_mobile'); ?>" alt="<?php echo $alt; ?>">
  <?php else:?>
    <img itemprop = "img" srcset="<?php echo get_field('banner_mobile'); ?> 1024w, <?php echo the_post_thumbnail_url(); ?> 1920w," alt="<?php echo $alt; ?>">
  <?php endif;?>
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title">
        <h1><?php the_title();?></h1>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <div class="main-entries">
    <div class="container">
      <div class="main-entries__nav">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item nav-item--tabs">
            <a class="nav-link--tabs" href="<?php echo bloginfo('url').'/menu#entradas';?>" id="pills-home-tab">entradas</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a class="nav-link--tabs" href="<?php echo bloginfo('url').'/menu#pokeBowl';?>" id="pills-profile-tab">poke bowls</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a class="nav-link--tabs" href="<?php echo bloginfo('url').'/menu#juiceBar';?>" id="pills-contact-tab">juice bar</a>
          </li>
        </ul>
        <!-- <div class="btn__tabs">
          <a class="btn-btn_custom btn--large btn--filled btn--filled-gray active" href="">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg">
              <span class="line"></span>
              ARMA TU BOWL
            </a>
        </div> -->
      </div>
      <hr class="line-gray line-gray--entries">
    
    <div onclick="openTabs(event, 'Arma')" style="position:aboslute;top:0;bottom:0;right:0;left:0;z-index:-1;"></div>
    <div id="Arma" class="tabcontent tabcontent--not ">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-creategeneral__content ">
        <div class="tab main-creategeneral__item main-creategeneral__item--grid">
            
            <div onclick="openTabs(event, 'tamaño')" class=" tablinks tamano main-creategeneral__subitem" href="">
              <div class="main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                  <p class="" >Tamaño</p>
                  
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--tamano"></div></div>
            </div>
            <div onclick="openTabs(event, 'base')" class="tablinks bases main-creategeneral__subitem" href="">
              <div class=" main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                <p class="" >Base</p>
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--bases"></div></div>
            </div>
            <div onclick="openTabs(event, 'proteinas')" class="tablinks proteinas main-creategeneral__subitem" href="">
              <div class="  main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                  <p class="" >Proteínas</p>   
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--proteinas"></div></div>
            </div>
            <div onclick="openTabs(event, 'mixins-a')" class=" tablinks mixins-a main-creategeneral__subitem" href="">
              <div class=" main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                  <p class="tablinks" >Mix-In 1</p> 
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--mixins-a"></div></div>
            </div>
            <div onclick="openTabs(event, 'mixins-b')" class=" tablinks mixins-b main-creategeneral__subitem" href="">
              <div class=" main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                  <p class="" >Mix-In 2</p>
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--mixins-b"></div></div>
            </div>
            <div onclick="openTabs(event, 'toppings-a')" class="tablinks toppings-a main-creategeneral__subitem" href="">
              <div class="  main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                  <p class="" >Topping 1</p>
                  
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--toppings-a"></div></div>
            </div>
            <div onclick="openTabs(event, 'toppings-b')" class="tablinks toppings-b  main-creategeneral__subitem" href="">
              <div class=" main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                  <p class="" >Topping 2</p>
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--toppings-b"></div></div>
            </div>
            <div onclick="openTabs(event, 'salsas')" class="tablinks salsas  main-creategeneral__subitem" href="">
              <div class="main-createpoke__header main-createpoke__header--full">
                <div class="main-createpoke__text">
                  <p class="" >Salsa</p>
                </div>
              </div>
              <div class="main-createpoke__boxbody"><div class="title__card--salsas"></div></div>
            </div>
          </div>
          <div class="main-creategeneral__item">
            <div class="main-creategeneral__box">
              <div class="main-creategeneral__img">
                <div id="container__logo--poke">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/container/logo-poke.png" alt=""> 
                </div>
                <div id="container__tamano"></div>
                  <div id="container__bases"></div>
                  <div id="container__proteinas"></div>
                  <div id="container__mixins-a"></div>
                  <div id="container__mixins-b"></div>
                  <div id="container__toppings-a"></div>
                  <div id="container__toppings-b"></div>
                  <div id="container__salsas"></div>
                  
              </div>
            </div>
            <div id="container__information">
              <div>
                <span id="container__information--calorias" class="badge badge-secondary">-</span>
                <p>Calorías</p>
              </div>
              <div >
                <span id="container__information--alergenos" class="badge badge-secondary">-</span>
                <p>Alergénos</p>
              </div>
              <div >
                <span id="container__information--superFoods" class="badge badge-secondary">-</span>
                <p>Superfoods</p>
              </div>
              <div >
                <span id="container__information--grasas" class="badge badge-secondary">-</span>
                <p>Grasas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TAMAÑO -->
    <div id="tamaño" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>1. Tamaño</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="tamano bowl main-createpoke__boxbody">
              <div class="main-grid__content tamano bowl">
                <div class="1.6 1 1 1 tamano " id="pequeno" onclick="tamano(this),openTabs(event, 'Arma')" style="z-index:1;">
                  <div class="tamano-flex">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/tamano/pequeno.png" alt="">
                    <p class="items__title">Mediano</p>
                  </div>
                </div> 
                <div class="2 2 2 2 tamano " id="grande" onclick="tamano(this),openTabs(event, 'Arma')" style="z-index:1;">
                  <div class="tamano-flex">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/tamano/grande.png" alt="">
                    <p class="items__title">Grande</p>
                  </div>
                </div> 
              </div>
        
            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- BASES -->
    <div id="base" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>2. Base</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="main-createpoke__boxgrid bases bowl">
              <div class="1.6 1 1 1 bases" id="arroz-de-coco" style="z-index:1;" >
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/bases/arroz-de-coco.png" alt="">  
                <p class="items__title">Arroz de coco</p>
              </div> 
              <div class="2 2 2 2 bases" id="arroz-de-coliflor" style="z-index:1;" >
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/bases/arroz-de-coliflor.png" alt=""> 
                <p class="items__title">Arroz de coliflor</p>
              
              </div> 
              <div class="3 3 3 3 bases" id="arroz-de-sushi" style="z-index:1;" >
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/bases/arroz-de-sushi.png" alt=""> 
                <p class="items__title">Arroz de sushi</p>
              </div> 

              <div class="4 4 4 4 bases" id="arroz-integral" style="z-index:1;" >
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/bases/arroz-integral.png" alt=""> 
                <p class="items__title">Arroz integral</p>
              </div> 

              <div class="5 5 5 5 bases" id="mix-greens" style="z-index:1;" >
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/bases/mix-greens.png" alt=""> 
                <p class="items__title">Mix greens</p>
              </div> 

              <div class="6 6 6 6 bases" id="noodles" style="z-index:1;" >
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/bases/noodles.png" alt=""> 
                <p class="items__title">Noodles</p>
              </div> 

              <div class="7 7 7 7 bases" id="quinoa" style="z-index:1;" >
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/bases/quinoa.png" alt=""> 
                <p class="items__title">Quinoa</p>
              </div> 
            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PROTEINAS -->
    <div id="proteinas" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>3. Proteínas</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="main-createpoke__boxgrid bowl proteinas">
              <div class="1 1 1 1 proteinas" id="atun">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/atun.png" alt="">  
                <p class="items__title">Atún</p>
              </div> 
              <div class="2 2 2 2 proteinas" id="camarones">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/camarones.png" alt="">  
                <p class="items__title">Camarones</p>
            
              </div> 
              <div class="3 3 3 3 proteinas" id="camarones-crispy">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/camarones-crispy.png" alt="">  
                <p class="items__title">Camarones crispy</p>
              
              </div> 
              <div class="4 4 4 4 proteinas" id="cerdo-desmechado">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/cerdo-desmechado.png" alt="">  
                <p class="items__title">Cerdo desmechado</p>
              </div> 
              <div class="5 5 5 5 proteinas" id="palmito-de-cangrejo">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/palmito-de-cangrejo.png" alt="">  
                <p class="items__title">Palmito de cangrejo</p>
              </div> 
              <div class="6 6 6 6 proteinas" id="pescado-apanado">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/pescado-apanado.png" alt="">  
                <p class="items__title">Pescado apanado</p>
            
              </div> 
              <div class="7 7 7 7 proteinas" id="pescado-blanco">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/pescado-blanco.png" alt="">  
                  <p class="items__title">Pescado blanco</p>
              </div> 
              <div class="8 8 8 8 proteinas" id="pollo-a-la-plancha">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/pollo-a-la-plancha.png" alt="">  
                  <p class="items__title">Pollo a la plancha</p>
              </div> 
              <div class="9 9 9 9 proteinas" id="salmon">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/salmon.png" alt="">  
                  <p class="items__title">Salmón</p>
              </div> 
              <div class="10 10 10 10 proteinas" id="tofu">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/proteinas/tofu.png" alt="">  
                  <p class="items__title">Tofu</p>
              </div> 

          
            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MIXINS A -->
    <div id="mixins-a" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>4. Mix-In 1</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="main-createpoke__boxgrid bowl mixins-a">


            <div class="1 1 1 1 mixins-a" id="aguacate-a" style="z-index:1;"> 
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/aguacate.png" alt="">  
              <p class="items__title">Aguacate</p>         
          </div> 
            <div class="2 2 2 2 mixins-a" id="cascos-de-naranja-a" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/cascos-de-naranja.png" alt="">  
              <p class="items__title">Cascos de naranja</p>
            </div> 
            <div class="3 3 3 3 mixins-a" id="maiz-tierno-a" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/maiz-tierno.png" alt="">  
              <p class="items__title">Maiz tierno</p>
              </div> 
            <div class="4 4 4 4 mixins-a" id="mango-a" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/mango.png" alt="">  
              <p class="items__title">Mango</p>
            </div> 
            <div class="5 5 5 5 mixins-a" id="pepino-a" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/pepino.png" alt="">  
              <p class="items__title">Pepino</p>
            </div> 
            <div class="6 6 5 6 mixins-a" id="repollo-morado-a" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/repollo-morado.png" alt="">  
              <p class="items__title">Repollo morado</p>
            </div>
            <div class="7 7 7 7 mixins-a" id="zanahoria-a" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/zanahoria.png" alt="">  
              <p class="items__title">Zanahoria</p>
            </div> 
            
            <div class="8 8 8 8 mixins-a" id="zucchini-a" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/zucchini.png" alt="">  
              <p class="items__title">Zucchini</p>
            </div> 


            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MIXINS B -->
    <div id="mixins-b" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>5. Mix-In 2</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="main-createpoke__boxgrid bowl mixins-b">
              <div class="1 1 5 7 mixins-b" id="aguacate-b" style="z-index:1;">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/aguacate.png" alt="">  
              <p class="items__title">Aguacate</p>   
              </div> 
              <div class="1 1 5 7 mixins-b" id="cascos-de-naranja-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/cascos-de-naranja.png" alt="">  
                <p class="items__title">Cascos de naranja</p>   
              </div> 
              <div class="1 1 5 7 mixins-b" id="maiz-tierno-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/maiz-tierno.png" alt="">  
                <p class="items__title">Maiz tierno</p>
              </div> 
              <div class="1 1 5 7 mixins-b" id="mango-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/mango.png" alt="">  
                <p class="items__title">Mango</p>
              </div> 
              <div class="1 1 5 7 mixins-b" id="pepino-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/pepino.png" alt="">  
                <p class="items__title">pepino</p>
              </div> 
              <div class="1 1 5 7 mixins-b" id="repollo-morado-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/repollo-morado.png" alt="">  
                <p class="items__title">Repollo morado</p>
              </div>
              <div class="1 1 5 7 mixins-b" id="zanahoria-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/zanahoria.png" alt="">  
                <p class="items__title">Zanahoria</p>
              </div> 
              <div class="1 1 5 7 mixins-b" id="zucchini-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/mixins/zucchini.png" alt="">  
                <p class="items__title">Zucchini</p>
              </div> 


          
            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TOPPING 1 -->
    <div id="toppings-a" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>6. Topping 1</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="main-createpoke__boxgrid bowl toppings-a">
              <div class="1 1 1 1 toppings-a" id="cebolla-crunch-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cebolla-crunch.png" alt="">  
                <p class="items__title">Cebolla crunch</p>   
              
              </div> 
              <div class="2 2 2 2 toppings-a" id="cebolla-morada-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cebolla-morada.png" alt="">  
                <p class="items__title">Cebolla morada</p>   
              </div> 
              <div class="3 3 3 3 toppings-a" id="cebollin-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cebollin.png" alt="">  
                <p class="items__title">Cebollín</p>   
              </div> 
              <div class="4 4 4 4 toppings-a" id="cilantro-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cilantro.png" alt="">  
                <p class="items__title">Cilantro</p>   
              </div> 
              <div class="5 5 5 5 toppings-a" id="edamame-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/edamame.png" alt="">  
                <p class="items__title">Edamame</p>   
              </div> 
              <div class="6 6 6 6 toppings-a" id="gari-rosado-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/gari-rosado.png" alt="">  
                <p class="items__title">Gari rosado</p>   
              </div>
              <div class="7 7 7 7 toppings-a" id="jalapeno-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/jalapeno.png" alt="">  
                <p class="items__title">Jalapeño</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="maiz-tostado-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/maiz-tostado.png" alt="">  
                <p class="items__title">Maíz tostado</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="mani-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/mani.png" alt="">  
                <p class="items__title">Maní</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="masago-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/masago.png" alt="">  
                <p class="items__title">Masago</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="pimenton-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/pimenton.png" alt="">  
                <p class="items__title">Pimentón</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="queso-crema-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/queso-crema.png" alt="">  
                <p class="items__title">Queso crema</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="rabano-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/rabano.png" alt="">  
                <p class="items__title">Rabano</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="seaweed-salad-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/seaweed-salad.png" alt="">  
                <p class="items__title">Seaweed salad</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="veggie-chips-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/veggie-chips.png" alt="">  
                <p class="items__title">Veggie chips</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="veggie-tempura-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/veggie-tempura.png" alt="">  
                <p class="items__title">Veggie tempura</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="wasabi-ball-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/wasabi-ball.png" alt="">  
                <p class="items__title">Wasabi ball</p>   
              </div> 
              <div class="8 8 8 8 toppings-a" id="wasabi-crunch-a" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/wasabi-crunch.png" alt="">  
                <p class="items__title">Wasabi crunch</p>   
              </div> 

        
              
            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TOPPING 2 -->
    <div id="toppings-b" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>7. Topping 2</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="main-createpoke__boxgrid bowl toppings-b">

              <div class="1 1 1 1 toppings-b" id="cebolla-crunch-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cebolla-crunch.png" alt="">  
                <p class="items__title">Cebolla crunch</p>   
              </div> 
              <div class="2 2 2 2 toppings-b" id="cebolla-morada-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cebolla-morada.png" alt="">  
                <p class="items__title">Cebolla morada</p>   
              </div> 
              <div class="3 3 3 3 toppings-b" id="cebollin-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cebollin.png" alt="">  
                <p class="items__title">Cebollín</p>   
              </div> 
              <div class="4 4 4 4 toppings-b" id="cilantro-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/cilantro.png" alt="">  
                <p class="items__title">Cilantro</p>   
              </div> 
              <div class="5 5 5 5 toppings-b" id="edamame-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/edamame.png" alt="">  
                <p class="items__title">Edamame</p>  
              </div> 
              <div class="6 6 6 6 toppings-b" id="gari-rosado-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/gari-rosado.png" alt="">  
                <p class="items__title">Gari rosado</p>  
              </div>
              <div class="7 7 7 7 toppings-b" id="jalapeno-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/jalapeno.png" alt="">  
                <p class="items__title">Jalapeño</p>  
              </div> 
              <div class="8 8 8 8 toppings-b" id="maiz-tostado-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/maiz-tostado.png" alt="">  
                <p class="items__title">Maíz tostado</p>  
              </div> 
              <div class="8 8 8 8 toppings-b" id="mani-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/mani.png" alt="">  
                <p class="items__title">Maní</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="masago-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/masago.png" alt="">  
                <p class="items__title">Masago</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="pimenton-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/pimenton.png" alt="">  
                <p class="items__title">Pimentón</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="queso-crema-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/queso-crema.png" alt="">  
                <p class="items__title">Queso crema</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="rabano-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/rabano.png" alt="">  
                <p class="items__title">Rabano</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="seaweed-salad-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/seaweed-salad.png" alt="">  
                <p class="items__title">Seaweed salad</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="veggie-chips-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/veggie-chips.png" alt="">  
                <p class="items__title">Veggie chips</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="veggie-tempura-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/veggie-tempura.png" alt="">  
                <p class="items__title">Veggie tempura</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="wasabi-ball-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/wasabi-ball.png" alt="">  
                <p class="items__title">Wasabi ball</p>
              </div> 
              <div class="8 8 8 8 toppings-b" id="wasabi-crunch-b" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/toppings/wasabi-crunch.png" alt="">  
                <p class="items__title">Wasabi crunch</p>
              </div> 



            
            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SALSAS -->
    <div id="salsas" class="tabcontent">
      <div class="main-createpoke">
        <div class="main-pokedots__box">
          <div class="main-general__description main-general__description--create">
            <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
          </div>
        </div>
        <div class="main-createpoke__content">
          <div class="main-createpoke__item">
            <div class="main-createpoke__header">
              <div class="main-createpoke__text">
                <p>8. Salsas</p>
              </div>
              <div class="container__icons">
                <div class="main-createpoke__icon" onclick="openTabs(event, 'Arma')">
                
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/exit.png" alt="">
                </div>
              </div>
            </div>
            <div class="main-createpoke__boxgrid bowl salsas">

              <div class="1 1 1 1 salsas" id="chipotle-mayo" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/salsas/chipotle-mayo.png" alt="">  
                <p class="items__title">Chipotle mayo</p>  
              
              
              </div> 
              <div class="2 2 2 2 salsas" id="leche-de-tigre" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/salsas/leche-de-tigre.png" alt="">  
                <p class="items__title">Leche de tigre</p>  
              </div> 
              <div class="3 3 3 3 salsas" id="sriracha-mayo" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/salsas/sriracha-mayo.png" alt="">  
                <p class="items__title">Sriracha mayo</p>  
              </div> 
              <div class="4 4 4 4 salsas" id="suero-costeño" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/salsas/suero-costeño.png" alt="">  
                <p class="items__title">Suero costeño</p>  
              </div> 
              <div class="5 5 5 5 salsas" id="teriyaki" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/salsas/teriyaki.png" alt="">  
                <p class="items__title">Teriyaki</p>  
              </div> 
              <div class="6 6 6 6 salsas" id="wasabi-cream" style="z-index:1;">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Arma-tu-bowl/items/salsas/wasabi-cream.png" alt="">  
                <p class="items__title">Wasabi cream</p>  
              </div>
          

            
            </div>
          </div>
          <div class="main-create-boxdetails">
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Calorías</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Carbohidratos</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Proteínas</p>
            </div>
            <div class="main-create-details">
              <span class="badge badge-secondary">-</span>
              <p>Superfoods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="">
    <div class="main-home__contentline main-home__contentline--about">
      <div class="main-home__item">
        <div class="main-home__line main-home__line--first"></div>
      </div>
      <div class="main-home__item">
        <div class="main-general__subtitle">
        <h3>Healthy is the new fun!</h3>
        </div>
      </div>
      <div class="main-home__item">
        <div class="main-home__line main-home__line--last"></div>
      </div>
    </div>
  </div>
  
  <style>

  .tab {
    overflow: hidden;
  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #ccc;
  }

  /* Style the tab content */
  
  .tabcontent {
    display: none;
    padding: 6px 12px;
  }
  .tabcontent.tabcontent--not {
    display: block;
    padding: 6px 12px;
  }
  .left{
    display: inline-block;
}
.right{
    margin-left: 200px;
    display: inline-block;
    width: 500px;
    height: 500px;
    position: relative;
}

/* .mixins-a{
    cursor: not-allowed;
}
.mixins-b{
    cursor: not-allowed;
}
.proteinas,.toppings-a,.toppings-a,.toppings-b,.salsas,.bases{
    cursor: not-allowed;
} */

  </style>

<script>
function openTabs(evt, seccionName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(seccionName).style.display = "block";
  evt.currentTarget.className += " active";
}


// document.querySelectorAll('.main-createpoke__img').forEach(function(evt){
//     evt.addEventListener('click', function() {
//       var base1 = document.querySelector('.main-createpoke__img img').getAttribute('src');
      
//       // alert(base64 );
//       document.getElementById('tamaño-img').src = base1;
      
//     });
//   });
// document.querySelectorAll('.main-create__boximg').forEach(function(el){
//   el.addEventListener('click', function() {
//     var base2 = document.querySelector('.main-create__boximg img').getAttribute('src');
//     // alert(base64 );
//     document.getElementById('base-img').src = base2;
//   });
// });



</script>

  
<?php get_footer(); ?> 