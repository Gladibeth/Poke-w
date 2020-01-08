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
                  <p>Part of Foodie S.A.S <br> & Endeavor company</p>
                </div>
              </div>
            </div>
            <div class="main-footer__address">
              <?php if (!dynamic_sidebar('Footer columna 1')); ?>
            </div>
          </div>
        </div>
        <div class="main-footer__item">
          <div class="main-footer__box">
            
            <?php if (!dynamic_sidebar('Footer columna 2')); ?>
          </div>
        </div>
        <div class="main-footer__item">
          <div class="main-footer__box">
            <div class="main-footer__title">
              <p>NEWSLETTER</p>
            </div>
            <div class="main-footer__subscribe">
              <?php echo do_shortcode('[contact-form-7 id="260" title="NEWSLETTER"]'); ?>
            </div>
          </div>
        </div>
        <div class="main-footer__item">
          <div class="main-footer__box">
            <div class="main-footer__redes">
              <a href="https://www.facebook.com/pokecolombia.co" target="_blank">
                <img src="https://sisenoragencia.com/poke/wp-content/themes/theme/assets/img/Home/f_logo_RGB-White_1024_1024.svg" alt="logo facebook">
                </a>
              <a href="https://www.instagram.com/poke.colombia/?hl=es-la" target="_blank">
                <img src="https://sisenoragencia.com/poke/wp-content/themes/theme/assets/img/Home/glyph-logo_IG-01.svg" alt="logo instagram">
                </a>
              <a href="https://co.linkedin.com/company/poke-colombia" target="_blank">
                <img src="https://sisenoragencia.com/poke/wp-content/themes/theme/assets/img/Home/linked in logo circulo.svg" alt="logo Linkedin">
                </a>
              <a href="https://twitter.com/ColombiaPoke" target="_blank">
                <img src="https://sisenoragencia.com/poke/wp-content/themes/theme/assets/img/Home/Twitter_Logo_WhiteOnImage.svg" alt="logo twitter">
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
      <?php if (!dynamic_sidebar('Footer copyright')); ?>
    </div>
  </footer>
  
  <style>
  .js-displayNone{
    display:none;
  }
  .Fecha_nacimiento > input{
    text-transform: uppercase;
  }

  </style>
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/datepicker.css" rel="stylesheet">
  <link async href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <link async rel="stylesheet" href="https://use.typekit.net/bpf1deu.css">
  <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
  <script async src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script defer src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script defer src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script defersrc="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script async src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.14.0/lazyload.min.js"></script>
  <script>
    var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
  });
  function BackgroundNode({node: e, loadedClassName: a}){let o=e.getAttribute("data-background-image-url"); return{node: e, load: d=>{let n=new Image; n.onload=(d=>{requestAnimationFrame(()=>{e.style.backgroundImage=`url(${o})`, e.classList.add(a), d()})})(d), n.src=o}}}let defaultOptions={selector: "[data-background-image-url]", loadedClassName: "loaded"}; function BackgroundLazyLoader({selector: e, loadedClassName: a}=defaultOptions){let o=[].slice.apply(document.querySelectorAll(e)).map(e=> new BackgroundNode({node: e, loadedClassName: a})), d=new IntersectionObserver((e, a)=>{e.forEach(({target: e, isIntersecting: d})=>{if (!d) return; let n=o.find(a=> a.node.isSameNode(e)); n && n.load(()=>{a.unobserve(e), (o=o.filter(a=> !a.node.isSameNode(e))).length || a.disconnect()})})}); o.forEach(e=> d.observe(e.node))}BackgroundLazyLoader();
  </script> -->
  <?php wp_footer(); ?>
</body>
<?php
  
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
// Si es tablet has lo que necesites
   print 'es tablet';
}
else if ($mobile_browser > 0) {
// Si es dispositivo mobil has lo que necesites
   print 'es un mobil';
}
else {
// Si es ordenador de escritorio has lo que necesites
   print 'es un ordenador de escritorio';
}  
?>
</html>