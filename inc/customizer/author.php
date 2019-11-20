<?php
$wp_customize->add_section('onepage_author_section',array(
    'title'=>esc_html__('Author','onepagetheme'),
    'panel'=>'section'
));
$wp_customize->add_setting('onepage_author_radio_setting',array(
        'transport'=>'refresh',
        'default'=>0
    ));
$wp_customize->add_control('onepage_author_radio_setting',array(
    'label'=>esc_html__('Author','onepagetheme'),
    'type'=>'radio',
    'section'=>'onepage_author_section',
    'choices'=>array(
        '1'=>esc_html__('Enable','onepagetheme'),
        '0'=>esc_html__('Disable','onepagetheme')
    )
    ));
$wp_customize->add_setting('onepage_author_title_setting',array(
    'transport'=>'refresh',
    'default'=>'lorem',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_author_title_setting',array(
    'label'=>esc_html__('Author name','onepagetheme'),
    'type'=>'text',
    'section'=>'onepage_author_section',
    'active_callback'=>'author_radio_callback'

));
$wp_customize->add_setting('onepage_author_subtitle_setting',array(
    'transport'=>'refresh',
    'default'=>'lorem',
    'sanitize_callback'=>'sanitize_text_field'
));
$wp_customize->add_control('onepage_author_subtitle_setting',array(
    'label'=>esc_html__('Sub title','onepagetheme'),
    'type'=>'text',
    'section'=>'onepage_author_section',
    'active_callback'=>'author_radio_callback'
));
$wp_customize->add_setting('onepage_author_description_setting',array(
    'transport'=>'refresh',
    'default'=>'lorem',
    'sanitize_callback'=>'sanitize_textarea_field'

));
$wp_customize->add_control('onepage_author_description_setting',array(
    'label'=>esc_html__('Description','onepagetheme'),
    'type'=>'textarea',
    'section'=>'onepage_author_section',
    'active_callback'=>'author_radio_callback'
));
for($i = 1; $i <= 4; $i ++) {
    $wp_customize->add_setting('onepage_author_social'.$i.'_link_setting', array(
        'transport' => 'refresh',
        'default' => 'lorem',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('onepage_author_social'.$i.'_link_setting', array(
        'label' => esc_html__('Social links '.$i.'', 'onepagetheme'),
        'type' => 'text',
        'section' => 'onepage_author_section',
        'active_callback'=>'author_radio_callback'
    ));
}