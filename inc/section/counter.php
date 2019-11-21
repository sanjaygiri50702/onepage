<?php
function onepage_add_counter_section(){
    $options = onepage_get_theme_options();
    if(intval($options['counter_section_enable'])!==1){
        return ;
    }
    $section_details = onepage_counter_section_details();
    onepage_render_counter_section($section_details);
}
function onepage_counter_section_details(){
    $options = onepage_get_theme_options();
    return $options;
}
function onepage_render_counter_section($content = array()){ ?>
    <div id="counter" class="page-section relative col-4" style="background-image: url("<?php echo get_template_directory_uri().'/assets/uploads/counter.jpg'?>")">
    <div class="overlay"></div>
    <div class="container">
        <?php for($i = 1; $i <= 4; $i ++):?>
        <div class="hentry">
            <div class="statwrap">
                <i class="fa <?php echo $content['counter0'.$i.'_icon'];?>"></i>
                <h1 class="stat-count"><?php echo $content['counter0'.$i.'_value'];?></h1>
                <small><?php echo $content['counter0'.$i.'_title']?></small>
            </div><!-- .statwrap -->
        </div><!-- .hentry -->
    <?php endfor;?>
    </div><!-- .container -->
    </div><!-- #counter -->
<?php }?>
