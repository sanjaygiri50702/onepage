<?php
function get_category_list(){
    $cats=get_categories();
    foreach($cats as $cat){
        $cat_list[$cat->term_id]=$cat->name;
    }
    return $cat_list;
}
function get_post_list(){
    $posts=get_posts(array(
        'numberposts'=> -1,
    ));
    foreach($posts as $post){
        $post_list[$post->ID]=$post->post_title;
    }
    return $post_list;
}
function get_category_name($id){
    $category = get_the_category($id);
    return $category['0']->name;
}
function custom_body_class(){
    if(is_front_page()){
        return 'home';
    }
    elseif(is_singular()){
        return 'single-post '.get_theme_mod('onepage_theme_option_single_page_layout').'';
    }
    elseif (is_home()){
        return 'blog '.get_theme_mod('onepage_theme_option_blog_page_layout').'';
    }
}

function onepage_get_theme_options() {
    $onepage_default_options = onepage_get_default_theme_options();

    return array_merge( $onepage_default_options , get_theme_mod( 'onepage_about', $onepage_default_options ) ) ;
}
function get_testimonial_list($id){
    $choice = [];
    for($i = 1; $i <= $id; $i ++){
        $choice[$i]='Choice '.$i.'.';
    }
    return $choice;
}
function design_bar($width,$name){?>
    <div class="outer-box">
        <div class="inner-fill" style="background-color:#2223828; width:<?php echo $width ?>%">
		<span class="percent-value">
			<?php echo $width?>%
		</span>
        </div>
        <span class="skill-name"><?php echo esc_html($name);?> #</span>
    </div>
<?php }