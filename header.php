<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php if ( is_single() ) { echo wp_strip_all_tags( get_the_excerpt(), true ); } else { bloginfo( 'description' ); } ?>" />
<meta name="keywords" content="<?php echo implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ); ?>" />
<meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo get_site_icon_url(); } ?>" />
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
<meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
<meta name="twitter:description" content="<?php if ( is_single() ) { echo wp_strip_all_tags( get_the_excerpt(), true ); } else { bloginfo( 'description' ); } ?>" />
<meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo get_site_icon_url(); } ?>" />
<meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
<meta name="twitter:widgets:theme" content="light" />
<meta name="twitter:widgets:link-color" content="blue" />
<meta name="twitter:widgets:border-color" content="#fff" />

<link rel="canonical" href="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://fonts.googleapis.com/css2?family=Gothic+A1&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<!-- <script src="<?php //echo get_template_directory_uri() ?>/assets/js/swiperjs.js"></script> -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" role="banner">
    <div class="header-body border-top-0">
        <div class="header-container container">
            <div class="row header-row justify-content-between">
                <?php 
                    $query_history = new WP_Query( array( 'pagename' => 'home' ) ); 
                ?>
                <?php if ($query_history->have_posts()): ?>
                    <?php while ($query_history->have_posts()): $query_history->the_post(); 
                    $featured_img_url_mercados = get_the_post_thumbnail_url(get_the_ID(),'full');
                ?>
                <div class="col-lg-3 col-md-6 col-auto header-logo mt-0">
                    
                    <a href="<?php bloginfo( 'url' ); ?>">
                        <img alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                    </a> 
                    
                    
                </div>
                <div class="col-lg-9 col-md-6 col-auto justify-content-end">
                    <div class="row">
                        <div class="col-md-10 header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-square header-nav-main-font-alternative header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                
                                <nav class="collapse">
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                                    
                                </nav>

                                
                            </div>

                        </div>
                        <div class="col-md-10 col-auto header-nav-features boton-menu-mobil pe-0">
                            <button id="btn-mobil"  href="javascript:void(0);" class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav" onclick="" >
                                        <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        

                        <div class="col-md-2 col-auto header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <button class="header-nav-features-toggle top-bar-search-trigger " data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></button>
                                <form class="top-bar-searchform" role="search" method="get" id="searchform"  action="<?php echo get_home_url( '/' ); ?>" >
                                    <div class="custom-form"><label class="screen-reader-text" for="s"><?php __( 'Buscar:' ); ?></label>
                                        <input class="top-bar-searchinput" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                                        <button type="submit" class="top-bar-searform-submit" id="searchsubmit" value="<?php echo esc_attr__( 'Buscar' ); ?>" /><span class="sr-only">Buscar</span><i class="fas fa-search header-nav-top-icon"></i></button>
                                    </div>
                                </form>
                            </div>
                            
                        </div> <!--FIN ICONO BUSCAR-->
                        
                        

                    </div> <!--HEADER ROW-->
                </div> <!--HEADER COLUMN-->
                
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div> <!--HEADER ROW-->
            
        </div> <!--HEADER CONTAINER-->
    </div><!--HEADER BODY-->
        <!-- <div id="topnav" class="topnav">
            <?php //wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
        </div> -->
 </header>
<main class="w-full">
    
