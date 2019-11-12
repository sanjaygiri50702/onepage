<?php if(!get_theme_mod( 'onepage_counter_radio_setting')){
    return ;
    }?>
<div id="counter" class="page-section relative col-4" style="background-image: url("<?php echo get_template_directory_uri().'/assets/uploads/counter.jpg'?>")">
    <div class="overlay"></div>
    <div class="container">
        <div class="hentry">
            <div class="statwrap">
                <i class="fa <?php echo get_theme_mod('onepage_counter01_icon_setting','fa-pencil-square-o');?>"></i>
                <h1 class="stat-count"><?php echo get_theme_mod('onepage_counter01_setting');?></h1>
                <small><?php echo get_theme_mod('onepage_counter01_title_setting');?></small>
            </div><!-- .statwrap -->
        </div><!-- .hentry -->

        <div class="hentry">
            <div class="statwrap">
                <i class="fa <?php echo get_theme_mod('onepage_counter01_icon_setting','fa-keyboard-o');?>"></i>
                <h1 class="stat-count"><?php echo get_theme_mod('onepage_counter02_setting');?></h1>
                <small><?php echo get_theme_mod('onepage_counter02_title_setting');?></small>
            </div><!-- .statwrap -->
        </div><!-- .hentry -->

        <div class="hentry">
            <div class="statwrap">
                <i class="fa <?php echo get_theme_mod('onepage_counter01_icon_setting','fa-picture-o');?>"></i>
                <h1 class="stat-count"><?php echo get_theme_mod('onepage_counter03_setting');?></h1>
                <small><?php echo get_theme_mod('onepage_counter03_title_setting');?></small>
            </div><!-- .statwrap -->
        </div><!-- .hentry -->

        <div class="hentry">
            <div class="statwrap">
                <i class="fa <?php echo get_theme_mod('onepage_counter01_icon_setting','fa-users');?>"></i>
                <h1 class="stat-count"><?php echo get_theme_mod('onepage_counter04_setting');?></h1>
                <small><?php echo get_theme_mod('onepage_counter04_title_setting');?></small>
            </div><!-- .statwrap -->
        </div><!-- .hentry -->
    </div><!-- .container -->
</div><!-- #counter -->