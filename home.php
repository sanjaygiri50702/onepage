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
                        ?>
                        <article id="post-1" class="hentry">
                            <div class="featured-image">
                                <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>"></a>
                            </div><!--.featured-image-->
                            <div class="entry-container">
                                <div class="entry-meta">
                                        <span class="cat-links">
                                            <span class="screen-reader-text">Categories</span>
                                            <a href="#" rel="category tag"><?php echo get_the_category($post->ID)[0]->name?></a>
                                        </span><!-- .cat-links -->

                                    <span class="posted-on">
                                            <span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark">
                                              <time class="entry-date published" datetime="2016-07-21T10:00:09+00:00"><?php echo get_the_date();?></time>
                                            </a>
                                        </span><!-- .posted-on -->

                                    <span class="byline"> by <span class="author vcard">
                                            <a class="url fn n" href="https://themepalacedemo.com/loud-pro/author/tpauthor/"><?php the_author_meta('display_name');?></a></span>
                                        </span><!-- .byline -->
                                </div><!-- .entry-meta -->

                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h2>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p><?php the_excerpt();?></p>

                                    <a href="<?php the_permalink();?>" class="btn btn-fill">Read More</a>
                                </div><!--.blog-content-->
                            </div><!-- .entry-container -->
                        </article><!-- #post-1 -->
                        <?php endwhile;
                        endif;
                            wp_reset_query();?>
                </main><!-- #main -->
                <?php the_posts_pagination(); ?>
            </div><!-- #primary -->
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <aside class="widget-area" id="secondary" role="complementary">
                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                    <div class="widget-column footer-widget-1">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                    <?php } ?>
                </aside><!-- .widget-area -->
            <?php endif; ?>
        </div><!-- .page-section -->
    </div><!-- .container -->
</div><!-- #content -->
<?php get_footer();?>