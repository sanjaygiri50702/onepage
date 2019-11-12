<?php if(!get_theme_mod( 'onepage_author_radio_setting')){
    return ;
}?>
<?php
    $query = new WP_Query(array(
        'cat'=>22,
        'posts_per_page'=>1
    ));
?>
<div id="author" class="col-2 relative">
    <div class="container">
        <div class="author-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 600, "dots": false, "arrows":true, "autoplay": true, "fade": false }'>
        <?php if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();  ?>  
                    <div class="slick-item">
                        <div class="hentry">
                            <div class="featured-image" style="background-image: url(<?php echo get_template_directory_uri().'/assets/uploads/author-slider.png'?>);"></div>
                        </div><!-- .hentry -->
                        <div class="hentry">
                            <div class="author-slider-content">
                                <header class="entry-header">
                                    <h2 class="entry-title"><?php echo get_theme_mod( 'onepage_author_title_setting')?></h2>
                                    <span><?php echo get_theme_mod( 'onepage_author_subtitle_setting')?></span>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo get_theme_mod( 'onepage_author_description_setting');?></p>
                                </div><!-- .entry-content -->
                                <ul class="social-icons">
                                    <?php
                                    for($i = 1; $i <= 4; $i ++) {?>
                                    <li><a href="<?php echo get_theme_mod( 'onepage_author_social'.$i.'_link_setting')?>"><span class="screen-reader-text"></span></a></li>
                                    <?php } ?>
                                </ul><!-- .social-icons -->
                            </div><!-- .author-slider-content -->
                        </div><!-- .hentry -->
                    </div><!-- .slick-item -->
                <?php endwhile;
            endif;
            wp_reset_postdata()
        ?>    
        </div><!-- .author-slider -->
    </div><!-- .container -->
</div><!-- #author -->