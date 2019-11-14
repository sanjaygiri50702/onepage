<?php if(!get_theme_mod( 'onepage_portfolio_radio_setting')){
    return ;
    }?>
<div id="portfolio" class="page-section relative">
    <div class="container">
        <div class="portfolio-content-title clear">
            <header class="entry-header section-title">
                <h2 class="entry-title"><?php echo get_theme_mod( 'onepage_portfolio_title_setting'); ?></h2>
            </header><!-- .entry-header -->
            <p class="description"><?php echo get_theme_mod('onepage_portfolio_description_setting');?></p>
        </div><!-- portfolio-content -->
        <div class="entry-content col-<?php echo get_theme_mod('onepage_portfolio_post_col_setting');?>">
            <div class="row">
                <div class="portfolio-item">
                <?php
                if(get_theme_mod('onepage_portfolio_contenttype_setting')=='post'){
                   for ($i = 1; $i <= get_theme_mod('onepage_portfolio_post_number_setting'); $i++) {?>
                        <div class="hentry">
                            <figure>
                                <a href="<?php the_permalink();?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_theme_mod('onepage_portfolio_post'.$i.'_setting'));?>" alt="">
                                </a>
                            </figure>
                            <div class="portfolio-title">
                                <h4><a href="<?php echo get_permalink(get_theme_mod('onepage_portfolio_post'.$i.'_setting'));?>"><?php echo get_the_title(get_theme_mod('onepage_portfolio_post'.$i.'_setting'));?></a></h4>
                            </div><!-- .portfolio-title -->

                            <div class="entry-summary">
                                <?php echo get_the_content(null,false,get_theme_mod('onepage_portfolio_post'.$i.'_setting'));?>
                            </div><!-- .entry-summary -->
                        </div><!---.hentry--->
                    <?php }
                }
                else{
                    $cat_query = new WP_Query(array(
                        'cat'=>get_theme_mod('onepage_portfolio_category_setting'),
                        'posts_per_page'=>get_theme_mod('onepage_portfolio_post_number_setting')
                    ));
                    if($cat_query->have_posts()){
                        while($cat_query->have_posts()){
                            $cat_query->the_post();?>
                            <div class="hentry">
                            <figure>
                                <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a>
                            </figure>
                            <div class="portfolio-title">
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            </div><!-- .portfolio-title -->

                            <div class="entry-summary">
                                <?php echo get_the_excerpt();?>
                            </div><!-- .entry-summary -->
                        </div><!---.hentry--->
                        <?php
                        }
                    }
                    wp_reset_postdata();
                }
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