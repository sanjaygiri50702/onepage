<div id="latest-blog" class="page-section relative">
    <div class="container">
        <div class="latest-content-title clear">
            <header class="page-header section-title">
                <h2 class="page-title"><?php echo get_theme_mod('onepage_blog_title_setting','Latest Blog')?></h2>
            </header><!-- .entry-header -->
            <p class="description"><?php echo get_theme_mod('onepage_blog_description_setting','Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.')?></p>
        </div><!-- latest-content -->

        <div class="blog-posts-wrapper col-3 clear">
            <?php 
                $query = new WP_Query(array(
                    'cat'=>get_theme_mod('onepage_blog_category_setting'),
                    'posts_per_page'=>get_theme_mod('onepage_blog_post_number_setting'),
                ));
                if($query->have_posts()){
                    while($query->have_posts()):
                        $query->the_post();?>
                        <article id="post-1" class="hentry">
                            <div class="featured-image">
                                <a href="<?php the_permalink();?>"><img src="<?php echo the_post_thumbnail_url();?>"></a>
                            </div><!--.featured-image-->
                            <div class="entry-container">
                                <div class="entry-meta">
                                    <span class="cat-links">
                                        <span class="screen-reader-text">Categories</span>
                                        <a href="http://localhost/wordpress/category/cat/" rel="category tag"><?php echo get_category_name($post->ID);?></a>
                                    </span><!-- .cat-links -->

                                    <span class="posted-on">
                                        <span class="screen-reader-text">Posted on</span>
                                        <a href="<?php the_permalink();?>" rel="bookmark">
                                        <time class="entry-date published" datetime="2016-07-21T10:00:09+00:00"><?php echo get_the_date();?></time>
                                        </a>
                                    </span><!-- .posted-on -->
                                </div><!-- .entry-meta -->

                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h2>
                                </header>
                            
                                <div class="entry-content">
                                    <p><?php echo get_the_content(); ?></p>

                                    <a href="<?php the_permalink();?>" class="btn btn-fill">Read More</a>
                                </div><!--.blog-content-->
                            </div><!-- .entry-container -->
                        </article><!-- #post-1 -->
                    <?php
                    endwhile;
                }
                wp_reset_postdata();
            ?>
            
        </div><!-- .blog-wrapper -->

        <div class="align-center">
            <a href="#" class="load-more">Load more blog
                <i class="fa fa-angle-down"></i>
            </a>
        </div><!-- .align-center -->
    </div><!-- .container -->
</div><!-- #latest-blog -->
