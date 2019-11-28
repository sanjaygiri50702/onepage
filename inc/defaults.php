
<?php
function onepage_get_default_theme_options() {
    $onepage__default_options = array(
        //default for about section
        'about_title'=>esc_html__('About us','onepagetheme'),
        'about_section_enable'=>1,
        'about_description'=>esc_html__('Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.','onepagetheme'),
        'about_bar01'=>50,
        'about_bar02'=>50,
        'about_bar03'=>50,

        //default for service section
        'service_section_enable'=>1,
        'service_title'=>esc_html__('Services','onepagetheme'),
        'service_description'=>esc_html__('Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.','onepagetheme'),

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
        'portfolio_post_number'=>4,
        'portfolio_post_col'=>2,

        //default value for portfolio section
        'author_title'=>esc_html__('Author','onepagetheme'),
        'author_section_enable'=>1,
        'author_subtitle'=>esc_html__('UI/UX Designer','onepagetheme'),
        'author_social_link'=>'',
        'author_description'=>esc_html__('Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris. Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.','onepagetheme'),
        'blog_section_enable'=>1,
        'blog_title'=>esc_html__('latest Blog','onepagetheme'),
        'blog_description'=>esc_html__('Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.','onepagetheme'),
        'blog_content_type'=>'category',
        'blog_post_number'=>4,
        //default value for team section
        'team_title'=>esc_html__('Team','onepagetheme'),
        'team_description'=>esc_html__('Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.','onepagetheme'),
        'team_section_enable'=>1,
        'team_select'=>1,
        'team01_title'=>esc_html__('sanjay giri','onepagetheme'),
        'team01_subtitle'=>esc_html__('Developer','onepagetheme'),
        'team01_description'=>esc_html__('Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris. Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.','onepagetheme'),
        'team01_image'=> get_template_directory_uri() . '/assets/uploads/team-01.jpg',
        'team02_title'=>esc_html__('sanjay giri','onepagetheme'),
        'team02_subtitle'=>esc_html__('Designer','onepagetheme'),
        'team02_description'=>esc_html__('Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris. Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.','onepagetheme'),
        'team02_image'=> get_template_directory_uri() . '/assets/uploads/team-02.jpg',
        'team03_title'=>esc_html__('sanjay giri','onepagetheme'),
        'team03_subtitle'=>esc_html__('Photographer','onepagetheme'),
        'team03_description'=>esc_html__('Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris. Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.','onepagetheme'),
        'team03_image'=> get_template_directory_uri() . '/assets/uploads/team-03.jpg',
        //defaults value for client section
        'client_section_enable'=>1,
        'client_number'=>3,
        'client01_image'=>get_template_directory_uri(). '/assets/uploads/client-01.png',
        'client02_image'=>get_template_directory_uri(). '/assets/uploads/client-02.png',
        'client03_image'=>get_template_directory_uri(). '/assets/uploads/client-03.png',
        //defaults value for testimonial section
        'testimonial_section_enable'=>1,
        'testimonial_title'=>esc_html__('What people says','onepagetheme'),
        'testimonial_description'=>esc_html__('Cras placerat ipsum sit ameaat vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi.','onepagetheme'),
        'testimonial_author'=>esc_html__('Sudhama prajapati','onepagetheme'),
        //layout
        'post_layout'=>'single-post no-sidebar',
        'page_layout'=>'single-post no-sidebar',
        'blog_layout'=>'no-sidebar',


    );

//    $output = apply_filters( 'onepage__default_theme_options', $onepage__default_options );

    return $onepage__default_options;
}