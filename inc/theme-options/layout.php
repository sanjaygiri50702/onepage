<?php
$wp_customize->add_section('onepage_theme_option_layout',array(
    'title'=>__('layout','onepagetheme'),
    'panel'=>'theme_option_section'
));
$wp_customize->add_setting('onepage_theme_option_single_page_layout',array(
    'transport'=>'refresh',
    'default'=>'no-sidebar'
));
$wp_customize->add_control('onepage_theme_option_single_page_layout',array(
    'label'=>esc_html__( 'Posts Sidebar Position','onepagetheme' ),
    'type'=>'select',
    'section'=>'onepage_theme_option_layout',
    'choices'=>array(
        'no-sidebar'=>__('no-sidebar'),
        'content-width no-sidebar'=>__('content width'),
        'left-sidebar'=>__('left sidebar'),
        'right-sidebar'=>__('right sidebar')
    )
));
$wp_customize->add_setting('onepage_theme_option_blog_page_layout',array(
    'transport'=>'refresh',
    'default'=>'full-width'
));
$wp_customize->add_control('onepage_theme_option_blog_page_layout',array(
    'label'=>esc_html__( 'Blog Sidebar Position','onepagetheme' ),
    'type'=>'select',
    'section'=>'onepage_theme_option_layout',
    'choices'=>array(
        'full-width'=>__('Default'),
        'no-sidebar'=>__('no-sidebar'),
        'content-width no-sidebar'=>__('content width'),
        'left-sidebar'=>__('left sidebar'),
        'right-sidebar'=>__('right sidebar')
    )
));