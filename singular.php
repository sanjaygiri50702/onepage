<?php

get_header();
if(is_front_page())
    return ;
if (have_posts() ) :
    while (have_posts()) : the_post();
        get_template_part('templates-part/content','single');
        comments_template();
    endwhile;
else:
    get_template_part('templates-part/content','none');
endif;
get_footer();
