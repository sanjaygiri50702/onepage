<?php 
	  /* about us section*/
	$wp_customize->add_section('onepage_about_section',array(
		'title'=>__('About us','onepagetheme'),
		'panel'=>'section'
	));
	$wp_customize->add_setting('onepage_radio_setting',array(
		'transport'=>'refresh'
	));
	$wp_customize->add_control('onepage_radio_setting',array(
		'label'=>esc_html( 'About us section enable','onepagetheme' ),
		'type'=>'radio',
		'section'=>'onepage_about_section',
		'type'=>'radio',
		'choices'=>array(
		'1' => 'Enable',
		'0' => 'Disable')
	));
	//about us tittle control

	$wp_customize->add_setting('onepage_title_setting',array(
		'default'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'

	));
	$wp_customize->add_control('onepage_title_setting',array(
		'label'=>esc_html( 'Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_about_section',
		
	));
	//about us description control
	$wp_customize->add_setting('onepage_description_setting',array(
		'default'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_textarea_field'
	));
	$wp_customize->add_control('onepage_description_setting',array(
		'label'=>esc_html( 'Description','onepagetheme' ),
		'type'=>'textarea',
		'section'=>'onepage_about_section'
	));
	//about us bar01 control
	$wp_customize->add_setting('onepage_bar01_setting',array(
		'dafault'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_bar01_setting',array(
		'label'=>esc_html( 'Percent','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_about_section'
	));
	//about us bar02 control
	$wp_customize->add_setting('onepage_bar02_setting',array(
		'dafault'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'

	));
	$wp_customize->add_control('onepage_bar02_setting',array(
		'label'=>esc_html( 'percent','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_about_section'
	));
	//about us bar03 control
	$wp_customize->add_setting('onepage_bar03_setting',array(
		'dafault'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'

	));
	$wp_customize->add_control('onepage_bar03_setting',array(
		'label'=>esc_html( 'percent','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_about_section'
	));
?>