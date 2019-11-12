<?php if(!get_theme_mod( 'onepage_testimonial_radio_setting')){
    return ;
}?>
<div id="testimonial" class="page-section relative no-padding-bottom" style="background-image: url(<?php echo get_template_directory_uri(). '/assets/uploads/testimonial.jpg'?>);">
    <div class="overlay"></div>
    <div class="container">
        <div class="testimonial-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 1000, "dots": true, "arrows":false, "autoplay": true, "fade": false }'>
            <?php for($i = 1; $i <= 3; $i ++){?>
            <div class="testimonial-wrapper">
                <img src="<?php echo get_template_directory_uri(). '/assets/uploads/testimonial.png'?>" alt="testimonial">
                <div class="testimonials-content">
                    <h2><?php echo get_theme_mod('onepage_testimonial0'.$i.'_title_setting','What people says')?></h2>
                    <p><?php echo get_theme_mod('onepage_testimonial0'.$i.'_description_setting','Cras placerat ipsum sit ameaat vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi.')?></p>
                    <span class="clients-name">- <?php echo get_theme_mod('onepage_testimonial0'.$i.'_author_setting','sudhama prajapati')?></span>
                </div><!-- .testimonials-content -->
            </div><!-- .testimonial-wrapper -->
            <?php } ?>
        </div><!-- .testimonial-slider -->
    </div><!-- .container -->
</div><!-- #testimonial -->
