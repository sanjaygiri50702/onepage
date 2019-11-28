<?php
function onepage_add_about_section(){
    $options = onepage_get_theme_options();
    if(intval($options['about_section_enable'])!==1){
    return ;
    }
    $section_details = onepage_about_section_details();
    onepage_render_about_section($section_details);

}
    function onepage_about_section_details(){
        $options = onepage_get_theme_options();
        $content['title'] = $options['about_title'];
        $content['description'] = $options['about_description'];
        $content['bar01'] = $options['about_bar01'];
        $content['bar02'] = $options['about_bar02'];
        $content['bar03'] = $options['about_bar03'];
        return $content;
    }
function onepage_render_about_section($content = array()){ ?>
    <div class="page-section no-padding-bottom relative" id="about">
        <div class="container">
            <div class="about-content-title clear">
                <header class="entry-header">
                    <h2 class="entry-title"><?php echo esc_html__($content['title'])?></h2>
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
                                design_bar($content['bar01'],'Design');
                                design_bar($content['bar02'],'Development');
                                design_bar($content['bar03'],'Management');
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
                        echo esc_html($content['description']);
                        ?>
                    </div><!-- .entry-summary -->
                </div><!-- .hentry -->
            </div><!-- .entry-content col-2 -->
        </div><!-- .container -->
    </div><!-- .page-section no-padding-bottom relative -->
<?php }?>