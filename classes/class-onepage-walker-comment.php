<?php

class Onepage_Walker_Comment extends Walker_Comment{
    protected function html5_comment($comment, $depth, $args)
    { ?>
        <<?php echo $args['style']?> id="comment-<?php comment_ID();?>" class="comment even thread-even depth-1 parent <?php echo (!$comment->comment_parent == 0) ? 'odd' :''?>">
            <article id="div-comment-<?php comment_ID();?>" class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <?php echo get_avatar($comment->comment_ID,$args['avatar_size']); ?>
                    </div><!-- .comment-author -->
                    <div class="comment-content">
                    <div class="comment-author-details">
                        <b class="fn">
                            <a href="#" rel="external nofollow" class="url"><?php echo $comment->comment_author?></a>
                        </b><span class="says">says:</span>
                        <div class="comment-metadata">
                            <a href="#">
                            <time datetime="2016-09-04T10:30:13+00:00"><?php comment_date();?></time>
                        </a>
                        </div><!-- .comment-metadata -->
                    </div>
                        <p><?php echo $comment->comment_content;?></p>
                    </div>
                </footer><!-- .comment-meta -->
                <div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://localhost/wordpress/2016/08/23/other-post/?replytocom=2#respond" onclick="return addComment.moveForm( &quot;div-comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;27&quot; )" aria-label="Reply to dai">Reply</a></div>
            </article><!-- .comment-body -->
        </<?php echo $args['style']?>>
    <?php }
}