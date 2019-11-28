<?php

	  /* about us section*/
	$wp_customize->add_section('onepage_about_section',array(
		'title'=>__('About us','onepagetheme'),
		'panel'=>'section'
	));
//	$wp_customize->add_setting('onepage[about_section_enable]',array(
//		'transport'=>'refresh',
//		'default'=>$options['about_section_enable'],
//	));
//	$wp_customize->add_control('onepage[about_section_enable]',array(
//		'label'=>esc_html__( 'About us section enable','onepagetheme' ),
//		'type'=>'radio',
//		'section'=>'onepage_about_section',
//		'type'=>'radio',
//		'choices'=>array(
//			1 => 'Enable',
//			0 => 'Disable')
//	));
    $wp_customize->add_setting( 'onepage[about_section_enable]', array(
            'default' => $options['about_section_enable'],
            'transport' => 'refresh',
            )
    );

    $wp_customize->add_control( new Onepage_toggle_switch( $wp_customize, 'onepage[about_section_enable]',
        array(
            'label' => esc_html__( 'About us section enable' ),
            'section' => 'onepage_about_section'
        )
    ));
	//about us tittle control

	$wp_customize->add_setting('onepage[about_title]',array(
		'default'=>$options['about_title'],
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'

	));
	$wp_customize->add_control('onepage[about_title]',array(
		'label'=>esc_html__( 'Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_about_section',
		'active_callback'=>'onepage_about_radio_callback'
	));
	//about us description control
	$wp_customize->add_setting('onepage[about_description]',array(
		'default'=>$options['about_description'],
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_textarea_field'
	));
	$wp_customize->add_control('onepage[about_description]',array(
		'label'=>esc_html__( 'Description','onepagetheme' ),
		'type'=>'textarea',
		'section'=>'onepage_about_section',
		'active_callback'=>'onepage_about_radio_callback'

	));
//	//about us bar01 control
//	$wp_customize->add_setting('onepage[about_bar01]',array(
//		'default'=>$options['about_bar01'],
//		'transport'=>'refresh',
//        'sanitize_callback'=>'absint',
//        'validate_callback'=>'validate_about_counter'
//
//    ));
//	$wp_customize->add_control('onepage[about_bar01]',array(
//		'label'=>esc_html__( 'Percent','onepagetheme' ),
//		'type'=>'number',
//		'section'=>'onepage_about_section',
//		'active_callback'=>'onepage_about_radio_callback',
//		'description'=>esc_html__( 'Note: Min 1 & Max 100'),
//
//    ));
//	//about us bar02 control
//	$wp_customize->add_setting('onepage[about_bar02]',array(
//		'default'=>$options['about_bar02'],
//		'transport'=>'refresh',
//        'validate_callback'=>'validate_about_counter',
//        'sanitize_callback'=>'absint',
//
//    ));
//	$wp_customize->add_control('onepage[about_bar02]',array(
//		'label'=>esc_html__( 'percent','onepagetheme' ),
//		'type'=>'number',
//		'section'=>'onepage_about_section',
//		'active_callback'=>'onepage_about_radio_callback',
//		'description'=>esc_html__( 'Note: Min 1 & Max 100')
//
//	));
//	//about us bar03 control
//	$wp_customize->add_setting('onepage[about_bar03]',array(
//		'default'=>$options['about_bar03'],
//		'transport'=>'refresh',
//		'sanitize_callback'=>'absint',
//        'validate_callback'=>'validate_about_counter'
//
//    ));
//	$wp_customize->add_control('onepage[about_bar03]',array(
//		'label'=>esc_html__( 'percent','onepagetheme' ),
//		'type'=>'number',
//		'section'=>'onepage_about_section',
//		'active_callback'=>'onepage_about_radio_callback',
//		'description'=>esc_html__( 'Note: Min 1 & Max 100')
//	));
$wp_customize->add_setting( 'onepage[about_bar01]',
    array(
        'default' => $options['about_bar01'],
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new Onepage_slider_control( $wp_customize,'onepage[about_bar01]', array(
        'label' => esc_html__( 'Percent Control (%)' ),
        'section' => 'onepage_about_section',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
        'active_callback'=>'onepage_about_radio_callback',
    )
));
$wp_customize->add_setting( 'onepage[about_bar02]',
    array(
        'default' => $options['about_bar02'],
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new Onepage_slider_control( $wp_customize,'onepage[about_bar02]', array(
        'label' => esc_html__( 'Percent Control (%)' ),
        'section' => 'onepage_about_section',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
        'active_callback'=>'onepage_about_radio_callback',
    )
));
$wp_customize->add_setting( 'onepage[about_bar03]',
    array(
        'default' => $options['about_bar03'],
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new Onepage_slider_control( $wp_customize,'onepage[about_bar03]', array(
        'label' => esc_html__( 'Percent Control (%)' ),
        'section' => 'onepage_about_section',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
	    'active_callback'=>'onepage_about_radio_callback',
    )
));