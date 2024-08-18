<div id="comments">
<?php
if ( have_comments() ) :
global $comments_by_type;
$comments_by_type = separate_comments( $comments );
if ( !empty( $comments_by_type['comment'] ) ) :
?>

<!-- Section comments made -->
<section id="comments-list" class="comments">
<h2 class="comments-title c-gray fw-bolder fs-4 col-12 my-4">Comentarios (<?php echo get_comments_number(); ?>)</h2>
<?php if ( get_comment_pages_count() > 1 ) : ?>

<nav id="comments-nav-above" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
<?php endif; ?>
<!-- Lista de comentarios hechos -->
<ul>
<?php wp_list_comments( array(
    'style' => 'ol',
    'type' => 'comment',
    'reply_text' => '<i class="fa-solid fa-share fa-flip-horizontal me-3"></i> Responder',
    'login_text' => 'iniciar sesión para comentar',
    
) ); ?>
</ul>

<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-below" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
<?php endif; ?>

</section> 
<!-- End Section Comments done -->

<?php
endif;
if ( !empty( $comments_by_type['pings'] ) ) :
$ping_count = count( $comments_by_type['pings'] );
?>
<section id="trackbacks-list" class="comments">
<h2 class="comments-title"><?php echo '<span class="ping-count">' . esc_html( $ping_count ) . '</span> ' . esc_html( _nx( 'Trackback or Pingback', 'Trackbacks and Pingbacks', $ping_count, 'comments count', 'generic' ) ); ?></h2>
<ul>
<?php wp_list_comments( 'type=pings&callback=generic_custom_pings' ); ?>
</ul>
</section>
<?php
endif;
endif;
?>
<div class="form-comments b-gray-light-2">
    <div class="row p-4 text-center text-md-start c-gray">
        
        <?php 
        //Declare Vars
        $comment_send = 'Enviar';
        $comment_reply = 'Deja tu Comentario';
        $comment_reply_to = 'Responder';
        
        $comment_author = 'Ingresa tu nombre...';
        $comment_email = 'Ingresa tu Email...';
        $comment_body = '';
        $comment_url = 'Website';
        $comment_cookies_1 = ' Al comentar aceptas nuestras';
        $comment_cookies_2 = ' Politicas de privacidad.';
        
        $comment_before = 'No es necesario Registrarse.';
        
        $comment_cancel = 'Cancelar Respuesta';
        $comments_args = array(
            //Define Fields
            'fields' => array(
                //Author field
                'author' => '<div class="col-lg-6 col-sm-12 mb-4 content-name"><label class="w-100 c-gray mt-4 col-12 mb-2 fw-bold" for="">Nombre*</label><input class="col-12 w-100 fs-6" id="author" name="author" type="text" aria-required="true" placeholder="'. $comment_author .'"></input></div>',
                //Email Field
                'email' => '<div class="col-lg-6 col-sm-12 mb-4 content-email"><label class="w-100 c-gray mt-4 col-12 mb-2 fw-bold" for="">Email</label><br /><input class="col-12 w-100 fs-6" id="email" name="email" placeholder="' . $comment_email .'"></input></div>',
                //URL Field
                'url' => '<p class="d-none comment-form-url"><br /><input id="url" name="url" placeholder="' . $comment_url .'"></input></p>',
                //Cookies
                'cookies' => '<p><input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a><p>',
            ),
            // Change the title of send button
            'label_submit' => __( $comment_send ),
            // Change the title of the reply section
            'title_reply' => __( $comment_reply ),
            // Change the title of the reply section
            'title_reply_to' => __( $comment_reply_to ),
            //Cancel Reply Text
            'cancel_reply_link' => __( $comment_cancel ),
            // Redefine your own textarea (the comment body).
            'comment_field' => '<div class="col-12 content-message"><label class="c-gray col-12 mb-2 fw-bold" for="">Mensaje</label><textarea class="col-12 w-100 mb-3" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . $comment_body .'"></textarea></div>',
            //Message Before Comment
            'comment_notes_before' => '<p>'. $comment_before . '</p>',
            // Remove "Text or HTML to be displayed after the set of comment fields".
            'comment_notes_after' => '',
            //Submit Button ID
            'id_submit' => __( 'comment-submit' ),
            //clase del boton
            'class_submit' => 'button-naranja',
        );
        if ( comments_open() ) { comment_form($comments_args); }
        ?>
    </div>
</div>
</div>