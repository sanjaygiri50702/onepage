<?php 
$wp_customize->add_section('onepage_portfolio_section',array(
    'title'=>esc_html__( 'Portfolio','onepagetheme' ),
    'panel'=>'section'
));
$wp_customize->add_setting('onepage_portfolio_radio_setting',array(
    'transport'=>'refresh',
    'default'=>0
));
$wp_customize->add_control('onepage_portfolio_radio_setting',array(
    'label'=>esc_html__( 'Portfolio section enable','onepagetheme' ),
    'type'=>'radio',
    'section'=>'onepage_portfolio_section',
    'type'=>'radio',
    'choices'=>array(
        '1' => 'Enable',
        '0' => 'Disable')
));
$wp_customize->add_setting('onepage_portfolio_title_setting',array(
    'default'=>'portfolio',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_portfolio_title_setting',array(
    'label'=>esc_html__( 'Title','onepagetheme'),
    'type'=>'text',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage_portfolio_description_setting',array(
    'default'=>'ipsum',
    'transport'=>'postMessage',
    'sanitize_callback'=>'sanitize_textarea_field'
));
$wp_customize->add_control('onepage_portfolio_description_setting',array(
    'label'=>esc_html__( 'Description','onepagetheme' ),
    'type'=>'textarea',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'

));
$wp_customize->add_setting('onepage_portfolio_post_number_setting',array(
    'default'=>0,
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_portfolio_post_number_setting',array(
    'label'=>esc_html__( 'Number of Posts','onepagetheme'),
    'description'=>esc_html__( 'Note: Min 1 & Max 4. Please input the valid number and save. Then refresh the page to see the change.'),
    'type'=>'number',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage_portfolio_post_col_setting',array(
    'default'=>2,
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_portfolio_post_col_setting',array(
    'label'=>esc_html__( 'Posts column','onepagetheme'),
    'type'=>'number',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage_portfolio_contenttype_setting',array(
    'default'=>'ipsum',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_portfolio_contenttype_setting',array(
    'label'=>esc_html__( 'Content type','onepagetheme' ),
    'section'=>'onepage_portfolio_section',
    'type'    => 'select',
    'choices' => array(
        'category' => 'Categories',
        'post' => 'Post'
    ),
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage_portfolio_category_setting',array(
    'default'=>'ipsum',
    'transport'=>'refresh',
    'sanitize_callback'=>'onepage_sanitize_text_option'
));
$wp_customize->add_control('onepage_portfolio_category_setting',array(
    'label'=>esc_html__( 'Select Category','onepagetheme' ),
    'section'=>'onepage_portfolio_section',
    'type'    => 'select',
    'choices' =>get_category_list(),
    'active_callback'=>'portfolio_category_callback'
));
for ($i = 1; $i <= get_theme_mod('onepage_portfolio_post_number_setting'); $i++) {
    $wp_customize->add_setting('onepage_portfolio_post'.$i.'_setting',array(
        'default'=>'ipsum',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage_portfolio_post'.$i.'_setting',array(
        'label'=>esc_html__( 'Select Post '.$i.'.','onepagetheme' ),
        'section'=>'onepage_portfolio_section',
        'type'    => 'select',
        'choices' =>get_post_list(),
        'active_callback'=>'portfolio_post_callback'
    ));
}

