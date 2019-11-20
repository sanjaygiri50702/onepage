
<?php
function onepage_get_default_theme_options() {
    $onepage__default_options = array(
        'about_title'=>esc_html__('About us','onepage'),
        'about_section_enable'=>1
    );

//    $output = apply_filters( 'onepage__default_theme_options', $onepage__default_options );

    return $onepage__default_options;
}