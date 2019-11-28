<article id="post-1" class="hentry">
    <div class="featured-image">
        <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID,'full');?>"></a>
    </div><!--.featured-image-->

    <div class="entry-container">
        <div class="entry-meta">
        <?php
        onepage_post_author();
        onepage_post_category();
        onepage_post_on();

        ?>
        </div><!-- .entry-meta -->

        <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h2>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <p><?php the_excerpt();?></p>

            <a href="<?php the_permalink();?>" class="btn btn-fill">Read More</a>
        </div><!--.blog-content-->
    </div><!-- .entry-container -->
</article><!-- #post-1 -->