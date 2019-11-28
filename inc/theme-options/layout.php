<?php
$wp_customize->add_section('onepage_theme_option_layout',array(
    'title'=>__('layout','onepagetheme'),
    'panel'=>'theme_option_section'
));
$wp_customize->add_setting('onepage[post_layout]',array(
    'transport'=>'refresh',
    'default'=>$options['post_layout']
));
$wp_customize->add_control('onepage[post_layout]',array(
    'label'=>esc_html__( 'Posts Layout','onepagetheme' ),
    'type'=>'select',
    'section'=>'onepage_theme_option_layout',
    'choices'=>array(
        'single-post no-sidebar'=>__('no-sidebar'),
        'content-width no-sidebar'=>__('content width'),
        'left-sidebar'=>__('left sidebar'),
        'right-sidebar'=>__('right sidebar')
    )
));
$wp_customize->add_setting('onepage[blog_layout]',array(
    'transport'=>'refresh',
    'default'=>$options['blog_layout']
));
$wp_customize->add_control('onepage[blog_layout]',array(
    'label'=>esc_html__( 'Blog layout','onepagetheme' ),
    'type'=>'select',
    'section'=>'onepage_theme_option_layout',
    'choices'=>array(
        'full-width'=>__('full-width'),
        'no-sidebar'=>__('no-sidebar'),
        'content-width no-sidebar'=>__('content width'),
        'left-sidebar'=>__('left sidebar'),
        'right-sidebar'=>__('right sidebar')
    )
));