<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$post_day = get_the_date( 'j' );
$post_month = get_the_date( 'M' );
?>
<?php include('template-parts/blog-banner.php') ?> 

<div class="container container-blog-post">
    <div class="row">
        
        <?php include('template-parts/blog-post-content.php') ?> 
        
        <?php include('template-parts/blog-post-comments.php') ?> 

        <div class="col-12 my-5 container-blog-noticias-single">
            <?php include('template-parts/seccion-noticias.php') ?> 
        </div>
        


    </div> <!-- end row -->
</div> <!-- end container single -->


<?php endwhile; endif; ?>
<?php get_footer(); ?>