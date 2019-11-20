<div class="single-blog-wrapper container template-part">
    <div class="page-section clear">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="single-post-wrapper">
                    <article>
                        <div class="container">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <?php
                                    onepage_post_author();
                                    if(is_single()):
                                        onepage_post_category();
                                    endif;
                                    onepage_post_on();
                                    onepage_post_comment();
                                    ?>
                                </div><!-- .entry-meta -->
                                <h2 class="entry-title"><?php the_title();?></h2>
                            </header><!-- .entry-header -->
                            <div class="entry-content">
                                <p><img src="<?php echo get_the_post_thumbnail_url($post->ID,'large');?>"></p>
                                <?php the_content();?>
                            </div><!-- .entry-content -->
                            <?php wp_nav_menu(array(
                                    'theme_location'=>'social',
                                    'container'=>'ul',
                                    'menu_class'=>'social-icons',
                                    'link_before'=>'<span class="screen-reader-text">',
                                    'link_after'=>'</span>'
                            ))?>
                        </div><!-- .container -->
                    </article>
                </div><!-- .single-post-wrapper -->
                <nav class="navigation post-navigation" role="navigation">
                    <div class="container">
                        <h2 class="screen-reader-text">Post navigation</h2>
                        <div class="nav-links">
                            <div class="nav-previous">
                                <?php esc_attr(previous_post_link());?>
                            </div><!-- .nav-previous -->
                            <div class="nav-next">
                                <?php next_post_link();?>
                            </div><!-- .nav-next -->
                        </div><!-- .nav-links -->
                    </div><!-- .container -->
                </nav><!-- .navigation -->
                <div id="about-author">
                    <div class="container">
                        <div class="entry-content">
                            <div class="author-image">
                                <img src="<?php echo get_avatar_url($post->ID,array(
                                        'size'=>90
                                ));?>" alt="avatar">
                            </div><!-- .author-image -->
                            <div class="author-content">
                                <div class="author-name clear">
                                    <h2><a href="#"><?php echo get_the_author_meta('display_name')?></a></h2>
                                    <span class="author">Author</span>
                                </div><!--.author-name-->
                                <p><?php echo get_the_author_meta('description')?></p>
                                <?php wp_nav_menu(array(
                                    'theme_location'=>'social',
                                    'container'=>'ul',
                                    'menu_class'=>'social-icons',
                                    'link_before'=>'<span class="screen-reader-text">',
                                    'link_after'=>'</span>'
                                ))?>
                            </div><!-- .author-content -->
                        </div><!-- .entry-content -->
                    </div><!-- .container -->
                </div><!-- #about-author -->
            </main><!-- #main -->
        </div><!-- #primary -->
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <aside class="widget-area" id="secondary" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentynineteen' ); ?>">
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                <div class="widget-column footer-widget-1">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
            <?php } ?>
        </aside><!-- .widget-area -->
        <?php endif; ?>
    </div><!-- .page-section/.clear -->
</div><!-- .template-part -->
