<?php 
    $query = new WP_Query(array(
        'cat'=>22,
        'posts_per_page'=>1
    ));
?>
<div id="author" class="col-2 relative">
    <div class="container">
        <div class="author-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 600, "dots": false, "arrows":true, "autoplay": true, "fade": false }'>
        <?php if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();  ?>  
                    <div class="slick-item">
                        <div class="hentry">
                            <div class="featured-image" style="background-image: url(<?php echo get_template_directory_uri().'/assets/uploads/author-slider.png'?>);"></div>
                        </div><!-- .hentry -->
                        <div class="hentry">
                            <div class="author-slider-content">
                                <header class="entry-header">
                                    <h2 class="entry-title"><?php the_title();?></h2>
                                    <span>UI/UX Designer</span>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php the_content();?></p>
                                </div><!-- .entry-content -->
                                <ul class="social-icons">
                                    <li><a href="www.facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
                                    <li><a href="www.twitter.com"><span class="screen-reader-text">Twitter</span></a></li>
                                    <li><a href="www.plus.google.com"><span class="screen-reader-text">Google Plus</span></a></li>
                                    <li><a href="www.instagram.com"><span class="screen-reader-text">Instagram</span></a></li>
                                </ul><!-- .social-icons -->
                            </div><!-- .author-slider-content -->
                        </div><!-- .hentry -->
                    </div><!-- .slick-item -->
                <?php endwhile;
            endif;
            wp_reset_postdata()
        ?>    
        </div><!-- .author-slider -->
    </div><!-- .container -->
</div><!-- #author -->

