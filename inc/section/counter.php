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
    $contents =[];
    for ($i = 1; $i <= 4; $i ++){
        array_push($contents,array(
            'icon'=>$options['counter0'.$i.'_icon'],
            'value'=>$options['counter0'.$i.'_value'],
            'title'=>$options['counter0'.$i.'_title'],
        ));
    }
    return $contents;
}
function onepage_render_counter_section($contents = array()){ ?>
    <div id="counter" class="page-section relative col-4" style="background-image: url("<?php echo get_template_directory_uri().'/assets/uploads/counter.jpg'?>")">
    <div class="overlay"></div>
    <div class="container">
        <?php foreach ($contents as $content):?>
        <div class="hentry">
            <div class="statwrap">
                <i class="fa <?php esc_attr_e($content['icon']);?>"></i>
                <h1 class="stat-count"><?php echo absint($content['value']);?></h1>
                <small><?php esc_html_e($content['title']);?></small>
            </div><!-- .statwrap -->
        </div><!-- .hentry -->
    <?php endforeach;?>
    </div><!-- .container -->
    </div><!-- #counter -->
<?php }?>
