<?php /**Counter */
	$wp_customize->add_section('onepage_counter_section',array(
		'title'=>__('Counter','onepagetheme'),
		'panel'=>'section'
	  ));
	$wp_customize->add_setting('onepage_counter_radio_setting',array(
		'transport'=>'refresh',
		'default'=>0
	));
	$wp_customize->add_control('onepage_counter_radio_setting',array(
		'label'=>esc_html__( 'About us section enable','onepagetheme' ),
		'type'=>'radio',
		'section'=>'onepage_counter_section',
		'type'=>'radio',
		'choices'=>array(
			'1' => 'Enable',
			'0' => 'Disable')
	));
$wp_customize->add_setting('onepage_counter_select_radio_setting',array(
    'transport'=>'refresh',
    'default'=>1
));
$wp_customize->add_control('onepage_counter_select_radio_setting',array(
    'label'=>esc_html__( 'Select Team','onepagetheme' ),
    'section'=>'onepage_counter_section',
    'type'=>'select',
    'choices'=>array(
        '1' => __('Counter 1'),
        '2' => __('Counter 2'),
        '3'=>__('Counter 3'),
        '4'=>__('Counter 4')
    ),
    'active_callback'=>'counter_radio_callback'

));
	  //couter section 01
    $wp_customize->add_setting('onepage_counter01_title_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter01_title_setting',array(
		'label'=>esc_html__( 'counter 1 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter01_radio_callback'
    ));
    $wp_customize->add_setting('onepage_counter01_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter01_setting',array(
		'label'=>esc_html__( 'Number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter01_radio_callback'
    ));
$wp_customize->add_setting('onepage_counter01_icon_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_counter01_icon_setting',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter01_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));
      //couter section 02
    $wp_customize->add_setting('onepage_counter02_title_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter02_title_setting',array(
		'label'=>esc_html__( 'counter 2 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter02_radio_callback'

	));
	$wp_customize->add_setting('onepage_counter02_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter02_setting',array(
		'label'=>esc_html__( 'Number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter02_radio_callback'
    ));
$wp_customize->add_setting('onepage_counter02_icon_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_counter02_icon_setting',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter02_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));
  
      //couter section 03
    $wp_customize->add_setting('onepage_counter03_title_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter03_title_setting',array(
		'label'=>esc_html__( 'counter 3 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter03_radio_callback'

	));
	$wp_customize->add_setting('onepage_counter03_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter03_setting',array(
		'label'=>esc_html__( 'Total number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter03_radio_callback'

    ));
$wp_customize->add_setting('onepage_counter03_icon_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_counter03_icon_setting',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter03_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));

      //couter section 04
    $wp_customize->add_setting('onepage_counter04_title_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter04_title_setting',array(
		'label'=>esc_html__( 'counter 4 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter04_radio_callback'

	));
	$wp_customize->add_setting('onepage_counter04_setting',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field'
	));
	$wp_customize->add_control('onepage_counter04_setting',array(
		'label'=>esc_html__( 'Total number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter04_radio_callback'

    ));
$wp_customize->add_setting('onepage_counter04_icon_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_counter04_icon_setting',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter04_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));
