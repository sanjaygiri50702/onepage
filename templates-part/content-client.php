<?php if(!get_theme_mod( 'onepage_client_radio_setting')){
    return ;
}?>
<div id="client" class="relative">
    <div class="container">
        <div class="regular" data-slick='{"slidesToShow": <?php echo get_theme_mod('onepage_client_number_setting',5)?>, "slidesToScroll": 1, "infinite": true, "speed": 300, "dots": false, "arrows":false, "autoplay": true, "fade": false, "draggable":true}'>
            <?php for($i = 1; $i <= get_theme_mod('onepage_client_number_setting',5); $i ++) { ?>
                <div class="client-slider">
                    <a href="<?php echo get_theme_mod('onepage_client0'.$i.'_link_setting')?>"><img src="<?php echo get_theme_mod('onepage_client0'.$i.'_image_setting',get_template_directory_uri(). '/assets/uploads/client-0'.$i.'.png')?>" alt="client-0<?php echo $i;?>"></a>
                </div><!--.client-slider-->
            <?php } ?>
        </div><!-- .regular -->
    </div><!-- container -->
</div><!-- client -->

