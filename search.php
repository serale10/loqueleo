<?php get_header(); ?>
<main id="content" role="main">
    <div class="container container-blog-grid container-search mt-5">
        <div class="row">
            <div class="d-none d-lg-block col-lg-3">
                <?php get_template_part('template-parts/blog-category-sidebar') ?>
            </div>
            <div class="col-lg-9">
                <?php if ( have_posts() ) : ?>
                    <header class="header">
                        <h1 class="entry-title c-gray" itemprop="name"><?php printf( esc_html__( 'Mostrando resultados para: %s', 'generic' ), get_search_query() ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); 
                    $post_date = get_the_date( 'j M, Y' );?>
                        <?php get_template_part( 'entry' ); ?>  
                        <div class="col-9 col-sm-10 col-md-11 mb-4">
                            <div class="row">
                                <div class="col-auto"><?php echo $post_date; ?></div>
                                <div class="col-auto"><i class="far fa-user pe-2"></i> By <a class="text-decoration-none c-blue pe-2" href="#"><?php the_author(); ?></a></div>
                                <div class="col-auto category"><i class="far fa-folder pe-2"></i> <?php the_category(); ?></div>
                                <div class="col-auto"><i class="fa-regular fa-message pe-2"></i> <a class="text-decoration-none c-blue pe-2" href="#"><?php echo get_comments_number(); ?> Comentarios</a></div>
                            </div>
                        </div>
                    <?php endwhile; wp_pagenavi(); ?>
                    <?php //get_template_part( 'nav', 'below' ); ?>
                <?php else : ?>
                    <article id="post-0" class="post no-results not-found">
                        <header class="header">
                            <h1 class="entry-title" itemprop="name"><?php esc_html_e( 'No encontrado', 'generic' ); ?></h1>
                        </header>
                        <div class="entry-content" itemprop="mainContentOfPage">
                            <p><?php esc_html_e( 'Lo Sentimos, no se encontraron resultados. Porfavor prueba de nuevo.', 'generic' ); ?></p>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>