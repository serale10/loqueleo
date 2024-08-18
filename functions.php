<?php
add_action( 'after_setup_theme', 'generic_setup' );
function generic_setup() {
    load_theme_textdomain( 'generic', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( 'woocommerce' );
    global $content_width;
    if ( !isset( $content_width ) ) { $content_width = 1920; }
    register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'generic' ) ) );
}

add_action('wp_enqueue_scripts', 'generic_load_scripts');
function generic_load_scripts()
{
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');
    // wp_enqueue_style('icons', get_template_directory_uri() . '/assets/icons/fontawesome-free/css/all.min.css');
    wp_enqueue_style('styles', get_stylesheet_uri());
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
    // wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome6.0.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('fontawesome', get_template_directory_uri() . '/assets/js/fontawesome6.0.min.js');

    //wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js');
    //wp_register_script('generic-videos', get_template_directory_uri() . '/js/videos.js');
    //wp_enqueue_script('generic-videos');
    //wp_add_inline_script('generic-videos', 'jQuery(document).ready(function($){$("#wrapper").vids();});');
}

add_action( 'wp_footer', 'generic_footer' );
function generic_footer() {
    ?>
    <script>
    jQuery(document).ready(function($) {

    var deviceAgent = navigator.userAgent.toLowerCase();
    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
    $("html").addClass("ios");
    }
    if (navigator.userAgent.search("MSIE") >= 0) {
    $("html").addClass("ie");
    }
    else if (navigator.userAgent.search("Chrome") >= 0) {
    $("html").addClass("chrome");
    }
    else if (navigator.userAgent.search("Firefox") >= 0) {
    $("html").addClass("firefox");
    }
    else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
    $("html").addClass("safari");
    }
    else if (navigator.userAgent.search("Opera") >= 0) {
    $("html").addClass("opera");
    }
    $(".menu-toggle").on("keypress click", function(e) {
    if (e.which == 13 || e.type === "click") {
    e.preventDefault();
    $("#menu").toggleClass("toggled");
    }
    });
    $(document).keyup(function(e) {
    if (e.keyCode == 27) {
    if ($("#menu").hasClass("toggled")) {
    $("#menu").toggleClass("toggled");
    }
    }
    });
    $("img.no-logo").each(function() {
    var alt = $(this).attr("alt");
    $(this).replaceWith(alt);
    });
    });
    </script>
    <?php
}

add_filter( 'document_title_separator', 'generic_document_title_separator' );
function generic_document_title_separator( $sep ) {
    $sep = '|';
    return $sep;
    }
    add_filter( 'the_title', 'generic_title' );
    function generic_title( $title ) {
    if ( $title == '' ) {
        return '...';
    } else {
        return $title;
    }
}

function generic_schema_type() {
    $schema = 'https://schema.org/';
    if ( is_single() ) {
        $type = "Article";
    } elseif ( is_author() ) {
        $type = 'ProfilePage';
    } elseif ( is_search() ) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . $schema . $type . '"';
}

add_filter( 'nav_menu_link_attributes', 'generic_schema_url', 10 );
function generic_schema_url( $atts ) {
    $atts['itemprop'] = 'url';
    return $atts;
}

if ( !function_exists( 'generic_wp_body_open' ) ) {
    function generic_wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

add_action( 'wp_body_open', 'generic_skip_link', 5 );
function generic_skip_link() {
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'generic' ) . '</a>';
}

add_filter( 'the_content_more_link', 'generic_read_more_link' );
function generic_read_more_link() {
    if ( !is_admin() ) {
    return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'generic' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
    }
}

add_filter( 'excerpt_more', 'generic_excerpt_read_more_link' );
function generic_excerpt_read_more_link( $more ) {
    if ( !is_admin() ) {
        global $post;
        return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'generic' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
    }
}

add_filter( 'big_image_size_threshold', '__return_false' );

add_filter( 'intermediate_image_sizes_advanced', 'generic_image_insert_override' );
function generic_image_insert_override( $sizes ) {
    unset( $sizes['medium_large'] );
    unset( $sizes['1536x1536'] );
    unset( $sizes['2048x2048'] );
    return $sizes;
}

add_action( 'widgets_init', 'generic_widgets_init' );
function generic_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Sidebar Widget Area', 'generic' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'wp_head', 'generic_pingback_header' );
function generic_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}

add_action( 'comment_form_before', 'generic_enqueue_comment_reply_script' );
function generic_enqueue_comment_reply_script() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function generic_custom_pings( $comment ) {
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
    <?php
}    
add_filter( 'get_comments_number', 'generic_comment_count', 0 );
function generic_comment_count( $count ) {
    if ( !is_admin() ) {
        global $id;
        $get_comments = get_comments( 'status=approve&post_id=' . $id );
        $comments_by_type = separate_comments( $get_comments );
        return count( $comments_by_type['comment'] );
    } else {
    return $count;
    }
}

/* ----------- // CUSTOM POST TYPES // ----------- */
/* ----------- // ====== ====== // ----------- */

add_action('init', 'themePostTypes');

function themePostTypes() {

    /*=== Home Slider ===*/
    $HomeSliderLabels = array(
        'name' => _x('Home Slider', 'post type general name'),
        'singular_name' => _x('Home Slider', 'post type singular name'),
        'add_new' => _x('Añadir Nuevo', 'Home Slider'),
        'add_new_item' => __('Añadir Nuevo Home Slider'),
        'edit_item' => __('Editar Home Slider'),
        'new_item' => __('Añadir Home Slider'),
        'view_item' => __('Ver Home Slider'),
        'search_items' => __('Buscar Home Slider'),
        'not_found' =>  __('Home Slider no existente.'),
        'not_found_in_trash' => __('No se encontraron Sliders en la papelera.'), 
        'parent_item_colon' => '',
        'menu_name' => 'Home Slider'
    );

    register_post_type(
        'home_slider', 
        array('labels' => $HomeSliderLabels,
        'description' => 'Home Slider',
        'publicly_queryable' => true,
        'public' => true, 
        'show_ui' => true, 
        'hierarchical' => true, // like posts
        'supports' => array(
            'title',
            'editor',   
            'thumbnail',
            'page-attributes')
        )
    );                       
                    
	
}

add_filter( 'comment_form_fields', 'dcms_modify_order_fields' );

function dcms_modify_order_fields( $fields ){
	$val = $fields['comment'];
	unset($fields['comment']);
	$fields += array('comment' => $val );
	return $fields;
}


// To-do: If is aplicacaiones page run this function
function getAplicacionesCats($industry = '') {

    $selectIndustry = '<select name="industry" id="industry" class="w-100 border-0 c-gray align-items-start lh-lg text-center text-md-start">';

    if (!empty($industry)) {
        $selectedOption = $industry;
    } else {
        $selectedOption = '';
        $selectIndustry .= '<option value="elegir-industria" disabled selected hidden>Seleccionar Industria</option>';
    }
    $cats = get_categories('taxonomy=categoria&type=aplicaciones');
    
    
    foreach($cats as $cat) {
        if($cat->slug == $selectedOption) {
            $selectIndustry .= '<option value="'.htmlentities($cat->slug).'" id="'.$cat->slug.'" selected>'.$cat->name.'</option>';
        } else {
            $selectIndustry .= '<option value="'.htmlentities($cat->slug).'" id="'.$cat->slug.'">'.$cat->name.'</option>';
        }
    }

    $selectIndustry .= '</select>';

    return $selectIndustry;
}

function getAplicacionesTags($solucion = '') {

    $selectSolution = '<select name="solutions" id="solutions" class="w-100 border-0 c-gray align-items-start lh-lg text-center text-md-start">';

    if (!empty($solucion)) {
        $selectedOption = $solucion;
    } else {
        $selectedOption = '';
        $selectSolution .= '<option value="elegir" disabled selected hidden>Seleccionar Solución</option>';
    }

    $selectSolution .= '<option value="all">Todas</option>';

    // foreach($tags as $tag) {
    //     $encodedSlug = urlencode($tag->slug);
    //     if($tag->slug == $selectedOption) {
    //         $selectSolution .= '<option value="'.htmlentities($encodedSlug).'" selected>'.$tag->name.'</option>';
    //     } else {
    //         $selectSolution .= '<option  ">'.$tag->name.'</option>';
    //     }
    // }

    $selectSolution .= '</select>';
    return $selectSolution;
}

function get_tags_in_use(){
    $categories = get_categories('taxonomy=categoria&type=aplicaciones');
    $categories_and_tags = array();
    $categoriesList = array();
    $tagsList = array();

    foreach ($categories as $category) {

        $categoriesList[] = $category->slug;
        
        // Set up the query for our posts
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'aplicaciones',
            'tax_query' => array(
                array(
                'taxonomy' => 'categoria',
                'field' => 'slug',
                'terms' => $category->slug
                ),
            ),
        );
        $my_posts = new WP_Query($args);

        // // Initialize our tag arrays
        $tags_by_name = array();

        // // If there are posts in this category, loop through them
        if ($my_posts->have_posts()): while ($my_posts->have_posts()): $my_posts->the_post();

            // Get all tags of current post
            $post_tags = wp_get_post_tags($my_posts->post->ID);

            // Loop through each tag
            foreach ($post_tags as $tag):

                // Set up our tags by id, name, and/or slug
                $tag_name = $tag->name;

                // Push each tag into our main array if not already in it
                if (!in_array($tag_name, $tags_by_name)) {
                    array_push($tags_by_name, $tag_name);
                }

            endforeach;
        endwhile;
        wp_reset_query();
        $tagsList[] = $tags_by_name;

        $categories_and_tags['category'] = $categoriesList;
        $categories_and_tags['tags'] = $tagsList;
        endif;
    }

    $allSelects = '';

    foreach( $categories_and_tags['category'] as $key => $catsandtags) {
        ${'select_'.$key} = '<select id="select_'.$catsandtags.'" class="d-none w-100 border-0 c-gray align-items-start lh-lg text-center text-md-start" name="solutions">';
        ${'select_'.$key} .= '<option value="elegir" disabled selected hidden>Seleccionar Solución</option>';
        ${'select_'.$key} .= '<option value="all">Todas</option>';


            $tags = $categories_and_tags['tags'][$key];
            foreach ($tags as $tag) {
                $tagSlug = sanitize_title($tag);
                ${'select_'.$key} .= '<option value="'. $tagSlug .'">'.$tag.'</option>';
            }
        ${'select_'.$key} .= '</select>';
        
        $allSelects .= ${'select_'.$key};
    }

    echo $allSelects;
}