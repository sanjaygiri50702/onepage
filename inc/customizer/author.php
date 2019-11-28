<?php
$wp_customize->add_section('onepage_author_section',array(
    'title'=>esc_html__('Author','onepagetheme'),
    'panel'=>'section'
));
//$wp_customize->add_setting('onepage[author_section_enable]',array(
//        'transport'=>'refresh',
//        'default'=>$options['author_section_enable']
//    ));
//$wp_customize->add_control('onepage[author_section_enable]',array(
//    'label'=>esc_html__('Author','onepagetheme'),
//    'type'=>'radio',
//    'section'=>'onepage_author_section',
//    'choices'=>array(
//        '1'=>esc_html__('Enable','onepagetheme'),
//        '0'=>esc_html__('Disable','onepagetheme')
//    )
//    ));
$wp_customize->add_setting( 'onepage[author_section_enable]', array(
        'default' => $options['author_section_enable'],
        'transport' => 'refresh',
    )
);

$wp_customize->add_control( new Onepage_toggle_switch( $wp_customize, 'onepage[author_section_enable]',
    array(
        'label' => esc_html__( 'Author section enable' ),
        'section' => 'onepage_author_section'
    )
));
$wp_customize->add_setting('onepage[author_title]',array(
    'transport'=>'refresh',
    'default'=>$options['author_title'],
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage[author_title]',array(
    'label'=>esc_html__('Author name','onepagetheme'),
    'type'=>'text',
    'section'=>'onepage_author_section',
    'active_callback'=>'author_radio_callback'

));
$wp_customize->add_setting('onepage[author_subtitle]',array(
    'transport'=>'refresh',
    'default'=>$options['author_subtitle'],
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage[author_subtitle]',array(
    'label'=>esc_html__('Sub title','onepagetheme'),
    'type'=>'text',
    'section'=>'onepage_author_section',
    'active_callback'=>'author_radio_callback'
));
$wp_customize->add_setting('onepage[author_description]',array(
    'transport'=>'refresh',
    'default'=>$options['author_description'],
    'sanitize_callback'=>'sanitize_textarea_field'

));
$wp_customize->add_control('onepage[author_description]',array(
    'label'=>esc_html__('Description','onepagetheme'),
    'type'=>'textarea',
    'section'=>'onepage_author_section',
    'active_callback'=>'author_radio_callback'
));
//for($i = 1; $i <= 4; $i ++) {
//    $wp_customize->add_setting('onepage[author_social'.$i.'_link]', array(
//        'transport' => 'refresh',
//        'default' => esc_url_raw('facebook.com'),
//        'sanitize_callback' => 'esc_url_raw'
//    ));
//    $wp_customize->add_control('onepage[author_social'.$i.'_link]', array(
//        'label' => esc_html__('Social links '.$i.'', 'onepagetheme'),
//        'type' => 'text',
//        'section' => 'onepage_author_section',
//        'active_callback'=>'author_radio_callback'
//    ));
//}
$wp_customize->add_setting( 'onepage[author_social_link]',
    array(
        'default' => $options['author_social_link'],
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control( new Onepage_social_link ( $wp_customize, 'onepage[author_social_link]',
    array(
        'label' => __( 'Social Links' ),
        'section' => 'onepage_author_section',
        'button_labels' => array(
            'add' => __( 'Add social links' ), // Optional. Button label for Add button. Default: Add
        ),
        'active_callback'=>'author_radio_callback'

    )
) );

