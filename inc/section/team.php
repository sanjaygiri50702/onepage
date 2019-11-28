<?php
function onepage_add_team_section(){
    $options = onepage_get_theme_options();
    if(intval($options['team_section_enable'])!==1){
        return ;
    }
    $section_details = onepage_team_section_details();
    onepage_render_team_section($section_details);

}
function onepage_team_section_details(){
    $options = onepage_get_theme_options();
    $contents =[];
    for ($i = 1; $i <= 3; $i ++){
        array_push($contents,array(
            'team_title'=>$options['team0'.$i.'_title'],
            'team_subtitle'=>$options['team0'.$i.'_subtitle'],
            'team_image'=>$options['team0'.$i.'_image'],
            'team_description'=>$options['team0'.$i.'_description'],
        ));
    }
    return $contents;
}
function onepage_render_team_section($contents = array()){ ?>
    <div id="team" class="page-section relative">
        <div class="container">
            <div class="team-content-title clear">
                <header class="entry-header section-title">
                    <h2 class="entry-title"><?php echo get_theme_mod('onepage_team_title_setting','The Team') ?></h2>
                </header><!-- .entry-header -->
                <p class="description"><?php echo get_theme_mod('onepage_team_description_setting','Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.');?></p>
            </div><!-- team-content -->

            <div class="entry-content">
                <div class="tabs-wrapper">
                    <ul class="nav-tabs">
                        <?php foreach ($contents as $key => $content): ?>
                            <li <?php if($key == 1) echo 'class="active"'?>>
                                <a href="#">
                                    <img src="<?php echo esc_html($content['team_image']);?>" alt="team-01">
                                    <h4><?php echo esc_html($content['team_title']);?></h4>
                                    <span><?php echo esc_html($content['team_subtitle']);?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul><!-- .nav-tabs -->
                    <div class="tabs-contents-wrapper">
                        <?php foreach ($contents as $key=>$content):?>
                        <div id="james-henderson" class="tab-pane <?php if($key == 1) echo esc_attr("active")?>">
                            <div class="entry-summary pull-right">
                                <p><?php echo  esc_html($content['team_description']);?></p>
                            </div><!-- .entry-summary -->
                        </div><!-- .tab-pane -->
                        <?php endforeach;?>
                    </div><!-- .tabs-contents-wrapper -->
                </div><!-- .tabs-wrapper -->
            </div><!-- .entry-content -->
        </div><!-- .container -->
    </div><!-- #team -->

<?php }?>