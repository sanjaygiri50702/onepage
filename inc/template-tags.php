<?php
    function onepage_post_author(){ ?>
        <span class="byline">
            <span class="screen-reader-text">Author</span>
            <a class="url fn n" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')));?>">
                <?php echo get_the_author_meta('display_name')?>
            </a>
        </span><!--.byline-->
    <?php }

    function onepage_post_category(){ ?>
        <span class="cat-links">
            <span class="screen-reader-text">Categories</span>
            <a href="#" rel="category tag"><?php echo get_the_category()[0]->name;?></a>
        </span><!-- .cat-links -->
    <?php }

    function onepage_post_on(){ ?>
        <span class="posted-on"><span class="screen-reader-text">Posted on</span>
            <a href="#" rel="bookmark">
                <time class="entry-date published" datetime="2016-07-21T10:00:09+00:00">
                    <?php echo get_the_date();?>
                </time>
            </a>
        </span><!-- end .posted-on -->
    <?php }

    function onepage_post_comment(){ ?>
        <span class="comments-links">
            <span class="screen-reader-text">Comments</span>
            <a href="#" class="comments-number"><?php echo get_comments_number();?> comments</a>
        </span><!--.comments-link-->
    <?php }