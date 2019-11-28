<?php
function onepage_add_testimonial_section(){
    $options = onepage_get_theme_options();
    if(intval($options['testimonial_section_enable'])!==1){
        return ;
    }
    $section_details = onepage_testimonial_section_details();
    onepage_render_testimonial_section($section_details);

}
function onepage_testimonial_section_details(){
    $options = onepage_get_theme_options();
    $contents =[];
    for ($i = 1; $i <= 3; $i ++){
        array_push($contents,array(
            'title'=>array_key_exists('testimonial0'.$i.'_title',$options) ? $options['testimonial0'.$i.'_title'] : $options['testimonial_title'],
            'description'=>array_key_exists('testimonial0'.$i.'_description',$options) ? $options['testimonial0'.$i.'_description'] : $options['testimonial_description'],
            'author'=>array_key_exists('testimonial0'.$i.'_author',$options) ? $options['testimonial0'.$i.'_author'] : $options['testimonial_author'],
        ));
    }
    return $contents;
}
function onepage_render_testimonial_section($contents = array()){ ?>
    <div id="testimonial" class="page-section relative no-padding-bottom" style="background-image: url(<?php echo get_template_directory_uri(). '/assets/uploads/testimonial.jpg'?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="testimonial-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 1000, "dots": true, "arrows":false, "autoplay": true, "fade": false }'>
                <?php foreach ($contents as $content):?>
                    <div class="testimonial-wrapper">
                        <img src="<?php echo get_template_directory_uri(). '/assets/uploads/testimonial.png'?>" alt="testimonial">
                        <div class="testimonials-content">
                            <h2><?php echo esc_html($content['title']);?></h2>
                            <p><?php echo esc_html($content['description']);?></p>
                            <span class="clients-name">- <?php echo esc_html($content['author']);?></span>
                        </div><!-- .testimonials-content -->
                    </div><!-- .testimonial-wrapper -->
                <?php endforeach; ?>
            </div><!-- .testimonial-slider -->
        </div><!-- .container -->
    </div><!-- #testimonial -->

<?php }?>