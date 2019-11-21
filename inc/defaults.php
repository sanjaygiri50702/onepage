
<?php
function onepage_get_default_theme_options() {
    $onepage__default_options = array(
        //default for about section
        'about_title'=>esc_html__('About us','onepagetheme'),
        'about_section_enable'=>1,
        'about_description'=>esc_html__('Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.
','onepagetheme'),
        'about_bar01'=>50,
        'about_bar02'=>50,
        'about_bar03'=>50,

        //default for service section
        'service_section_enable'=>1,
        'service_title'=>esc_html__('Services','onepagetheme'),
        'service_description'=>esc_html__('Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.
','onepagetheme'),

        // default for counter section
        'counter_section_enable'=>1,
        'counter01_value'=>100,
        'counter02_value'=>200,
        'counter03_value'=>300,
        'counter04_value'=>400,
        'counter01_icon'=>'fa-pencil-square-o',
        'counter02_icon'=>'fa-keyboard-o',
        'counter03_icon'=>'fa-picture-o',
        'counter04_icon'=>'fa-users',
        'counter01_title'=>esc_html__('Design'),
        'counter02_title'=>esc_html__('Development'),
        'counter03_title'=>esc_html__('Gallery'),
        'counter04_title'=>esc_html__('users'),

        //default value for portfolio section
        'portfolio_title'=>esc_html__('Portfolio','onepagetheme'),
        'portfolio_section_enable'=>1,
        'portfolio_description'=>esc_html__('Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.','onepagetheme'),
        'portfolio_content_type'=>'category',
        'portfolio_post_number'=>4



    );

//    $output = apply_filters( 'onepage__default_theme_options', $onepage__default_options );

    return $onepage__default_options;
}