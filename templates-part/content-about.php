<?php if(!get_theme_mod( 'onepage_about_radio_setting')){
    return ;
    }?>
<div class="page-section no-padding-bottom relative" id="about">
    <div class="container">
        <div class="about-content-title clear">
            <header class="entry-header">
                <h2 class="entry-title"><?php echo get_theme_mod('onepage_about_title_setting','default');?></h2>
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
                                design_bar(get_theme_mod('onepage_bar01_setting'),'Design');
                                design_bar(get_theme_mod('onepage_bar02_setting'),'Development');
                                design_bar(get_theme_mod('onepage_bar03_setting'),'Management');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hentry">
                <div class="entry-summary">
                    <?php
                    /* $post=get_post(164);
                    echo $post->post_content;*/
                    echo get_theme_mod( 'onepage_about_description_setting');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
