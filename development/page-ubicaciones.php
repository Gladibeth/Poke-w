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

<?php
  function city($taxonomy_id) {
    $count = 0;
    $args = array(
      'post_type' => 'ubicacion',
      'post_status' => 'publish',
      'order' =>'ASC',
      'tax_query' => array(
        array(
        'taxonomy' => 'ciudad',
        'field' => 'term_id',
        'terms' => $taxonomy_id
        ),
      ),
    );
    $loop = new WP_Query( $args );
    while( $loop->have_posts() ) : $loop->the_post();
?>
  <?php if($count == 0):?>
    <a itemprop="name" aria-controls="<?php global $post; echo $post_slug = $post->post_name;?>" aria-selected="true" class="active link-ubication" data-toggle="pill" href="<?php global $post; echo '#'.$post_slug = $post->post_name;?>" id="<?php global $post; echo $post_slug = $post->post_name.'-tab';?>" role="tab"><?php the_title();?></a>
  <?php else:?>
    <a itemprop="name" aria-controls="<?php global $post; echo $post_slug = $post->post_name;?>" aria-selected="true" class="link-ubication" data-toggle="pill" href="<?php global $post; echo '#'.$post_slug = $post->post_name;?>" id="<?php global $post; echo $post_slug = $post->post_name.'-tab';?>" role="tab"><?php the_title();?></a>
  <?php endif; $count++;?>
<?php endwhile; ?>
    </div>
  </div>
  </div>     
  <?php if($count >= 5):?>    
    <a class="last-icons link-ubication link-ubication--border" onclick="scroll_bottom()">
      <i class=""></i>
    </a>
  <?php endif;?> 
  <?php }
?>

<?php 
//function de modal
$count=0;
  function city_description($taxonomy_id){
    $args = array(
      'post_type' => 'ubicacion',
      'post_status' => 'publish',
      'order' =>'ASC',
      'tax_query' => array(
        array(
        'taxonomy' => 'ciudad',
        'field' => 'term_id',
        'terms' => $taxonomy_id
        ),
      ),
    );
    $loop = new WP_Query( $args );
    while( $loop->have_posts() ) : $loop->the_post();
?>
  <?php if($count == 0):?>
    <div aria-labelledby="<?php global $post; echo $post_slug = $post->post_name;?>" class="tab-pane fade show active" id="<?php global $post; echo $post_slug = $post->post_name;?>" role="tabpanel">
  <?php else:?>
    <div aria-labelledby="<?php global $post; echo $post_slug = $post->post_name;?>" class="tab-pane fade show" id="<?php global $post; echo $post_slug = $post->post_name;?>" role="tabpanel">
  <?php endif;?>
    <div class="main-ubications__img">
    <?php 
      $img_id = get_post_thumbnail_id(get_the_ID());
      $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
    ?>
    <img itemprop = "image" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
    </div>
    <div class="main-ubications__box">
      <div class="main-ubications__boxitem">
        <?php the_content();?>
      </div>
      <div class="main-ubications__boxitem">
        <div class="main-ubications__boxmap">
          <div class="main-ubications__img">
            <?php the_field('ubication_google_maps');?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php     
    $count +=1;
    endwhile;
  }
?>

  <div class="main-ubications">
    <div class="container">
      <div class="main-ubications__content">
        <div class="main-ubications__item">
          <select class="form-control select-ubication" name="ubications" id="ubications">
            <?php
              //listado de taxonomias
              $categories = get_categories(array(
                'taxonomy' => 'ciudad',
                'hide_empty' => true, //oculta categorias que no otenga post
                'order' => 'ASC',
                'orderby' => 'id',
                'post_status' => 'publish',
              )); 
              ?>
            <?php foreach ($categories as $category):?>
              <option value="<?php echo $category->slug;?>"><?php echo $category->name;?></option>
              <?php endforeach;?>
            </select>
          <?php $count = 0;?>
          <?php foreach ($categories as $category):?>
            <?php if($count == 0):?>
              <div class="div-padre js-ubications" id="<?php echo $category->slug;?>">
            <?php else:?>
              <div class="div-padre js-displayNone js-ubications" id="<?php echo $category->slug;?>">
            <?php endif;?>
              <div class="main-content-fix" >
                <div aria-labelledby="headingOne" class="js-scroll collapse show" data-parent="#accordion" id="collapseOne" style="height: 300px;overflow-y: scroll;">
                  <div class="card-body">
                    <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                      <?php city($category->term_taxonomy_id);?>
                    
              </div>
            </div>
            <?php $count +=1;?>
            <?php endforeach;?>


        </div>  
        <!--modal bogotá-->
        <?php $count = 0;?>
          <?php foreach ($categories as $category):?>
            <?php if($count == 0):?>
              <div class="main-ubications__item js-ubications" id="<?php echo 'modal-'.$category->slug;?>">
            <?php else:?>
              <div class="main-ubications__item js-ubications js-displayNone" id="<?php echo 'modal-'.$category->slug;?>">
            <?php endif;?>
              <div class="tab-content" id="v-pills-tabContent">
                <?php city_description($category->term_taxonomy_id);?>
              </div>
            </div>
          <?php $count+=1; endforeach;?>
         <!--end modal bogotá-->
      </div>
    </div>
  </div>
</div>           
  <?php endwhile; endif; ?>
<?php get_footer(); ?> 
