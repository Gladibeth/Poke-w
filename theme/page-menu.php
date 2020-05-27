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

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
    $body_class = "mobile";
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
    'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
    'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
    'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
    'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
    'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
    'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
    'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
    'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-'
);

if (in_array($mobile_ua, $mobile_agents)) {
    $mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
        $tablet_browser++;
    }
}
if ($tablet_browser > 0) {
    $mobile = true;
} else if ($mobile_browser > 0) {
    $mobile = true;
} else {
    $desktop = true;
}
?>
<div id="banner-entradas" class="about-banner about-banner__imgmobile js-hiddenMenu">
    <?php
    $image = get_field('imagen_entrada_menu');
    $image_sizes = $image['sizes'];
    ?>
    <?php if ($mobile) : ?>
    <img itemprop="img" src="<?php echo get_field('imagen_entrada_menu_mobile'); ?>" alt="<?php echo $alt; ?>">
    <?php else : ?>
    <img itemprop="img"
        srcset="<?php echo get_field('imagen_entrada_menu_mobile'); ?> 1024w, <?php echo $image['url']; ?> 1920w,"
        alt="<?php echo $alt; ?>">
    <?php endif; ?>
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
        <div class="about-banner__title">
            <h3>ENTRADAS</h3>
        </div>
    </div>
</div>
<div id="banner-pokeBowl" class="about-banner about-banner__imgmobile">
    <?php
    $image = get_field('imagen_poke_bowl_menu');
    $image_sizes = $image['sizes'];
    ?>
    <?php if ($mobile) : ?>
    <img itemprop="img" src="<?php echo get_field('imagen_poke_bowl_menu_mobile'); ?>" alt="<?php echo $alt; ?>">
    <?php else : ?>
    <img itemprop="img"
        srcset="<?php echo get_field('imagen_poke_bowl_menu_mobile'); ?> 1024w, <?php echo $image['url']; ?> 1920w,"
        alt="<?php echo $alt; ?>">
    <?php endif; ?>
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
        <div class="about-banner__title">
            <h1>Poke Bowls</h1>
        </div>
    </div>
</div>
<div id="banner-juiceBar" class="about-banner js-hiddenMenu">
    <?php
    $image = get_field('imagen_juice_bar_menu');
    $image_sizes = $image['sizes'];
    ?>
    <?php if ($mobile) : ?>
    <img itemprop="img" src="<?php echo get_field('imagen_juice_bar_menu_mobile'); ?>" alt="<?php echo $alt; ?>">
    <?php else : ?>
    <img itemprop="img"
        srcset="<?php echo get_field('imagen_juice_bar_menu_mobile'); ?> 1024w, <?php echo $image['url']; ?> 1920w,"
        alt="<?php echo $alt; ?>">
    <?php endif; ?>
    <div class="overlay"></div>
    <div class="about-banner__text about-banner__text--center">
        <div class="about-banner__title">
            <h3>Juice Bar</h3>
        </div>
    </div>
</div>
<div class="main-entries">
    <div class="container">
        <div class="main-entries__nav">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item nav-item--tabs">
                    <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs" data-toggle="pill"
                        href="#v-pills-home" id="entradas" role="tab" onclick="menu(this)">entradas</a>
                </li>
                <li class="nav-item nav-item--tabs">
                    <a aria-controls="v-pills-home" aria-selected="true" class="nav-link--tabs active"
                        data-toggle="pill" href="#v-pills-profile" id="pokeBowl" role="tab" onclick="menu(this)">poke
                        bowls</a>
                </li>
                <li class="nav-item nav-item--tabs">
                    <a aria-controls="v-pills-contact" aria-selected="true" class="nav-link--tabs" data-toggle="pill"
                        href="#v-pills-contact" id="juiceBar" role="tab" onclick="menu(this)">juice
                        bar</a>
                </li>
            </ul>
            <div class="btn__tabs">
                <a class="btn-btn_custom btn--large btn--filled btn--filled-gray" target="_blank"
                    href="https://domicilios.pokecolombia.co/productos/bowls/arma-tu-bowl">
                    <img itemprop="image"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/Menu_entradas/Bowl.svg">
                    <span class="line"></span>
                    ARMA TU BOWL
                </a>
            </div>
        </div>
        <hr class="line-gray line-gray--entries">
        <div class="tab-content">
            <div aria-labelledby="entradas" class="tab-pane fade" id="v-pills-home" role="tabpanel">
                <div class="main-pokebowls__content" itemscope itemtype="http://schema.org/Menu">
                    <!--1 entradas-->
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order' => 'DESC'
                    );
                    $loop = new WP_Query($args);
                    global $post;

                    ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <a class="main-entries__item" data-target="<?php echo '#' . $post->post_name; ?>"
                        data-toggle="modal" href="">
                        <div class="main-entries__img">
                            <?php
                                $img_id = get_post_thumbnail_id(get_the_ID());
                                $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true); //alt de imágenes
                                ?>

                            <img itemprop="image" src="<?php echo the_post_thumbnail_url(); ?>"
                                alt="<?php echo $alt; ?>">

                        </div>
                        <div class="main-entries__text">
                            <div class="main-entries__title">
                                <h3 itemprop="name"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </a>
                    <!--- MODAL 1-->
                    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" role="dialog"
                        tabindex="-1" id="<?php echo $post->post_name; ?>">
                        <div class="modal__flex">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <div class="main-modal__content">
                                            <div class="main-modal__item">
                                                <div class="main-modal__img">
                                                    <?php
                                                        $image = get_field('imagen_en_el_modal');
                                                        $image_sizes = $image['sizes'];
                                                        ?>
                                                    <img itemprop="image" src="<?php echo $image['url']; ?>"
                                                        alt="<?php echo $image['alt']; ?>">
                                                </div>
                                            </div>
                                            <div class="main-modal__item">
                                                <div class="main-modal__text">
                                                    <div class="main-modal__title d-flex">
                                                        <p class="" itemprop="name"><?php the_title(); ?></p>
                                                        <span class="line line-color  line-color--entries"></span>
                                                        <div class="main-modals__icons mt-2">
                                                            <?php if (get_field('mariscos_menu')) : ?>
                                                            <img itemprop="logo" title="Mariscos"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Mariscos.svg"
                                                                alt="Icono Mariscos">
                                                            <?php endif; ?>
                                                            <?php if (get_field('pescados_menu')) : ?>
                                                            <img itemprop="logo" title="Pescados"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Pescados.svg"
                                                                alt="Icono Pescados">
                                                            <?php endif; ?>
                                                            <?php if (get_field('semillas_menu')) : ?>
                                                            <img itemprop="logo" title="Semillas"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Semillas.svg"
                                                                alt="Icono Semillas">
                                                            <?php endif; ?>
                                                            <?php if (get_field('picantes_menu')) : ?>
                                                            <img itemprop="logo" title="Picantes"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Picantes.svg"
                                                                alt="Icono Picantes">
                                                            <?php endif; ?>
                                                            <?php if (get_field('soya_menu')) : ?>
                                                            <img itemprop="logo" title="Soya"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Soya.svg"
                                                                alt="Icono Soya">
                                                            <?php endif; ?>
                                                            <?php if (get_field('nueces_menu')) : ?>
                                                            <img itemprop="logo" title="Nueces"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Nueces.svg"
                                                                alt="Icono Nueces">
                                                            <?php endif; ?>
                                                            <?php if (get_field('lacteos_menu')) : ?>
                                                            <img itemprop="logo" title="Lacteos"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Lacteos.svg"
                                                                alt="Icono Lacteos">
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <hr class="line-gray line-gray--entries">
                                                    <div class="main-modal__description">
                                                        <strong>Ingredientes:</strong>
                                                        <p itemprop="description">
                                                            <?php the_field('ingredientes_menu'); ?></p>
                                                    </div>
                                                    <div class="main-modal__boxdetails">
                                                        <div class="main-modal__details">
                                                            <?php if (get_field('cantidad_de_calorias_menu') != 0) : ?>
                                                            <span
                                                                class="badge badge-secondary"><?php the_field('cantidad_de_calorias_menu'); ?></span>
                                                            <p>Calorías</p>
                                                            <?php endif; ?>
                                                        </div>

                                                    </div>
                                                    <div class="main-modal__text--calorias">
                                                        <p>'Basadas en la porción de un plato mediano'</p>
                                                    </div>
                                                    <div class="main-modal__description">
                                                        <strong>Superfoods:</strong>
                                                        <p><?php the_field('superfoods_menu'); ?></p>
                                                    </div>
                                                    <div class="main-modal__price">
                                                        <p itemprop="price">COP: <?php the_field('precio_menu'); ?></p>
                                                    </div>
                                                    <div class="btn-modal">

                                                        <a itemprop="url"
                                                            class="btn-btn_custom btn--medium btn--filled-modalgray btn-rappi"
                                                            id="<?php echo the_title(); ?>" style="width:165px;"
                                                            target="_blank"
                                                            href="<?php echo get_field('link_plato_poke_rappi_web_menu'); ?>">
                                                            <img itemprop="image"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Header/icon-compra.svg">
                                                            <span class="line"></span>
                                                            Pide en línea
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php

                    endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>
            <div class="tab-pane fade show active" id="v-pills-profile">
                <div class="main-pokebowls__content" itemscope itemtype="http://schema.org/Menu">
                    <!--2 poke bowl-->
                    <?php
                    $args = array(
                        'post_type' => 'poke_bowls',
                        'post_status' => 'publish',
                        'order' => 'DESC'
                    );
                    $loop = new WP_Query($args);
                    global $post;
                    ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <a class="main-entries__item" data-target="<?php echo '#' . $post->post_name; ?>"
                        data-toggle="modal" href="">
                        <div class="main-entries__img">
                            <?php
                                $img_id = get_post_thumbnail_id(get_the_ID());
                                $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true); //alt de imágenes
                                ?>

                            <img itemprop="image" src="<?php echo the_post_thumbnail_url(); ?>"
                                alt="<?php echo $alt; ?>">

                        </div>
                        <div class="main-entries__text">
                            <div class="main-entries__title">
                                <h3 itemprop="name"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </a>

                    <!--- MODAL 2-->
                    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" role="dialog"
                        tabindex="-1" id="<?php echo $post->post_name; ?>">
                        <div class="modal__flex">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <div class="main-modal__content">
                                            <div class="main-modal__item">
                                                <div class="main-modal__img">
                                                    <?php
                                                        $image = get_field('imagen_en_el_modal');
                                                        $image_sizes = $image['sizes'];
                                                        ?>
                                                    <img itemprop="image" src="<?php echo $image['url']; ?>"
                                                        alt="<?php echo $image['alt']; ?>">
                                                </div>
                                            </div>
                                            <div class="main-modal__item">
                                                <div class="main-modal__text">
                                                    <div class="main-modal__title d-flex">
                                                        <p class="" itemprop="name"><?php the_title(); ?></p>
                                                        <span class="line line-color  line-color--entries"></span>
                                                        <div class="main-modals__icons mt-2">
                                                            <?php if (get_field('mariscos_menu')) : ?>
                                                            <img itemprop="logo" title="Mariscos"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Mariscos.svg"
                                                                alt="Icono Mariscos">
                                                            <?php endif; ?>
                                                            <?php if (get_field('pescados_menu')) : ?>
                                                            <img itemprop="logo" title="Pescados"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Pescados.svg"
                                                                alt="Icono Pescados">
                                                            <?php endif; ?>
                                                            <?php if (get_field('semillas_menu')) : ?>
                                                            <img itemprop="logo" title="Semillas"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Semillas.svg"
                                                                alt="Icono Semillas">
                                                            <?php endif; ?>
                                                            <?php if (get_field('picantes_menu')) : ?>
                                                            <img itemprop="logo" title="Picantes"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Picantes.svg"
                                                                alt="Icono Picantes">
                                                            <?php endif; ?>
                                                            <?php if (get_field('soya_menu')) : ?>
                                                            <img itemprop="logo" title="Soya"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Soya.svg"
                                                                alt="Icono Soya">
                                                            <?php endif; ?>
                                                            <?php if (get_field('nueces_menu')) : ?>
                                                            <img itemprop="logo" title="Nueces"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Nueces.svg"
                                                                alt="Icono Nueces">
                                                            <?php endif; ?>
                                                            <?php if (get_field('lacteos_menu')) : ?>
                                                            <img itemprop="logo" title="Lacteos"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Alergenos/Lacteos.svg"
                                                                alt="Icono Lacteos">
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <hr class="line-gray line-gray--entries">
                                                    <div class="main-modal__description">
                                                        <strong>Ingredientes:</strong>
                                                        <p itemprop="description">
                                                            <?php the_field('ingredientes_menu'); ?></p>

                                                    </div>
                                                    <div class="main-modal__boxdetails">
                                                        <div class="main-modal__details">
                                                            <?php if (get_field('cantidad_de_calorias_menu') != 0) : ?>
                                                            <span
                                                                class="badge badge-secondary"><?php the_field('cantidad_de_calorias_menu'); ?></span>
                                                            <p>Calorías</p>
                                                            <?php endif; ?>
                                                        </div>

                                                    </div>
                                                    <div class="main-modal__text--calorias">
                                                        <p>'Basadas en la porción de un plato mediano'</p>
                                                    </div>
                                                    <div class="main-modal__description">
                                                        <strong>Superfoods:</strong>
                                                        <p><?php the_field('superfoods_menu'); ?></p>
                                                    </div>
                                                    <div class="main-modal__price">
                                                        <?php if (get_field('precio_mediano_menu') != 0) : ?>
                                                        <div class="main-modal__smallprice">
                                                            <span>M:</span>
                                                            <p itemprop="price">COP
                                                                <?php the_field('precio_mediano_menu'); ?></p>
                                                        </div>
                                                        <?php endif; ?>
                                                        <?php if (get_field('precio_grande_menu') != 0) : ?>
                                                        <div class="main-modal__smallprice">
                                                            <span>G:</span>
                                                            <p itemprop="price">COP
                                                                <?php the_field('precio_grande_menu'); ?></p>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="btn-modal">

                                                        <a itemprop="url"
                                                            class="btn-btn_custom btn--medium btn--filled-modalgray btn-rappi"
                                                            id="<?php echo the_title(); ?>" style="width:165px;"
                                                            target="_blank"
                                                            href="<?php echo get_field('link_plato_poke_rappi_web_menu'); ?>">
                                                            <img itemprop="image"
                                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/Header/icon-compra.svg">
                                                            <span class="line"></span>
                                                            Pide en línea
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php

                    endwhile;
                    wp_reset_query(); ?>

                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-contact">
                <div class="main-pokebowls__content" itemscope itemtype="http://schema.org/Menu">
                    <!--3 juice bar-->
                    <?php
                    $args = array(
                        'post_type' => 'juice_bar',
                        'post_status' => 'publish',
                        'order' => 'DESC'
                    );
                    $loop = new WP_Query($args);
                    global $post;
                    ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <a class="main-entries__item" data-target="<?php echo '#' . $post->post_name; ?>"
                        data-toggle="modal" href="">
                        <div class="main-entries__img">
                            <?php
                                $img_id = get_post_thumbnail_id(get_the_ID());
                                $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true); //alt de imágenes
                                ?>

                            <img itemprop="image" src="<?php echo the_post_thumbnail_url(); ?>"
                                alt="<?php echo $alt; ?>">

                        </div>
                        <div class="main-entries__text">
                            <div class="main-entries__title">
                                <h3 itemprop="name"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </a>
                    <!--- MODAL 3-->
                    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" role="dialog"
                        tabindex="-1" id="<?php echo $post->post_name; ?>">
                        <div class="modal__flex">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <div class="main-modal__content">
                                            <div class="main-modal__item">
                                                <div class="main-modal__img">
                                                    <?php
                                                        $image = get_field('imagen_en_el_modal');
                                                        $image_sizes = $image['sizes'];
                                                        ?>
                                                    <img itemprop="image" src="<?php echo $image['url']; ?>"
                                                        alt="<?php echo $image['alt']; ?>">
                                                </div>
                                            </div>
                                            <div class="main-modal__item">
                                                <div class="main-modal__text">
                                                    <div class="main-modal__title">
                                                        <p class="mt-2" itemprop="name"><?php the_title(); ?></p>
                                                    </div>
                                                    <hr class="line-gray line-gray--entries">
                                                    <div class="main-modal__description">
                                                        <strong>Ingredientes:</strong>
                                                        <p itemprop="description">
                                                            <?php the_field('ingredientes_menu'); ?></p>
                                                        <strong>Beneficios:</strong>
                                                        <p><?php the_field('beneficios_menu'); ?></p>
                                                    </div>
                                                    <div class="main-modal__boxdetails">
                                                        <div class="main-modal__details">
                                                            <span
                                                                class="badge badge-secondary"><?php the_field('cantidad_de_calorias_menu'); ?></span>
                                                            <p>Calorías</p>
                                                        </div>

                                                    </div>
                                                    <div class="main-modal__price">
                                                        <p>COP: <?php the_field('precio_menu'); ?></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php

                    endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>