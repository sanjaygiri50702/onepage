<?php
/*testimonial section*/
$wp_customize->add_section('onepage_testimonial_section',array(
    'title'=>__('Testimonial','onepagetheme'),
    'panel'=>'section'
));
//$wp_customize->add_setting('onepage[testimonial_section_enable]',array(
//    'transport'=>'refresh',
//    'default'=>$options['testimonial_section_enable']
//));
//$wp_customize->add_control('onepage[testimonial_section_enable]',array(
//    'label'=>esc_html__( 'About us section enable','onepagetheme' ),
//    'type'=>'radio',
//    'section'=>'onepage_testimonial_section',
//    'type'=>'radio',
//    'choices'=>array(
//        '1' => 'Enable',
//        '0' => 'Disable')
//));
$wp_customize->add_setting( 'onepage[testimonial_section_enable]', array(
        'default' => $options['testimonial_section_enable'],
        'transport' => 'refresh',
    )
);

$wp_customize->add_control( new Onepage_toggle_switch( $wp_customize, 'onepage[testimonial_section_enable]',
    array(
        'label' => esc_html__( 'Testimonial section enable' ),
        'section' => 'onepage_testimonial_section'
    )
));
$wp_customize->add_setting('onepage[testimonial_select]',array(
    'transport'=>'refresh',
    'default'=>1,
));
$wp_customize->add_control('onepage[testimonial_select]',array(
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
for($i = 1; $i <= 3; $i ++) {
//testimonial tittle setting
    $wp_customize->add_setting('onepage[testimonial0'.$i.'_title]', array(
        'default' => $options['testimonial_title'],
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('onepage[testimonial0'.$i.'_title]', array(
        'label' => esc_html__('Title '.$i.'', 'onepagetheme'),
        'type' => 'text',
        'section' => 'onepage_testimonial_section',
        'active_callback' => 'onepage_testimonial_radio_callback'
    ));
//testimonial description setting
    $wp_customize->add_setting('onepage[testimonial0'.$i.'_description]', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => $options['testimonial_description'],
    ));
    $wp_customize->add_control('onepage[testimonial0'.$i.'_description]', array(
        'label' => esc_html__('Description'.$i.' ', 'onepagetheme'),
        'type' => 'textarea',
        'section' => 'onepage_testimonial_section',
        'active_callback' => 'onepage_testimonial_radio_callback'
    ));
//testimonial author setting
    $wp_customize->add_setting('onepage[testimonial0'.$i.'_author]', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => $options['testimonial_author'],
    ));
    $wp_customize->add_control('onepage[testimonial0'.$i.'_author]', array(
        'label' => esc_html__('Author name '.$i.'', 'onepagetheme'),
        'type' => 'text',
        'section' => 'onepage_testimonial_section',
        'active_callback' => 'onepage_testimonial_radio_callback'
    ));
}
////testimonial tittle setting
//$wp_customize->add_setting('onepage_testimonial02_title_setting', array(
//    'default' => 'What people says',
//    'transport' => 'refresh',
//    'sanitize_callback' => 'sanitize_text_field'
//));
//$wp_customize->add_control('onepage_testimonial02_title_setting', array(
//    'label' => esc_html__('Title 2', 'onepagetheme'),
//    'type' => 'text',
//    'section' => 'onepage_testimonial_section',
//    'active_callback' => 'onepage_testimonial_radio_callback'
//));
////testimonial description setting
//$wp_customize->add_setting('onepage_testimonial02_description_setting', array(
//    'transport' => 'refresh',
//    'sanitize_callback' => 'sanitize_textarea_field',
//    'default'=>'Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi.'
//));
//$wp_customize->add_control('onepage_testimonial02_description_setting', array(
//    'label' => esc_html__('Description 2', 'onepagetheme'),
//    'type' => 'textarea',
//    'section' => 'onepage_testimonial_section',
//    'active_callback' => 'onepage_testimonial_radio_callback'
//));
////testimonial author setting
//$wp_customize->add_setting('onepage_testimonial02_author_setting', array(
//    'transport' => 'refresh',
//    'sanitize_callback' => 'sanitize_text_field',
//    'default'=>'sudhama prajapati'
//
//));
//$wp_customize->add_control('onepage_testimonial02_author_setting', array(
//    'label' => esc_html__('Author name 2', 'onepagetheme'),
//    'type' => 'text',
//    'section' => 'onepage_testimonial_section',
//    'active_callback' => 'onepage_testimonial_radio_callback'
//));
////testimonial tittle setting
//$wp_customize->add_setting('onepage_testimonial03_title_setting', array(
//    'default' => 'What people says',
//    'transport' => 'refresh',
//    'sanitize_callback' => 'sanitize_text_field'
//));
//$wp_customize->add_control('onepage_testimonial03_title_setting', array(
//    'label' => esc_html__('Title 3', 'onepagetheme'),
//    'type' => 'text',
//    'section' => 'onepage_testimonial_section',
//    'active_callback' => 'onepage_testimonial_radio_callback'
//));
////testimonial description setting
//$wp_customize->add_setting('onepage_testimonial03_description_setting', array(
//    'transport' => 'refresh',
//    'sanitize_callback' => 'sanitize_textarea_field',
//    'default'=>'Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi.'
//));
//$wp_customize->add_control('onepage_testimonial03_description_setting', array(
//    'label' => esc_html__('Description 3', 'onepagetheme'),
//    'type' => 'textarea',
//    'section' => 'onepage_testimonial_section',
//    'active_callback' => 'onepage_testimonial_radio_callback'
//));
////testimonial author setting
//$wp_customize->add_setting('onepage_testimonial03_author_setting', array(
//    'transport' => 'refresh',
//    'sanitize_callback' => 'sanitize_text_field',
//    'default'=>'sudhama prajapati'
//));
//$wp_customize->add_control('onepage_testimonial03_author_setting', array(
//    'label' => esc_html__('Author name 3', 'onepagetheme'),
//    'type' => 'text',
//    'section' => 'onepage_testimonial_section',
//    'active_callback' => 'onepage_testimonial_radio_callback'
//));