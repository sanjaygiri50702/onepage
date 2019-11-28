<?php

if ( ! function_exists( 'onepage_setup' ) ) :
	function onepage_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'onepage' ),
				'footer' => __( 'Footer Menu', 'onepage' ),
				'social' => __( 'Social Links Menu', 'onepage' ),
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		$args = array(
			'flex-width'    => true,
			'width'         => 980,
			'flex-height'    => true,
			'height'        => 200,
			'default-image' => get_template_directory_uri() . '/assets/video/video.jpg',
		);
		add_theme_support( 'custom-header', $args );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
	}
endif;
add_action( 'after_setup_theme', 'onepage_setup' );
function onepage_scripts(){
	wp_enqueue_style( 'slick', get_template_directory_uri(  ) . '/assets/css/slick.css');
	wp_enqueue_style( 'style', get_template_directory_uri(  ) . '/style.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri(  ) . '/assets/css/slick-theme.css');
	wp_enqueue_style( 'font', get_template_directory_uri(  ) . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'black', get_template_directory_uri(  ) . '/assets/css/black.css');
	wp_enqueue_script( 'jquery', get_template_directory_uri(  ) . '/assets/js/jquery-1.12.4.min.js' );
	wp_enqueue_script( 'slick', get_template_directory_uri(  ) . '/assets/js/slick.js' );
	wp_enqueue_script( 'custom', get_template_directory_uri(  ) . '/assets/js/custom.js' );
	wp_enqueue_script( 'slick-min', get_template_directory_uri(  ) . '/assets/js/slick.min.js' );
	wp_enqueue_script( 'google-min', get_template_directory_uri(  ) . '/assets/js/jquery.googlemap.js' );
}
add_action( 'wp_enqueue_scripts', 'onepage_scripts');
function onepage_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'magazinews-pro' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'magazinews-pro' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebars( 4, array(
        'name'          => esc_html__( 'Optional Sidebar %d', 'magazinews-pro' ),
        'id'            => 'optional-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'magazinews-pro' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'onepage_widgets_init' );
add_filter('excerpt_length',function ($length){
    return 10;
});

require get_template_directory() .'/inc/defaults.php';
function onepage_customize_register( $wp_customize ) {
    $options = onepage_get_default_theme_options();
    $wp_customize->add_section( 'onepage_footer_section' , array(
        'title' => esc_html__( 'Footer', 'onepagetheme' ),
        'priority' => 105, // Before Widgets.
    ));
    $wp_customize->add_setting('onepage_footer_text_setting',array(
        'default'=>'ipsum',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage_footer_text_setting',array(
        'label'=>esc_html__( 'Footer Text','onepagetheme' ),
        'type'=>'text',
        'section'=>'onepage_footer_section',
    ));
	$wp_customize->add_panel( 'section', array(
		'title' =>esc_html__('Homepage Section','onepagetheme'),
		'description' =>__( 'Cras placerat ipsum sit amet vehicula rhoncus' ),
		'priority' => 160
	  ) );
    $wp_customize->add_panel( 'theme_option_section', array(
        'title' => esc_html__( 'Theme options','onepagetheme' ),
        'description' =>__( 'Cras placerat ipsum sit amet vehicula rhoncus' ),
        'priority' => 180
    ) );
    require get_template_directory() . '/inc/custom-controls.php';
    //load about section
	require get_template_directory() . '/inc/customizer/about.php';
	//load service section
	require get_template_directory() . '/inc/customizer/service.php';
	//load counter section
	require get_template_directory() . '/inc/customizer/counter.php';
	//load portfolio section
	require get_template_directory() . '/inc/customizer/portfolio.php';
	//load author section
    require get_template_directory() . '/inc/customizer/author.php';
    //load blog section
    require get_template_directory() . '/inc/customizer/blog.php';
    //load team section
    require get_template_directory() . '/inc/customizer/team.php';
    //load client section
    require get_template_directory() . '/inc/customizer/client.php';
    //load testimonial section
    require get_template_directory() . '/inc/customizer/testimonial.php';
    //load layout section
    require get_template_directory() . '/inc/theme-options/layout.php';
  }
  add_action( 'customize_register', 'onepage_customize_register' );
require get_template_directory() . '/inc/section/about.php';
require get_template_directory() . '/inc/section/services.php';
require get_template_directory() . '/inc/section/counter.php';
require get_template_directory() . '/inc/section/portfolio.php';
require get_template_directory() . '/inc/section/author.php';
require get_template_directory() . '/inc/section/blog.php';
require get_template_directory() . '/inc/section/testimonial.php';
require get_template_directory() . '/inc/section/team.php';
require get_template_directory() . '/inc/section/client.php';
require get_template_directory() . '/inc/section/contact.php';
require get_template_directory() . '/inc/helper.php';
require get_template_directory() . '/inc/sanitize.php';
require get_template_directory() . '/inc/validation.php';
require get_template_directory() . '/inc/active-callbacks.php';
require get_template_directory() . '/inc/color-switcher.php';
require get_template_directory() . '/inc/icon-menu.php';
require get_template_directory() . '/classes/class-onepage-walker-comment.php';
require get_template_directory() . '/inc/template-tags.php';
?>