<?php 
	  /*services section*/
$wp_customize->add_section('onepage_service_section',array(
    'title'=>__('Services','onepagetheme'),
    'panel'=>'section'
  ));
//service tittle setting
$wp_customize->add_setting('onepage_service_title_setting',array(
    'dafault'=>'ipsum',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage_service_title_setting',array(
    'label'=>esc_html( 'Title','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_service_section',
    'description'=>'Description for title'

));
//service description setting
$wp_customize->add_setting('onepage_service_description_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_textarea_field'

));
$wp_customize->add_control('onepage_service_description_setting',array(
    'label'=>esc_html( 'Description','onepagetheme' ),
    'type'=>'textarea',
    'section'=>'onepage_service_section',
    'description'=>'Description for control'
));
?>