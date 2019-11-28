<?php
get_header();
if (have_posts() ) :
    echo 'index.php';
	while (have_posts()) : the_post();
    get_template_part('templates-part/content','single');
    endwhile;
    else:
        get_template_part('templates-part/content','none');
endif;
get_footer();
