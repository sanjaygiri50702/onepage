<?php
$wp_customize->add_section('onepage_client_section',array(
    'title'=>esc_html__('Client','onepagetheme'),
    'panel'=>'section'
));
$wp_customize->add_setting('onepage_client_radio_setting',array(
    'transport'=>'refresh',
    'default'=>1
));
$wp_customize->add_control('onepage_client_radio_setting',array(
    'label'=>esc_html__( 'Client section enable','onepagetheme' ),
    'type'=>'radio',
    'section'=>'onepage_client_section',
    'type'=>'radio',
    'choices'=>array(
        '1' => 'Enable',
        '0' => 'Disable')
));
$wp_customize->add_setting('onepage_client_number_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field',
    'default'=>1
));
$wp_customize->add_control('onepage_client_number_setting',array(
    'label'=>esc_html__('Client number','onepagetheme'),
    'section'=>'onepage_client_section',
    'type'=>'number',
    'description'=>esc_html__('Total no. of client to be displayed'),
    'active_callback'=>'onepage_client_radio_callback'

));
for($i = 1; $i <= $wp_customize->get_setting('onepage_client_number_setting')->value(); $i ++) {
    $wp_customize->add_setting('onepage_client0'.$i.'_image_setting', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'onepage_client0'.$i.'_image_setting', array(
            'label' => esc_html__('Client '.$i.' Logo', 'onepagetheme'),
            'section' => 'onepage_client_section',
            'description' => esc_html__('Logo of client to be displayed'),
            'active_callback'=>'onepage_client_radio_callback'

    )));
    $wp_customize->add_setting('onepage_client0'.$i.'_link_setting', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('onepage_client0'.$i.'_link_setting', array(
        'label' => esc_html__('Client '.$i.' logo link', 'onepagetheme'),
        'section' => 'onepage_client_section',
        'type' => 'text',
        'description' => esc_html__('Link of the client logo'),
        'active_callback'=>'onepage_client_radio_callback'

    ));
}