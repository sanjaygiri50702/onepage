<?php 
$wp_customize->add_section('onepage_portfolio_section',array(
    'title'=>esc_html__( 'Portfolio','onepagetheme' ),
    'panel'=>'section'
));
$wp_customize->add_setting('onepage[portfolio_section_enable]',array(
    'transport'=>'refresh',
    'default'=>$options['portfolio_section_enable']
));
$wp_customize->add_control('onepage[portfolio_section_enable]',array(
    'label'=>esc_html__( 'Portfolio section enable','onepagetheme' ),
    'type'=>'radio',
    'section'=>'onepage_portfolio_section',
    'type'=>'radio',
    'choices'=>array(
        '1' => 'Enable',
        '0' => 'Disable')
));
$wp_customize->add_setting('onepage[portfolio_title]',array(
    'default'=>$options['portfolio_title'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage[portfolio_title]',array(
    'label'=>esc_html__( 'Title','onepagetheme'),
    'type'=>'text',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage[portfolio_description]',array(
    'default'=>$options['portfolio_description'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_textarea_field'
));
$wp_customize->add_control('onepage[portfolio_description]',array(
    'label'=>esc_html__( 'Description','onepagetheme' ),
    'type'=>'textarea',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'

));
$wp_customize->add_setting('onepage[portfolio_post_number]',array(
    'default'=>4,
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage[portfolio_post_number]',array(
    'label'=>esc_html__( 'Number of Posts','onepagetheme'),
    'description'=>esc_html__( 'Note: Min 1 & Max 4. Please input the valid number and save. Then refresh the page to see the change.'),
    'type'=>'number',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage[portfolio_post_col]',array(
    'default'=>2,
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage[portfolio_post_col]',array(
    'label'=>esc_html__( 'Posts column','onepagetheme'),
    'type'=>'number',
    'section'=>'onepage_portfolio_section',
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage[portfolio_content_type]',array(
    'default'=>$options['portfolio_content_type'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage[portfolio_content_type]',array(
    'label'=>esc_html__( 'Content type','onepagetheme' ),
    'section'=>'onepage_portfolio_section',
    'type'    => 'select',
    'choices' => array(
        'category' => 'Categories',
        'post' => 'Post',
        'page' =>'Page'
    ),
    'active_callback'=>'portfolio_radio_callback'
));
$wp_customize->add_setting('onepage[portfolio_category]',array(
    'transport'=>'refresh',
));
$wp_customize->add_control('onepage[portfolio_category]',array(
    'label'=>esc_html__( 'Select Category','onepagetheme' ),
    'section'=>'onepage_portfolio_section',
    'type'    => 'select',
    'choices' =>get_category_list(),
    'active_callback'=>'portfolio_category_callback'
));
for ($i = 1; $i <= $options['portfolio_post_number']; $i++) {
    $wp_customize->add_setting('onepage[portfolio_post'.$i.']',array(
        'default'=>'ipsum',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage[portfolio_post'.$i.']',array(
        'label'=>esc_html__( 'Select Post '.$i.'.','onepagetheme' ),
        'section'=>'onepage_portfolio_section',
        'type'    => 'select',
        'choices' =>get_post_list(),
        'active_callback'=>'portfolio_post_callback'

    ));
}
for ($i = 1; $i <= $options['portfolio_post_number']; $i++) {
    $wp_customize->add_setting('onepage[portfolio_page'.$i.']',array(
        'default'=>'ipsum',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage[portfolio_page'.$i.']',array(
        'label'=>esc_html__( 'Select Page '.$i.'.','onepagetheme' ),
        'section'=>'onepage_portfolio_section',
        'type'    => 'select',
        'choices' =>get_page_list(),
        'active_callback'=>'portfolio_page_callback'

    ));
}

