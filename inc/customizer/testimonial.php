<?php
/*testimonial section*/
$wp_customize->add_section('onepage_testimonial_section',array(
    'title'=>__('Testimonial','onepagetheme'),
    'panel'=>'section'
));
$wp_customize->add_setting('onepage_testimonial_radio_setting',array(
    'transport'=>'refresh',
    'default'=>1
));
$wp_customize->add_control('onepage_testimonial_radio_setting',array(
    'label'=>esc_html__( 'About us section enable','onepagetheme' ),
    'type'=>'radio',
    'section'=>'onepage_testimonial_section',
    'type'=>'radio',
    'choices'=>array(
        '1' => 'Enable',
        '0' => 'Disable')
));
$wp_customize->add_setting('onepage_testimonial_select_radio_setting',array(
    'transport'=>'refresh',
    'default'=>1,
));
$wp_customize->add_control('onepage_testimonial_select_radio_setting',array(
    'label'=>esc_html__( 'Select Team','onepagetheme' ),
    'section'=>'onepage_testimonial_section',
    'type'=>'select',
    'choices'=>array(
        '1'=>__('Testimonial 1'),
        '2'=>__('Testimonial 2'),
        '3'=>__('Testimonial 3'),
    ),
    'active_callback' => 'onepage_testimonial_radio_callback'

));
//testimonial tittle setting
    $wp_customize->add_setting('onepage_testimonial01_title_setting', array(
        'default' => 'What people says',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage_testimonial01_title_setting', array(
        'label' => esc_html__('Title', 'onepagetheme'),
        'type' => 'text',
        'section' => 'onepage_testimonial_section',
        'active_callback' => 'onepage_testimonial_radio_callback'
    ));
//testimonial description setting
    $wp_customize->add_setting('onepage_testimonial01_description_setting', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default'=>'Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi.'
    ));
    $wp_customize->add_control('onepage_testimonial01_description_setting', array(
        'label' => esc_html__('Description ', 'onepagetheme'),
        'type' => 'textarea',
        'section' => 'onepage_testimonial_section',
        'active_callback' => 'onepage_testimonial_radio_callback'
    ));
//testimonial author setting
    $wp_customize->add_setting('onepage_testimonial01_author_setting', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
        'default'=>'sudhama prajapati'

    ));
    $wp_customize->add_control('onepage_testimonial01_author_setting', array(
        'label' => esc_html__('Author name ', 'onepagetheme'),
        'type' => 'text',
        'section' => 'onepage_testimonial_section',
        'active_callback' => 'onepage_testimonial_radio_callback'
    ));
//testimonial tittle setting
$wp_customize->add_setting('onepage_testimonial02_title_setting', array(
    'default' => 'What people says',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage_testimonial02_title_setting', array(
    'label' => esc_html__('Title 2', 'onepagetheme'),
    'type' => 'text',
    'section' => 'onepage_testimonial_section',
    'active_callback' => 'onepage_testimonial_radio_callback'
));
//testimonial description setting
$wp_customize->add_setting('onepage_testimonial02_description_setting', array(
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_textarea_field',
    'default'=>'Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi.'
));
$wp_customize->add_control('onepage_testimonial02_description_setting', array(
    'label' => esc_html__('Description 2', 'onepagetheme'),
    'type' => 'textarea',
    'section' => 'onepage_testimonial_section',
    'active_callback' => 'onepage_testimonial_radio_callback'
));
//testimonial author setting
$wp_customize->add_setting('onepage_testimonial02_author_setting', array(
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
    'default'=>'sudhama prajapati'

));
$wp_customize->add_control('onepage_testimonial02_author_setting', array(
    'label' => esc_html__('Author name 2', 'onepagetheme'),
    'type' => 'text',
    'section' => 'onepage_testimonial_section',
    'active_callback' => 'onepage_testimonial_radio_callback'
));
//testimonial tittle setting
$wp_customize->add_setting('onepage_testimonial03_title_setting', array(
    'default' => 'What people says',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('onepage_testimonial03_title_setting', array(
    'label' => esc_html__('Title 3', 'onepagetheme'),
    'type' => 'text',
    'section' => 'onepage_testimonial_section',
    'active_callback' => 'onepage_testimonial_radio_callback'
));
//testimonial description setting
$wp_customize->add_setting('onepage_testimonial03_description_setting', array(
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_textarea_field',
    'default'=>'Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi.'
));
$wp_customize->add_control('onepage_testimonial03_description_setting', array(
    'label' => esc_html__('Description 3', 'onepagetheme'),
    'type' => 'textarea',
    'section' => 'onepage_testimonial_section',
    'active_callback' => 'onepage_testimonial_radio_callback'
));
//testimonial author setting
$wp_customize->add_setting('onepage_testimonial03_author_setting', array(
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
    'default'=>'sudhama prajapati'
));
$wp_customize->add_control('onepage_testimonial03_author_setting', array(
    'label' => esc_html__('Author name 3', 'onepagetheme'),
    'type' => 'text',
    'section' => 'onepage_testimonial_section',
    'active_callback' => 'onepage_testimonial_radio_callback'
));