<?php
/*teams section*/
$wp_customize->add_section('onepage_team_section',array(
    'title'=>__('The Team','onepagetheme'),
    'panel'=>'section'
));
//$wp_customize->add_setting('onepage[team_section_enable]',array(
//    'transport'=>'refresh',
//    'default'=>$options['team_section_enable']
//));
//$wp_customize->add_control('onepage[team_section_enable]',array(
//    'label'=>esc_html__('Team secion enable','onepagetheme'),
//    'type'=>'radio',
//    'section'=>'onepage_team_section',
//    'choices'=>array(
//        '1'=>esc_html__('Enable','onepagetheme'),
//        '0'=>esc_html__('Disable','onepagetheme')
//    )
//));
$wp_customize->add_setting( 'onepage[team_section_enable]', array(
        'default' => $options['team_section_enable'],
        'transport' => 'refresh',
    )
);

$wp_customize->add_control( new Onepage_toggle_switch( $wp_customize, 'onepage[team_section_enable]',
    array(
        'label' => esc_html__( 'Team section enable' ),
        'section' => 'onepage_team_section'
    )
));
//team tittle setting
$wp_customize->add_setting('onepage[team_title]',array(
    'default'=>$options['team_title'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage[team_title]',array(
    'label'         =>esc_html__( 'Title','onepagetheme' ),
    'type'          =>'text',
    'section'       =>'onepage_team_section',
    'description'   =>'Description for title',
    'active_callback'=>'team_radio_callback'

));
//team description setting
$wp_customize->add_setting('onepage[team_description]',array(
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_textarea_field',
    'default'=>$options['team_description'],

));
$wp_customize->add_control('onepage[team_description]',array(
    'label'         =>esc_html__( 'Description','onepagetheme' ),
    'type'          =>'textarea',
    'section'       =>'onepage_team_section',
    'description'   =>'Description for control',
    'active_callback'=>'team_radio_callback'

));
$wp_customize->add_setting('onepage[team_select]',array(
    'transport' =>'refresh',
    'default'=>$options['team_select'],
));
$wp_customize->add_control('onepage[team_select]',array(
    'label'     =>esc_html__( 'Select Team','onepagetheme' ),
    'section'   =>'onepage_team_section',
    'type'      =>'select',
    'choices'   =>array(
        '1'     => __('Team 1'),
        '2'     => __('Team 2'),
        '3'     =>__('Team 3')
    ),
    'active_callback'=>'team_radio_callback'

));
$wp_customize->add_setting('onepage[team01_title]',array(
    'default'=>$options['team01_title'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage[team01_title]',array(
    'label'=>esc_html__( 'Member Name 01 ','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_team_section',
    'description'=>'Name of the team member',
    'active_callback'=>'team01_radio_callback'

));
$wp_customize->add_setting('onepage[team01_subtitle]',array(
    'default'=>$options['team01_subtitle'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage[team01_subtitle]',array(
    'label'=>esc_html__( 'Sub Title ','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_team_section',
    'active_callback'=>'team01_radio_callback'
));
$wp_customize->add_setting('onepage[team01_description]',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_textarea_field',
    'default'=>$options['team01_description'],
));
$wp_customize->add_control('onepage[team01_description]',array(
    'label'             =>esc_html__( 'Description 01','onepagetheme' ),
    'type'              =>'textarea',
    'section'           =>'onepage_team_section',
    'description'       =>__('Member description'),
    'active_callback'   =>'team01_radio_callback'
));
$wp_customize->add_setting('onepage[team01_image]', array(
    'default'=>$options['team01_image'],
    'transport'     => 'refresh',
    'height'        => 469,
    'width'         => 353,
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'onepage[team01_image]',array(
    'label'             =>esc_html__('Member image 01','onepagetheme'),
    'section'           =>'onepage_team_section',
    'active_callback'   =>'team01_radio_callback',
    'description'=>__('Recommended Image size 353 X 469')

)));
$wp_customize->add_setting('onepage[team02_title]',array(
    'default'=>$options['team02_title'],
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_text_field'
));
$wp_customize->add_control('onepage[team02_title]',array(
    'label'             =>esc_html__( 'Member Name 02','onepagetheme' ),
    'type'              =>'text',
    'section'           =>'onepage_team_section',
    'description'       =>'Name of the team member',
    'active_callback'   =>'team02_radio_callback'

));
$wp_customize->add_setting('onepage[team02_subtitle]',array(
    'default'=>$options['team02_subtitle'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage[team02_subtitle]',array(
    'label'=>esc_html__( 'Sub-Title ','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_team_section',
    'active_callback'=>'team02_radio_callback'
));
$wp_customize->add_setting('onepage[team02_description]',array(
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_textarea_field',
    'default'=>$options['team02_description'],
));
$wp_customize->add_control('onepage[team02_description]',array(
    'label'             =>esc_html__( 'Description 02','onepagetheme' ),
    'type'              =>'textarea',
    'section'           =>'onepage_team_section',
    'description'       =>__('Member description'),
    'active_callback'   =>'team02_radio_callback'
));
$wp_customize->add_setting('onepage[team02_image]', array(
    'default'=>$options['team02_image'],
    'transport'         => 'refresh',
    'height'            => 469,
    'width'             => 353,
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'onepage[team02_image]',array(
    'label'             =>esc_html__('Member image 02','onepagetheme'),
    'section'           =>'onepage_team_section',
    'active_callback'   =>'team02_radio_callback',
    'description'       =>__('Recommended Image size 353 X 469')


)));
$wp_customize->add_setting('onepage[team03_title]',array(
    'default'=>$options['team03_title'],
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_text_field'

));
$wp_customize->add_control('onepage[team03_title]',array(
    'label'             =>esc_html__( 'Member Name 03','onepagetheme' ),
    'type'              =>'text',
    'section'           =>'onepage_team_section',
    'description'       =>__('Name of the team member'),
    'active_callback'   =>'team03_radio_callback'

));
$wp_customize->add_setting('onepage[team03_subtitle]',array(
    'default'=>$options['team03_subtitle'],
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage[team03_subtitle]',array(
    'label'=>esc_html__( 'Sub-Title ','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_team_section',
    'active_callback'=>'team03_radio_callback'
));
$wp_customize->add_setting('onepage[team03_description]',array(
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_textarea_field',
    'default'=>$options['team03_description'],
));
$wp_customize->add_control('onepage[team03_description]',array(
    'label'             =>esc_html__( 'Description 03','onepagetheme' ),
    'type'              =>'textarea',
    'section'           =>'onepage_team_section',
    'description'       =>__('Member description'),
    'active_callback'   =>'team03_radio_callback'
));
$wp_customize->add_setting('onepage[team03_image]', array(
    'default'=>$options['team03_image'],
    'transport'         => 'refresh',
    'height'            => 469,
    'width'             => 353,
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'onepage[team03_image]',array(
    'label'             =>esc_html__('Member image 03','onepagetheme'),
    'section'           =>'onepage_team_section',
    'active_callback'   =>'team03_radio_callback',
    'description'       =>__('Recommended Image size 353 X 469')

)));
