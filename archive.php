<?php
get_header();?>
<div class="container template-part">
    <div class="page-section clear">

<?php
if (have_posts() ) : ?>
    <?php
    if(is_category()){?>
        <h2 class="entry-title"><?php echo single_cat_title();?></h2>
    <?php
    }elseif (is_tag()) { ?>
       <h2 class="entry-title"><?php echo single_tag_title();?></h2>
    <?php
    }elseif (is_author()) {
        the_post();?>
        <h2 class="entry-title"><?php echo "Author archives: " . get_the_author();?></h2>
        <?php
    }elseif (is_day()) { ?>
        <h2 class="entry-title"><?php  echo "Daily archives: " . get_the_date();?></h2>
    <?php
    }elseif (is_month()) { ?>
        <h2 class="entry-title"><?php echo "Monthly archives: " . get_the_date('F Y'); ?></h2>
    <?php
    }elseif (is_year()) { ?>
        <h2 class="entry-title"><?php echo "Yearly archives: " . get_the_date();?></h2>
    <?php
    }else{ ?>
        <h2 class="entry-title"><?php echo "Archives";?></h2>
    <?php
    }
    ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="blog-posts-wrapper col-3 clear">
    <?php while (have_posts()) : the_post();
        get_template_part( 'templates-part/content');
    endwhile;
else:
    get_template_part('templates-part/content','none');
endif; ?>
                </div>
            </main>
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>