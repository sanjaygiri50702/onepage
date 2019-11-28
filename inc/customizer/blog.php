<?php
$wp_customize->add_section('onepage_blog_section', array(
    'title' => esc_html__('Blog', 'onepagetheme'),
    'panel' => 'section'
));
//$wp_customize->add_setting('onepage[blog_section_enable]', array(
//    'transport' => 'refresh',
//    'default' =>$options['blog_section_enable']
//));
//$wp_customize->add_control('onepage[blog_section_enable]', array(
//    'label' => esc_html__('Blog posts section enable', 'onepagetheme'),
//    'type' => 'radio',
//    'section' => 'onepage_blog_section',
//    'type' => 'radio',
//    'choices' => array(
//        '1' => 'Enable',
//        '0' => 'Disable'
//    )
//));
$wp_customize->add_setting( 'onepage[blog_section_enable]', array(
    'default' => $options['blog_section_enable'],
    'transport' => 'refresh',
    )
);
$wp_customize->add_control( new Onepage_toggle_switch( $wp_customize, 'onepage[blog_section_enable]',
    array(
        'label' => esc_html__( 'Blog posts section enable' ),
        'section' => 'onepage_blog_section'
    )
));
$wp_customize->add_setting('onepage[blog_title]', array(
    'default' =>$options['blog_title'],
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage[blog_title]', array(
    'label' => esc_html__('Title', 'onepagetheme'),
    'type' => 'text',
    'section' => 'onepage_blog_section',
    'active_callback' => 'blog_radio_callback'
));
$wp_customize->add_setting('onepage[blog_description]', array(
    'default' =>$options['blog_description'],
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_textarea_field'
));
$wp_customize->add_control('onepage[blog_description]', array(
    'label' => esc_html__('Description', 'onepagetheme'),
    'type' => 'textarea',
    'section' => 'onepage_blog_section',
    'active_callback' => 'blog_radio_callback'

));
$wp_customize->add_setting('onepage[blog_post_number]', array(
    'default' =>$options['blog_post_number'],
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage[blog_post_number]', array(
    'label' => esc_html__('Number of Posts', 'onepagetheme'),
    'description' => esc_html__('Note: Min 1 & Max 4. Please input the valid number and save. Then refresh the page to see the change.'),
    'type' => 'number',
    'section' => 'onepage_blog_section',
    'active_callback' => 'blog_radio_callback'
));
$wp_customize->add_setting('onepage[blog_content_type]', array(
    'default' =>$options['blog_content_type'],
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage[blog_content_type]', array(
    'label' => esc_html__('Content type', 'onepagetheme'),
    'section' => 'onepage_blog_section',
    'type' => 'select',
    'choices' => array(
        'category' => 'Categories',
        'post' => 'Post',
        'page'=>'Pages'
    ),
    'active_callback' => 'blog_radio_callback'
));
$wp_customize->add_setting('onepage[blog_category]', array(
    'transport' => 'refresh',
));
$wp_customize->add_control('onepage[blog_category]', array(
    'label' => esc_html__('Select Category', 'onepagetheme'),
    'section' => 'onepage_blog_section',
    'type' => 'select',
    'choices' => get_category_list(),
    'active_callback' => 'blog_category_callback'
));
for ($i = 1; $i <= $options['blog_post_number']; $i++) {
    $wp_customize->add_setting('onepage[blog_post'.$i.']', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage[blog_post'.$i.']', array(
        'label' => esc_html__('Select Post ' . $i . '.', 'onepagetheme'),
        'section' => 'onepage_blog_section',
        'type' => 'select',
        'choices' => get_post_list(),
        'active_callback' => 'blog_post_callback'
    ));
}
for ($i = 1; $i <= $options['blog_post_number']; $i++) {
    $wp_customize->add_setting('onepage[blog_page'.$i.']',array(
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage[blog_page'.$i.']',array(
        'label'=>esc_html__( 'Select Page '.$i.'.','onepagetheme' ),
        'section'=>'onepage_blog_section',
        'type'    => 'select',
        'choices' =>get_page_list(),
        'active_callback' => 'blog_page_callback'

    ));
}
//


