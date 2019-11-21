<?php
/*teams section*/
$wp_customize->add_section('onepage_team_section',array(
    'title'=>__('The Team','onepagetheme'),
    'panel'=>'section'
));
//team tittle setting
$wp_customize->add_setting('onepage_team_title_setting',array(
    'default'=>'The Team',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_team_title_setting',array(
    'label'         =>esc_html__( 'Title','onepagetheme' ),
    'type'          =>'text',
    'section'       =>'onepage_team_section',
    'description'   =>'Description for title'

));
//team description setting
$wp_customize->add_setting('onepage_team_description_setting',array(
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_textarea_field',
    'default'           =>'lorem'

));
$wp_customize->add_control('onepage_team_description_setting',array(
    'label'         =>esc_html__( 'Description','onepagetheme' ),
    'type'          =>'textarea',
    'section'       =>'onepage_team_section',
    'description'   =>'Description for control'
));
$wp_customize->add_setting('onepage_team_select_radio_setting',array(
    'transport' =>'refresh',
    'default'   =>1
));
$wp_customize->add_control('onepage_team_select_radio_setting',array(
    'label'     =>esc_html__( 'Select Team','onepagetheme' ),
    'section'   =>'onepage_team_section',
    'type'      =>'select',
    'choices'   =>array(
        '1'     => __('Team 1'),
        '2'     => __('Team 2'),
        '3'     =>__('Team 3')
    )
));
$wp_customize->add_setting('onepage_team01_title_setting',array(
    'default'=>'Lorem ipsum',
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_text_field'

));
$wp_customize->add_control('onepage_team01_title_setting',array(
    'label'=>esc_html__( 'Member Name 01 ','onepagetheme' ),
    'type'=>'text',
    'section'=>'onepage_team_section',
    'description'=>'Name of the team member',
    'active_callback'=>'team01_radio_callback'

));
$wp_customize->add_setting('onepage_team01_description_setting',array(
    'transport'=>'refresh',
    'sanitize_callback'=>'sanitize_textarea_field',
    'default'=>'lorem'
));
$wp_customize->add_control('onepage_team01_description_setting',array(
    'label'             =>esc_html__( 'Description 01','onepagetheme' ),
    'type'              =>'textarea',
    'section'           =>'onepage_team_section',
    'description'       =>__('Member description'),
    'active_callback'   =>'team01_radio_callback'
));
$wp_customize->add_setting('onepage_team01_image_setting', array(
    'default-image' => get_template_directory_uri() . '/assets/uploads/team-01.jpg',
    'transport'     => 'refresh',
    'height'        => 469,
    'width'         => 353,
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'onepage_team01_image_setting',array(
    'label'             =>esc_html__('Member image 01','onepagetheme'),
    'section'           =>'onepage_team_section',
    'active_callback'   =>'team01_radio_callback',
    'description'=>__('Recommended Image size 353 X 469')

)));
$wp_customize->add_setting('onepage_team02_title_setting',array(
    'default'           =>'Lorem ipsum',
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_text_field'
));
$wp_customize->add_control('onepage_team02_title_setting',array(
    'label'             =>esc_html__( 'Member Name 02','onepagetheme' ),
    'type'              =>'text',
    'section'           =>'onepage_team_section',
    'description'       =>'Name of the team member',
    'active_callback'   =>'team02_radio_callback'

));
$wp_customize->add_setting('onepage_team02_description_setting',array(
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_textarea_field',
    'default'           =>'lorem'
));
$wp_customize->add_control('onepage_team02_description_setting',array(
    'label'             =>esc_html__( 'Description 02','onepagetheme' ),
    'type'              =>'textarea',
    'section'           =>'onepage_team_section',
    'description'       =>__('Member description'),
    'active_callback'   =>'team02_radio_callback'
));
$wp_customize->add_setting('onepage_team02_image_setting', array(
    'default-image'     => get_template_directory_uri() . '/assets/uploads/team-02.jpg',
    'transport'         => 'refresh',
    'height'            => 469,
    'width'             => 353,
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'onepage_team02_image_setting',array(
    'label'             =>esc_html__('Member image 02','onepagetheme'),
    'section'           =>'onepage_team_section',
    'active_callback'   =>'team02_radio_callback',
    'description'       =>__('Recommended Image size 353 X 469')


)));
$wp_customize->add_setting('onepage_team03_title_setting',array(
    'default'           =>'Lorem ipsum',
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_text_field'

));
$wp_customize->add_control('onepage_team03_title_setting',array(
    'label'             =>esc_html__( 'Member Name 03','onepagetheme' ),
    'type'              =>'text',
    'section'           =>'onepage_team_section',
    'description'       =>__('Name of the team member'),
    'active_callback'   =>'team03_radio_callback'

));
$wp_customize->add_setting('onepage_team03_description_setting',array(
    'transport'         =>'refresh',
    'sanitize_callback' =>'sanitize_textarea_field',
    'default'           =>'lorem'
));
$wp_customize->add_control('onepage_team03_description_setting',array(
    'label'             =>esc_html__( 'Description 03','onepagetheme' ),
    'type'              =>'textarea',
    'section'           =>'onepage_team_section',
    'description'       =>__('Member description'),
    'active_callback'   =>'team03_radio_callback'
));
$wp_customize->add_setting('onepage_team03_image_setting', array(
    'default-image'     => get_template_directory_uri() . '/assets/uploads/team-03.jpg',
    'transport'         => 'refresh',
    'height'            => 469,
    'width'             => 353,
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'onepage_team03_image_setting',array(
    'label'             =>esc_html__('Member image 03','onepagetheme'),
    'section'           =>'onepage_team_section',
    'active_callback'   =>'team03_radio_callback',
    'description'       =>__('Recommended Image size 353 X 469')

)));
