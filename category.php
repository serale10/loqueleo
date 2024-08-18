<?php get_header(); ?>
<div class="container container-blog-grid py-4">
    <div class="row">
        <div class="col-lg-3">
            <aside class="sidebar categories-blog">
                <form action="page-search-results.html" method="get">
                    <div class="input-group mb-3 pb-1">
                        <input class="form-control fs-6 rounded-start h-auto border-1 border ps-4" placeholder="Buscar..." name="s" id="s" type="text">
                        <button type="submit" class="b-gray fs-6 p-2 rounded-end border-0"><i class="fas fa-search m-2 c-white"></i></button>
                    </div>
                </form>
                <h5 class="fw-bold fs-5 text-uppercase c-gray pt-4">Categorías</h5> 
                <ul class="nav categories-nav-list flex-column mb-5">
                    <?php 
                        $categories = get_categories(); 
                        $active_category = get_category( get_query_var( 'cat' ) );
                        $active_category_id = $active_category->cat_ID;      
                        foreach ($categories as $category){ 
                            $category_id= $category->term_id;
                            $cat_count = get_category($category_id);
                            $current_category = '';
                            if ($category_id == $active_category_id) {
                                $current_category = 'active';
                            }
                    ?>
                        <li class="<?php echo $current_category; ?>">
                            <a href="<?php echo get_category_link($category->term_id); ?>">
                                <?php echo $category->cat_name . " (" . $cat_count->count . ")"; ?> 
                            </a>
                        </li>  
                    <?php 
                        }
                    ?>
                </ul>
                <h5 class="fw-bolder c-gray text-uppercase pt-4">Sobre Nosotros</h5>
                <p class="c-gray">Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
            </aside>
        </div>
        <div class="col-lg-9">
            <div class="blog-posts">
                <div class="row px-3">          
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
                    <div class="col-sm-6 list-item">
                        <article class="post post-medium border-0 pb-0 mb-5">
                            <div class="post-image">
                                <a href="<?php the_permalink();?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="position-relative w-100 h-auto border-0 rounded-0" alt="" />
                                </a>
                            </div>
                            <div class="post-content">
                                <h2 class="fw-bold fs-4 line-height-6 mt-3 mb-2"><a class="text-decoration-none c-blue" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                <p class="c-gray fs-6 text-justify">
                                <?php 
                                $char_limit = 160; //character limit
                                $content = $post->post_content; //contents saved in a variable
                                echo substr(strip_tags($content), 0, $char_limit);
                                ?>...
                                </p>
                                <div class="post-meta c-gray pe-2">
                                    <span><i class="far fa-user pe-2"></i> By <a class="text-decoration-none c-blue pe-2" href="#"><?php the_author(); ?></a> </span>
                                    <span><i class="far fa-folder pe-2"></i> <?php the_category(); ?> </span>
                                    <span><i class="fa-regular fa-message pe-2"></i> <a class="text-decoration-none c-blue pe-2" href="<?php echo get_comments_link(); ?>"><?php echo get_comments_number(); ?> Comentario</a></span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php endwhile; wp_pagenavi(); endif; ?>
                </div>
            </div> <!--final blogpost-->   
        </div>
    </div>
</div>

<?php get_footer(); ?>