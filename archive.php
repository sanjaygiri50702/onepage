<?php
get_header();
if (have_posts() ) : ?>
    <?php
    if(is_category()){
        single_cat_title();
    }elseif (is_tag()) {
        single_tag_title();
    }elseif (is_author()) {
        the_post();
        echo "Author archives: " . get_the_author();
    }elseif (is_day()) {
        echo "Daily archives: " . get_the_date();
    }elseif (is_month()) {
        echo "Monthly archives: " . get_the_date('F Y');
    }elseif (is_year()) {
        echo "Yearly archives: " . get_the_date();
    }else{
        echo "Archives";
    }
    ?>

    <?php while (have_posts()) : the_post();
        get_template_part( 'templates-part/content','single');
    endwhile;
else:
    get_template_part('templates-part/content','none');
endif;
get_footer();
?>