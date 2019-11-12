<?php

	  /* about us section*/
	$wp_customize->add_section('onepage_about_section',array(
		'title'=>__('About us','onepagetheme'),
		'panel'=>'section'
	));
	$wp_customize->add_setting('onepage_about_radio_setting',array(
		'transport'=>'refresh',
		'default'=>0
	));
	$wp_customize->add_control('onepage_about_radio_setting',array(
		'label'=>esc_html__( 'About us section enable','onepagetheme' ),
		'type'=>'radio',
		'section'=>'onepage_about_section',
		'type'=>'radio',
		'choices'=>array(
			'1' => 'Enable',
			'0' => 'Disable')
	));
	//about us tittle control

	$wp_customize->add_setting('onepage_about_title_setting',array(
		'default'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'

	));
	$wp_customize->add_control('onepage_about_title_setting',array(
		'label'=>esc_html__( 'Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_about_section',
		'active_callback'=>'onepage_about_radio_callback'
		
	));
	//about us description control
	$wp_customize->add_setting('onepage_about_description_setting',array(
		'default'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_textarea_field'
	));
	$wp_customize->add_control('onepage_about_description_setting',array(
		'label'=>esc_html__( 'Description','onepagetheme' ),
		'type'=>'textarea',
		'section'=>'onepage_about_section',
		'active_callback'=>'onepage_about_radio_callback'
		
	));
	//about us bar01 control
	$wp_customize->add_setting('onepage_bar01_setting',array(
		'dafault'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'validate_callback'=>'validate_about_counter'

    ));
	$wp_customize->add_control('onepage_bar01_setting',array(
		'label'=>esc_html__( 'Percent','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_about_section',
		'active_callback'=>'onepage_about_radio_callback',
		'description'=>esc_html__( 'Note: Min 1 & Max 100'),

    ));
	//about us bar02 control
	$wp_customize->add_setting('onepage_bar02_setting',array(
		'dafault'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'validate_callback'=>'validate_about_counter'


    ));
	$wp_customize->add_control('onepage_bar02_setting',array(
		'label'=>esc_html__( 'percent','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_about_section',
		'active_callback'=>'onepage_about_radio_callback',
		'description'=>esc_html__( 'Note: Min 1 & Max 100')

	));
	//about us bar03 control
	$wp_customize->add_setting('onepage_bar03_setting',array(
		'dafault'=>'ipsum',
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'validate_callback'=>'validate_about_counter'


    ));
	$wp_customize->add_control('onepage_bar03_setting',array(
		'label'=>esc_html__( 'percent','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_about_section',
		'active_callback'=>'onepage_about_radio_callback',
		'description'=>esc_html__( 'Note: Min 1 & Max 100')

	));
