<?php get_header(); ?>
<div class="container template-part">
    <div class="page-section clear">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="blog-posts-wrapper col-3 clear">
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $query = new WP_Query(array(
                        'post_type'=>'post',
                        'posts_per_page'=>get_option('posts_per_page'),
                        'paged'=>$paged
                    ));
                    if($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            get_template_part('templates-part/content');
                        endwhile;
                    endif;
                    wp_reset_query();?>
            </main><!-- #main -->
            <?php the_posts_pagination(); ?>
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .page-section -->
</div><!-- .container -->
</div><!-- #content -->
<?php get_footer();?>