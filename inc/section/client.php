<?php
function onepage_add_client_section(){
    $options = onepage_get_theme_options();
    if(intval($options['client_section_enable'])!==1){
        return ;
    }
    $section_details = onepage_client_section_details();
    onepage_render_client_section($section_details);

}
function onepage_client_section_details(){
    $options = onepage_get_theme_options();
    $contents =[];
    for ($i = 1; $i <= $options['client_number']; $i ++){
        array_push($contents,array(
            'client_link'=>!empty($options['client0'.$i.'_link']) ? $options['client0'.$i.'_link']: '',
            'client_image'=>$options['client0'.$i.'_image'],
        ));
    }
    return $contents;
}
function onepage_render_client_section($contents = array()){
    $options = onepage_get_theme_options();
    ?>
<div id="client" class="relative">
    <div class="container">
        <div class="regular" data-slick='{"slidesToShow": <?php echo $options['client_number'];?>, "slidesToScroll": 1, "infinite": true, "speed": 300, "dots": false, "arrows":false, "autoplay": true, "fade": false, "draggable":true}'>
            <?php foreach ($contents as $key => $content) { $key++?>
                <div class="client-slider">
                    <a href="<?php echo esc_url($content['client_link']);?>"><img src="<?php echo esc_url($content['client_image']);?>" alt="client-0<?php echo $key;?>"></a>
                </div><!--.client-slider-->
            <?php } ?>
        </div><!-- .regular -->
    </div><!-- container -->
</div><!-- client -->
<?php }?>