<?php 
$wp_customize->add_section('onepage_portfolio_section',array(
    'title'=>esc_html__( 'Portfolio','onepagetheme' ),
    'panel'=>'section'
));
$wp_customize->add_setting('onepage_portfolio_title_setting',array(
    'default'=>'portfolio',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_portfolio_title_setting',array(
    'label'=>esc_html__( 'Title','onepagetheme'),
    'type'=>'text',
    'section'=>'onepage_portfolio_section'
));
$wp_customize->add_setting('onepage_portfolio_description_setting',array(
    'default'=>'ipsum',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_textarea_field'
));
$wp_customize->add_control('onepage_portfolio_description_setting',array(
    'label'=>esc_html__( 'Description','onepagetheme' ),
    'type'=>'textarea',
    'section'=>'onepage_portfolio_section'
));
?>