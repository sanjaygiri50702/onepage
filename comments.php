<div id="comments" class="page-section <?php echo comments_open() ? 'comments-area' : 'comments-area comments-closed'; ?>">
    <div class="container">
        <h2 class="comments-title entry-title"><?php echo get_comments_number();?> Comments</h2>
    <?php
    if ( have_comments() ) :?>
        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'short_ping'  => true,
                    'style'       => 'ol',
                    'avatar_size'=>90,
                    'walker'      => new Onepage_Walker_Comment(),
                )
            );
            ?>
        </ol><!-- .comment-list -->
    <?php endif;
    if ( comments_open() ) {
        comment_form( 'desc' );
    }?>
    </div>
</div> <!-- #comments -->