
<div id="portfolio" class="page-section relative">
    <div class="container">
        <div class="portfolio-content-title clear">
        <?php 
            $query = new WP_Query(array(
                    'cat'=>20,
                    'posts_per_page'=>4
            ));
        ?>
            <header class="entry-header section-title">
                <h2 class="entry-title"><?php echo get_theme_mod( 'onepage_portfolio_title_setting'); ?></h2>
            </header><!-- .entry-header -->
            <p class="description"><?php echo get_theme_mod('onepage_portfolio_description_setting')?></p>
        </div><!-- portfolio-content -->

        <div class="entry-content col-2">
            <div class="row">
                <div class="portfolio-item">
                    <?php
                        if($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();?>
                                <div class="hentry">
                                <figure>
                                    <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a>
                                </figure>
                                <div class="portfolio-title">
                                    <h4><a href="#"><?php the_title();?></a></h4>
                                </div><!-- .portfolio-title -->

                                <div class="entry-summary">
                                    <?php echo get_the_content();?>
                                </div><!-- .entry-summary -->
                            </div><!---.hentry--->
                            <?php
                            }
                        }
                        wp_reset_postdata();
                    ?>
                </div><!-- portfolio-item -->
            </div><!-- .row -->
        </div><!-- .entry-content / col-2 -->

        <div class="align-center">
            <a href="#" class="load-more">Load more portfolio
                <i class="fa fa-angle-down"></i>
            </a>
        </div><!-- .align-center -->
    </div><!-- .container -->
</div><!-- #portfolio -->