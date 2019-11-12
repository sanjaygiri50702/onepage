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
                    <?php for($i = 1;$i <= 3;$i++){ ?>
                        <li <?php if($i==2) echo 'class="active"'?>>
                        <a href="#">
                            <img src="<?php echo get_theme_mod('onepage_team0'.$i.'_image_setting');?>" alt="team-01">
                            <h4><?php echo get_theme_mod('onepage_team0'.$i.'_title_setting');?></h4>
                            <span><?php echo get_theme_mod('onepage_team0'.$i.'_description_setting');?></span>
                        </a>
                    </li>
                    <?php }?>
                </ul><!-- .nav-tabs -->

                <div class="tabs-contents-wrapper">
                    <div id="james-henderson" class="tab-pane">
                        <strong class="pull-left">Hello, I am James henderson. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac felis risus.</strong>

                        <div class="entry-summary pull-right">
                            <p>Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.</p>
                            <p>Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.</p>
                        </div><!-- .entry-summary -->
                    </div><!-- .tab-pane -->

                    <div id="annie-nunes" class="tab-pane active">
                        <strong class="pull-left">Hello, I am Annie Nunes. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac felis risus.</strong>

                        <div class="entry-summary pull-right">
                            <p>Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris. Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.</p>
                        </div><!-- .entry-summary -->
                    </div><!-- .tab-pane -->

                    <div id="helga-markus" class="tab-pane">
                        <strong class="pull-left">Hello, I am Helga markus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac felis risus.</strong>

                        <div class="entry-summary pull-right">
                            <p>Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris. Mauris ut metus a nibh fermentum mollis. Cras ullamcorper ac lectus eget hendrerit. Aenean lacinia volutpat blandit. In ultricies iaculis orci queleifend. Nunc in placerat odio. Nullam porta sapien ac nunc egestas aliquam. Nulla vitae pharetra enim. Sed sed consectetur nibh, vel placerat mauris.</p>
                        </div><!-- .entry-summary -->
                    </div><!-- .tab-pane -->
                </div><!-- .tabs-contents-wrapper -->
            </div><!-- .tabs-wrapper -->
        </div><!-- .entry-content -->
    </div><!-- .container --> 
</div><!-- #team -->
