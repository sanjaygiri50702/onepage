<?php
$wp_customize->add_section('onepage_client_section',array(
    'title'=>esc_html__('Client','onepagetheme'),
    'panel'=>'section'
));
//$wp_customize->add_setting('onepage[client_section_enable]',array(
//    'transport'=>'refresh',
//    'default'=>$options['client_section_enable']
//));
//$wp_customize->add_control('onepage[client_section_enable]',array(
//    'label'=>esc_html__( 'Client section enable','onepagetheme' ),
//    'type'=>'radio',
//    'section'=>'onepage_client_section',
//    'type'=>'radio',
//    'choices'=>array(
//        '1' => 'Enable',
//        '0' => 'Disable')
//));
$wp_customize->add_setting( 'onepage[client_section_enable]', array(
    'default' => $options['client_section_enable'],
    'transport' => 'refresh',
    )
);
$wp_customize->add_control( new Onepage_toggle_switch( $wp_customize, 'onepage[client_section_enable]',
    array(
        'label' => esc_html__( 'Clinet section enable' ),
        'section' => 'onepage_client_section'
    )
));
$wp_customize->add_setting('onepage[client_number]',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field',
    'default'=>$options['client_number']
));
$wp_customize->add_control('onepage[client_number]',array(
    'label'=>esc_html__('Client number','onepagetheme'),
    'section'=>'onepage_client_section',
    'type'=>'number',
    'description'=>esc_html__('Total no. of client to be displayed'),
    'active_callback'=>'onepage_client_radio_callback'

));
for($i = 1; $i <= $options['client_number']; $i ++) {
    $wp_customize->add_setting('onepage[client0'.$i.'_image]', array(
        'transport' => 'refresh',
        'default'=>$options['client0'.$i.'_image']
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'onepage[client0'.$i.'_image]', array(
            'label' => esc_html__('Client '.$i.' Logo', 'onepagetheme'),
            'section' => 'onepage_client_section',
            'description' => esc_html__('Logo of client to be displayed'),
            'active_callback'=>'onepage_client_radio_callback'

    )));
    $wp_customize->add_setting('onepage[client0'.$i.'_link]', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('onepage[client0'.$i.'_link]', array(
        'label' => esc_html__('Client '.$i.' logo link', 'onepagetheme'),
        'section' => 'onepage_client_section',
        'type' => 'text',
        'description' => esc_html__('Link of the client logo'),
        'active_callback'=>'onepage_client_radio_callback'

    ));
}