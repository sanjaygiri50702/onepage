<div class="wrapper">
    <article>
        <h3 class="post-title"><?php the_title();?></h3>
        <?php the_post_thumbnail('large'); ?>
        <p class="post-content"><?php echo esc_html(get_the_content());  ?></p>
        <?php comments_template();?>
    </article >
</div>
