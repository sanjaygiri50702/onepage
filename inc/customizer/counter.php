<?php /**Counter */
	$wp_customize->add_section('onepage_counter_section',array(
		'title'=>__('Counter','onepagetheme'),
		'panel'=>'section'
	  ));
	$wp_customize->add_setting('onepage[counter_section_enable]',array(
		'transport'=>'refresh',
		'default'=>$options['counter_section_enable']
	));
	$wp_customize->add_control('onepage[counter_section_enable]',array(
		'label'=>esc_html__( 'About us section enable','onepagetheme' ),
		'type'=>'radio',
		'section'=>'onepage_counter_section',
		'type'=>'radio',
		'choices'=>array(
			'1' => 'Enable',
			'0' => 'Disable')
	));
$wp_customize->add_setting('onepage[counter]',array(
    'transport'=>'refresh',
    'default'=>1
));
$wp_customize->add_control('onepage[counter]',array(
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
    $wp_customize->add_setting('onepage[counter01_title]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter01_title']

    ));
	$wp_customize->add_control('onepage[counter01_title]',array(
		'label'=>esc_html__( 'counter 1 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter01_radio_callback'
    ));
    $wp_customize->add_setting('onepage[counter01_value]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter01_value']

    ));
	$wp_customize->add_control('onepage[counter01_value]',array(
		'label'=>esc_html__( 'Number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter01_radio_callback'
    ));
$wp_customize->add_setting('onepage[counter01_icon]',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field',
    'default'=>$options['counter01_icon']

));
$wp_customize->add_control('onepage[counter01_icon]',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter01_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));
      //couter section 02
    $wp_customize->add_setting('onepage[counter02_title]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter02_title']

    ));
	$wp_customize->add_control('onepage[counter02_title]',array(
		'label'=>esc_html__( 'counter 2 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter02_radio_callback'

	));
	$wp_customize->add_setting('onepage[counter02_value]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter02_value']

    ));
	$wp_customize->add_control('onepage[counter02_value]',array(
		'label'=>esc_html__( 'Number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter02_radio_callback'
    ));
$wp_customize->add_setting('onepage[counter02_icon]',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field',
    'default'=>$options['counter02_icon']

));
$wp_customize->add_control('onepage[counter02_icon]',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter02_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));
  
      //couter section 03
    $wp_customize->add_setting('onepage[counter03_title]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter03_title']

    ));
	$wp_customize->add_control('onepage[counter03_title]',array(
		'label'=>esc_html__( 'counter 3 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter03_radio_callback'

	));
	$wp_customize->add_setting('onepage[counter03_value]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter03_value']

    ));
	$wp_customize->add_control('onepage[counter03_value]',array(
		'label'=>esc_html__( 'Total number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter03_radio_callback'

    ));
$wp_customize->add_setting('onepage[counter03_icon]',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field',
    'default'=>$options['counter03_icon']

));
$wp_customize->add_control('onepage[counter03_icon]',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter03_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));

      //couter section 04
    $wp_customize->add_setting('onepage[counter04_title]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter04_title']

    ));
	$wp_customize->add_control('onepage[counter04_title]',array(
		'label'=>esc_html__( 'counter 4 Title','onepagetheme' ),
		'type'=>'text',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter04_radio_callback'

	));
	$wp_customize->add_setting('onepage[counter04_value]',array(
		'transport'=>'refresh',
		'sanitize_callback'=>'sanitize_text_field',
        'default'=>$options['counter04_value']

    ));
	$wp_customize->add_control('onepage[counter04_value]',array(
		'label'=>esc_html__( 'Total number','onepagetheme' ),
		'type'=>'number',
		'section'=>'onepage_counter_section',
		'active_callback'=>'counter04_radio_callback'

    ));
$wp_customize->add_setting('onepage[counter04_icon]',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field',
    'default'=>$options['counter04_icon']

));
$wp_customize->add_control('onepage[counter04_icon]',array(
    'label'=>esc_html__( 'Icon class','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_counter_section',
    'active_callback'=>'counter04_radio_callback',
    'description'=>__('Get icon class from <a href="https://fontawesome.com/">Font awesome</a>')
));
