<?php
$wp_customize->add_section('onepage_blog_section', array(
    'title' => esc_html__('Blog', 'onepagetheme'),
    'panel' => 'section'
));
$wp_customize->add_setting('onepage_blog_radio_setting', array(
    'transport' => 'refresh',
    'default' =>0
));
$wp_customize->add_control('onepage_blog_radio_setting', array(
    'label' => esc_html__('Blog posts section enable', 'onepagetheme'),
    'type' => 'radio',
    'section' => 'onepage_blog_section',
    'type' => 'radio',
    'choices' => array(
        '1' => 'Enable',
        '0' => 'Disable')
));
$wp_customize->add_setting('onepage_blog_title_setting', array(
    'default' => 'latest blog',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage_blog_title_setting', array(
    'label' => esc_html__('Title', 'onepagetheme'),
    'type' => 'text',
    'section' => 'onepage_blog_section',
    'active_callback' => 'blog_radio_callback'
));
$wp_customize->add_setting('onepage_blog_description_setting', array(
    'default' => 'Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_textarea_field'
));
$wp_customize->add_control('onepage_blog_description_setting', array(
    'label' => esc_html__('Description', 'onepagetheme'),
    'type' => 'textarea',
    'section' => 'onepage_blog_section',
    'active_callback' => 'blog_radio_callback'

));
$wp_customize->add_setting('onepage_blog_post_number_setting', array(
    'default' =>4,
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage_blog_post_number_setting', array(
    'label' => esc_html__('Number of Posts', 'onepagetheme'),
    'description' => esc_html__('Note: Min 1 & Max 4. Please input the valid number and save. Then refresh the page to see the change.'),
    'type' => 'number',
    'section' => 'onepage_blog_section',
    'active_callback' => 'blog_radio_callback'
));
$wp_customize->add_setting('onepage_blog_contenttype_setting', array(
    'default' => 'ipsum',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage_blog_contenttype_setting', array(
    'label' => esc_html__('Content type', 'onepagetheme'),
    'section' => 'onepage_blog_section',
    'type' => 'select',
    'choices' => array(
        'category' => 'Categories',
        'post' => 'Post'
    ),
    'active_callback' => 'blog_radio_callback'
));
$wp_customize->add_setting('onepage_blog_category_setting', array(
    'default' => 'ipsum',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage_blog_category_setting', array(
    'label' => esc_html__('Select Category', 'onepagetheme'),
    'section' => 'onepage_blog_section',
    'type' => 'select',
    'choices' => get_category_list(),
    'active_callback' => 'blog_category_callback'
));
for ($i = 1; $i <= $wp_customize->get_setting('onepage_blog_post_number_setting')->value(); $i++) {
    $wp_customize->add_setting('onepage_blog_post'. $i . '_setting', array(
        'default' => 'ipsum',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage_blog_post' . $i . '_setting', array(
        'label' => esc_html__('Select Post ' . $i . '.', 'onepagetheme'),
        'section' => 'onepage_blog_section',
        'type' => 'select',
        'choices' => get_post_list(),
        'active_callback' => 'blog_post_callback'
    ));
}



