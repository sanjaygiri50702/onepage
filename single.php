<?php
if (have_posts() ) :
	while (have_posts()) : the_post();
    get_template_part('templates-part/content','single');
    endwhile;
    else:
        get_template_part('templates-part/content','none');
endif;
get_footer();
?>