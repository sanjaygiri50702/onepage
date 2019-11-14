<div class="single-blog-wrapper container template-part">
        <div class="page-section clear">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="single-post-wrapper">
                        <article>
                            <div class="container">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="byline"><span class="screen-reader-text">Author</span>
                                            <a class="url fn n" href="#"><?php echo get_the_author_meta('display_name')?></a>
                                        </span><!--.byline-->
                                        <?php if(is_single()):?>
                                        <span class="cat-links">
                                            <span class="screen-reader-text">Categories</span>
                                            <a href="#" rel="category tag"><?php echo get_the_category()[0]->name;?></a>
                                        </span><!-- .cat-links -->
                                        <?php endif; ?>
                                        <span class="posted-on"><span class="screen-reader-text">Posted on</span>
                                            <a href="#" rel="bookmark">
                                                <time class="entry-date published" datetime="2016-07-21T10:00:09+00:00"><?php echo get_the_date();?></time>
                                            </a>
                                        </span><!-- end .posted-on -->
                                        <span class="comments-links">
                                            <span class="screen-reader-text">Comments</span>
                                            <a href="#" class="comments-number"><?php echo get_comments_number();?> comments</a>
                                        </span><!--.comments-link-->
                                    </div><!-- .entry-meta -->
                                    <h2 class="entry-title"><?php the_title();?></h2>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <p><img src="<?php echo get_the_post_thumbnail_url($post->ID,'large');?>"></p>
                                    <?php the_content();?>
                                </div><!-- .entry-content -->
                                <ul class="social-icons">
                                    <li><a href="www.facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
                                    <li><a href="www.twitter.com"><span class="screen-reader-text">Twitter</span></a></li>
                                    <li><a href="www.plus.google.com"><span class="screen-reader-text">Google Plus</span></a></li>
                                    <li><a href="www.instagram.com"><span class="screen-reader-text">Instagram</span></a></li>
                                </ul><!-- .social-icons -->
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
                                    <ul class="social-icons">
                                        <li><a href="www.facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
                                        <li><a href="www.twitter.com"><span class="screen-reader-text">Twitter</span></a></li>
                                        <li><a href="www.plus.google.com"><span class="screen-reader-text">Google Plus</span></a></li>
                                        <li><a href="www.instagram.com"><span class="screen-reader-text">Instagram</span></a></li>
                                    </ul><!-- .social-icons -->
                                </div><!-- .author-content -->
                            </div><!-- .entry-content -->
                        </div><!-- .container -->
                    </div><!-- #about-author -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .page-section/.clear -->
    </div><!-- .template-part -->
