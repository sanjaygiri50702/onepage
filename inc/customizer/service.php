<?php 
	  /*services section*/
$wp_customize->add_section('onepage_service_section',array(
    'title'=>__('Services','onepagetheme'),
    'panel'=>'section'
  ));
//$wp_customize->add_setting('onepage[service_section_enable]',array(
//    'transport'=>'refresh',
//    'sanitize_callback'=>'absint',
//    'default'=>$options['service_section_enable']
//));
//$wp_customize->add_control('onepage[service_section_enable]',array(
//    'label'=>esc_html__( 'Service section enable','onepagetheme' ),
//    'type'=>'radio',
//    'section'=>'onepage_service_section',
//    'type'=>'radio',
//    'choices'=>array(
//        1 => 'Enable',
//        0 => 'Disable')
//));
$wp_customize->add_setting( 'onepage[service_section_enable]', array(
        'default' => $options['service_section_enable'],
        'transport' => 'refresh',
    )
);

$wp_customize->add_control( new Onepage_toggle_switch( $wp_customize, 'onepage[service_section_enable]',
    array(
        'label' => esc_html__( 'Service section enable' ),
        'section' => 'onepage_service_section'
    )
));
//service tittle setting
$wp_customize->add_setting('onepage[service_title]',array(
    'default'=>$options['service_title'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage[service_title]',array(
    'label'=>esc_html__( 'Title','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_service_section',
    'description'=>'Description for title',
    'active_callback'=>'onepage_service_radio_callback'


));
//service description setting
$wp_customize->add_setting('onepage[service_description]',array(
    'transport'=>'refresh',
    'default'=>$options['service_description'],
    'sanitize_callback'=>'sanitize_textarea_field'

));
$wp_customize->add_control('onepage[service_description]',array(
    'label'=>esc_html__( 'Description','onepagetheme' ),
    'type'=>'textarea',
    'section'=>'onepage_service_section',
    'description'=>'Description for control',
    'active_callback'=>'onepage_service_radio_callback'

));
