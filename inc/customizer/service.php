<?php 
	  /*services section*/
$wp_customize->add_section('onepage_service_section',array(
    'title'=>__('Services','onepagetheme'),
    'panel'=>'section'
  ));
$wp_customize->add_setting('onepage_service_radio_setting',array(
    'transport'=>'refresh',
    'default'=>1
));
$wp_customize->add_control('onepage_service_radio_setting',array(
    'label'=>esc_html__( 'Service section enable','onepagetheme' ),
    'type'=>'radio',
    'section'=>'onepage_service_section',
    'type'=>'radio',
    'choices'=>array(
        '1' => 'Enable',
        '0' => 'Disable')
));
//service tittle setting
$wp_customize->add_setting('onepage_service_title_setting',array(
    'dafault'=>'ipsum',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage_service_title_setting',array(
    'label'=>esc_html__( 'Title','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_service_section',
    'description'=>'Description for title',
    'active_callback'=>'onepage_service_radio_callback'


));
//service description setting
$wp_customize->add_setting('onepage_service_description_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_textarea_field'

));
$wp_customize->add_control('onepage_service_description_setting',array(
    'label'=>esc_html__( 'Description','onepagetheme' ),
    'type'=>'textarea',
    'section'=>'onepage_service_section',
    'description'=>'Description for control',
    'active_callback'=>'onepage_service_radio_callback'

));
?>