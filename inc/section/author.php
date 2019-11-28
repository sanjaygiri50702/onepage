<?php
function onepage_add_author_section(){
    $options = onepage_get_theme_options();
    if(intval($options['author_section_enable'])!==1){
        return ;
    }
//    $section_details = onepage_author_section_details();
    onepage_render_author_section($options);

}
//function onepage_author_section_details(){
//    $options = onepage_get_theme_options();
//    $content['title'] = $options['author_title'];
//    $content['subtitle'] = $options['author_subtitle'];
//    $content['description'] = $options['author_description'];
//
//    return $content;
//}
function onepage_render_author_section($content = array()){ ?>
    <div id="author" class="col-2 relative">
        <div class="container">
            <div class="author-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 600, "dots": false, "arrows":true, "autoplay": true, "fade": false }'>
                <div class="slick-item">
                    <div class="hentry">
                        <div class="featured-image" style="background-image: url(<?php echo get_template_directory_uri().'/assets/uploads/author-slider.png'?>);"></div>
                    </div><!-- .hentry -->
                    <div class="hentry">
                        <div class="author-slider-content">
                            <header class="entry-header">
                                <h2 class="entry-title"><?php echo esc_html($content['author_title']);?></h2>
                                <span><?php echo esc_html($content['author_subtitle']);?></span>
                            </header><!-- .entry-header -->
                            <div class="entry-content">
                                <p><?php echo esc_html($content['author_description']);?></p>
                            </div><!-- .entry-content -->
                            <ul class="social-icons">
                                <?php
                                $social_link = $content['author_social_link'];
                                $social_link = explode(',',$social_link);
                                foreach ($social_link as $link) :?>
                                <?php if(!empty($link)):?>
                                    <li><a href="<?php echo esc_url($link);?>"><span class="screen-reader-text"></span></a></li>
                                <?php endif; endforeach; ?>
                            </ul><!-- .social-icons -->
                        </div><!-- .author-slider-content -->
                    </div><!-- .hentry -->
                </div><!-- .slick-item -->
            </div><!-- .author-slider -->
        </div><!-- .container -->
    </div><!-- #author -->
<?php } ?>
