<?php
function onepage_add_about_details(){
    $options = onepage_get_theme_options();
    $section_details = onepage_about_section_details();
    onepage_render_about_section($section_details);
}
    function onepage_about_section_details(){
        $options = onepage_get_theme_options();
        $content['title'] = $options['about_title'];
        $content['description'] = $options['description'];
        return $content;
    }
function onepage_render_about_section($content = array()){ ?>
    <div class="page-section no-padding-bottom relative" id="about">
        <div class="container">
            <div class="about-content-title clear">
                <header class="entry-header">
                    <h2 class="entry-title"><?php $content['title']?></h2>
                </header>
                <?php wp_nav_menu( array(
                    'theme_location'=>'social',
                    'items_wrap'=> '<ul class="social-icons">%3$s</ul>',
                    'link_before'=>'<span class="screen-reader-text">',
                    'link_after'=>'</span>'
                ) )?>
            </div><!-- .about-content-title clear -->
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
                            </div><!-- .tp-skills-horizontalbar -->
                        </div><!-- .tp-horizontalbar -->
                    </div><!-- .skills -->
                </div><!-- .hentry -->
                <div class="hentry">
                    <div class="entry-summary">
                        <?php
                        /* $post=get_post(164);
                        echo $post->post_content;*/
                        echo get_theme_mod( 'onepage_about_description_setting');
                        ?>
                    </div><!-- .entry-summary -->
                </div><!-- .hentry -->
            </div><!-- .entry-content col-2 -->
        </div><!-- .container -->
    </div><!-- .page-section no-padding-bottom relative -->
<?php }?>