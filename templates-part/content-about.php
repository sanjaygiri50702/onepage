<div class="page-section no-padding-bottom relative" id="about">
    <div class="container">
        <div class="about-content-title clear">
            <header class="entry-header">
                <h2 class="entry-title">About onepage</h2>
            </header>
            <?php wp_nav_menu( array(
                'theme_location'=>'social',
				'items_wrap'=> '<ul class="social-icons">%3$s</ul>',
				'link_before'=>'<span class="screen-reader-text">',
				'link_after'=>'</span>'
            ) )?>
        </div>
        <div class="entry-content col-2">
            <div class="hentry">
                <div class="skills">
                    <div class="tp-horizontalbar">
                        <div class="tp-skills-horizontalbar">
                            <?php 
                                design_bar(97,'Design');
                                design_bar(82,'Development');
                                design_bar(92,'Management');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hentry">
                <div class="entry-summary">
                    <?php $post=get_post(164);
                    echo $post->post_content;?>
                </div>
            </div>
        </div>
    </div>
</div>