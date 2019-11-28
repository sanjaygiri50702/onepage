<?php
function get_category_list(){
    $cats=get_categories();
    $cat_list = [];
    foreach($cats as $cat){
        $cat_list[$cat->term_id]=$cat->name;
    }
    return $cat_list;
}
function get_page_list(){
    $page_list = [];
    $pages=get_pages(array(
        'number'=> 0,
    ));
    foreach($pages as $page){
        $page_list[$page->ID]=$page->post_title;
    }
    return $page_list;
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
function onepage_get_theme_options() {
    $onepage_default_options = onepage_get_default_theme_options();

    return array_merge( $onepage_default_options , get_theme_mod( 'onepage', $onepage_default_options ) ) ;
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
        <div class="inner-fill" style="background-color:#2223828; width:<?php esc_attr_e(absint($width));?>%">
		<span class="percent-value">
			<?php esc_html_e($width);?>%
		</span>
        </div>
        <span class="skill-name"><?php esc_html_e($name);?> #</span>
    </div>
<?php }
add_filter('body_class',function ($class){
    $onepage_default_options = onepage_get_theme_options();
    if(is_front_page())
        return array('home');
    elseif (is_page())
        return array_merge($class,explode(' ',$onepage_default_options['page_layout']));
    elseif (is_single())
        return array_merge($class,explode(' ',$onepage_default_options['post_layout']));
    elseif (! is_front_page() && is_home())
        return array_merge($class,explode(' ',$onepage_default_options['blog_layout']));
    elseif (is_archive())
        return array_merge($class,array('no-sidebar'));
    return $class;
});
