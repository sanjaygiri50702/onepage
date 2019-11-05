<?php

if ( ! function_exists( 'onepage_setup' ) ) :
	function onepage_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'onepage' ),
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
	wp_enqueue_script( 'slick-min', get_template_directory_uri(  ) . '/assets/js/slick-min.js' );
	wp_enqueue_script( 'google-min', get_template_directory_uri(  ) . '/assets/js/jquery.googlemap.js' );
}
add_action( 'wp_enqueue_scripts', 'onepage_scripts');
function design_bar($width,$name){?>
	<div class="outer-box">
	<div class="inner-fill" style="background-color:#2223828; width:<?php echo $width ?>%">
		<span class="percent-value">
			<?php echo $width?>%
		</span>
	</div>
	<span class="skill-name"><?php echo $name?> #</span>
</div>
<?php }
function onepage_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'section', array(
		'title' => __( 'Homepage Section' ),
		'description' =>__( 'Cras placerat ipsum sit amet vehicula rhoncus' ),
		'priority' => 160
	  ) );
	//load about section
	require get_template_directory() . '/inc/customizer/about.php';
	//load service section
	require get_template_directory() . '/inc/customizer/service.php';
	//load counter section
	require get_template_directory() . '/inc/customizer/counter.php';
	//load portfolio section
	require get_template_directory() . '/inc/customizer/portfolio.php';


  }
  add_action( 'customize_register', 'onepage_customize_register' );
  
?>