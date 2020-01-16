<?php get_header(); ?>
<div class="about-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/Poke_bowls/POKE_-249.png');">
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
      <div class="about-banner__title">
        <h3>ARMA TU BOWL</h3>
      </div>
    </div>
  </div>
  <div class="main-entries">
    <div class="container">
      <div class="main-entries__nav">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item nav-item--tabs">
            <a class="nav-link--tabs" href="entries.html" id="pills-home-tab">entradas</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a class="nav-link--tabs" href="poke-bowls.html" id="pills-profile-tab">poke bowls</a>
          </li>
          <li class="nav-item nav-item--tabs">
            <a class="nav-link--tabs" href="juice-bar.html" id="pills-contact-tab">juice bar</a>
          </li>
        </ul>
        <div class="btn__tabs">
          <a class="btn-btn_custom btn--large btn--filled btn--filled-gray active" href="">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Home/R Rappi.svg">
              <span class="line"></span>
              ARMA TU BOWL
            </a>
        </div>
      </div>
      <hr class="line-gray line-gray--entries">

      <div id="Arma" class="tabcontent tabcontent--not ">
        <div class="main-createpoke">
          <div class="main-pokedots__box">
            <div class="main-general__description main-general__description--create">
              <p>Arma tu Poke Bowl y conoce toda la información nutritiva que que necesites.</p>
            </div>
          </div>
          <div class="main-creategeneral__content">
            <div class="tab main-creategeneral__item main-creategeneral__item--grid">
              
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                    <p class="tablinks" onclick="openTabs(event, 'tamaño')">Tamaño</p>
                    
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                  <p class="tablinks" onclick="openTabs(event, 'base')">base</p>
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                    <p>Proteínas</p>
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                    <p>Mix-In 1</p>
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                    <p>mIX-In 2</p>
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                    <p>Topping 1</p>
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                    <p>Topping 2</p>
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
              <div class="main-creategeneral__subitem" href="">
                <div class="main-createpoke__header">
                  <div class="main-createpoke__text">
                    <p>Salsas</p>
                  </div>
                </div>
                <div class="main-createpoke__boxbody"></div>
              </div>
            </div>
            <div class="main-creategeneral__item">
              <div class="main-creategeneral__box">
                <div class="main-creategeneral__img">
                  <img id="tamaño-img"  src="">
                  <img id="base-img" src="">
                  <img id="proteinas-img" src="">
                  <img id="mix-img" src="">
                </div>
              </div>
              <div class="main-create-boxdetails">
                <div class="main-create-details">
                  <span class="badge badge-secondary">-</span>
                  <p>Calorías</p>
                </div>
                <div class="main-create-details">
                  <span class="badge badge-secondary">-</span>
                  <p>Alergénos</p>
                </div>
                <div class="main-create-details">
                  <span class="badge badge-secondary">-</span>
                  <p>Superfoods</p>
                </div>
                <div class="main-create-details">
                  <span class="badge badge-secondary">-</span>
                  <p>Grasas</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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
                  
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/close-button.svg" alt="">
  
                    
                  </div>
                </div>
              </div>
              <div class="main-createpoke__boxbody">
                <button class="tablinks" onclick="tamano(this)" id="mediano">
                  <div  class="main-createpoke__img">
                    <img  src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/bowl-1.png">
                    <div class="main-createpoke__bodytext">
                      <p>MEDIANO</p>
                    </div>
                  </div>
                </button>
                <button class="tablinks" onclick="tamano(this)" id="grande">
                  <div class="main-createpoke__img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/bowl.png">
                    <div class="main-createpoke__bodytext">
                      <p>GRANDE</p>
                    </div>
                  </div>
                </button>
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
                  
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/close-button.svg" alt="">
  
                    
                  </div>
                </div>
              </div>
              <div class="main-createpoke__boxbody">
                <button class="tablinks" onclick="openTabs(event, 'Arma')">
                  <div class="main-create__boxsmall">
                    <div class="main-create__boxitem">
                      <div class="main-create__boximg">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/1.png">
                      </div>
                    </div>
                    <div class="main-create__boxitem">
                      <div class="main-create__boxtext">
                        <p>MIX GREENS</p>
                      </div>
                    </div>
                  </div>
                </button>
                <button class="tablinks" onclick="openTabs(event, 'Arma')">
                  <div class="main-create__boxsmall">
                    <div class="main-create__boxitem">
                      <div class="main-create__boximg">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/Create_Poke/1.png">
                      </div>
                    </div>
                    <div class="main-create__boxitem">
                      <div class="main-create__boxtext">
                        <p>MIX GREENS</p>
                      </div>
                    </div>
                  </div>
                </button>
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





function tamano(event){
    console.log(event.id);
}



</script>

  
<?php get_footer(); ?> 