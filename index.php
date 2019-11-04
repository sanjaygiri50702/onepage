<?php
get_header();
if (have_posts() ) : 
	while (have_posts()) : the_post();
	get_template_part( 'templates-part/content' );
    endwhile;
	else:
        get_template_part('template-parts/content','none');       
endif;
get_footer();
?>