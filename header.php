<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' )?></title>
</head>
<?php wp_head()?>
<body <?php body_class();?>">
<div id="page" class="site">
    <?php color_switcher();?>
    <header class="site-header" id="masthead">
        <div class="site-menu">
            <div class="container">
                <div class="site-branding pull-left">
                    <div class="site-logo">
                        <a href="<?php echo esc_url(home_url());?>"><img src="<?php echo get_template_directory_uri().'/assets/uploads/logo.png'?>" class="custom-logo" alt="logo"></a>
                    </div><!-- .site-logo -->
                    <div id="site-details">
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url());?>" rel="home">one Page</a></h1>
                        <p class="site-description">WP Theme</p>
                    </div><!-- #site-details -->
                </div><!-- .site-branding -->
                <button class="menu-toggle">
                    <span aria-hidden="true" class="icon"></span>
                </button><!-- .menu-toggle -->
                <?php wp_nav_menu(array(
                    'theme_location'=>'primary',
                    'container'=>'nav',
                    'container_class'=>'main-navigation',
                    'container_id'=>'site-navigation',
                    'menu_class'=>'menu nav-menu',
                    'menu_id'=>'primary-menu',
                ))?>
            </div><!-- .container -->
        </div><!-- .site-menu -->
        <div id="header-featured-image" class="relative">
            <div class="overlay"></div>
            <div id="wp-custom-header" class="wp-custom-header">
                <video id="wp-custom-header-video" autoplay="" loop="" width="1920" height="1080" src="<?php echo get_template_directory_uri().'/assets/video/video.mp4'?>">
                </video>
                <button type="button" id="wp-custom-header-video-button" class="wp-custom-header-video-button wp-custom-header-video-play">
                    pause
                </button>
            </div>
            <div class="video-content">
                <div class="video-title">
                    <h1>Simple yet Beautiful</h1>
                    <h2>Interfaces</h2>
                </div><!-- .video-title -->
            </div><!-- .video-content -->
            <div class="move-down">
                <a href="#content" class="scroll-link active">
                    <img src="<?php echo get_template_directory_uri().'/assets/uploads/icon-01.png'?>" alt="icon" class="icon-animation">
                </a>
            </div><!-- .move-down -->
        </div><!--header featured image-->
    </header>
    <?php icon_menu();?>
    <div id="content" class="site-content">
        <?php if(is_front_page()):
        add_action('onepage_primary_content','onepage_add_about_section');
        add_action('onepage_primary_content','onepage_add_service_section');
        add_action('onepage_primary_content','onepage_add_counter_section');
        add_action('onepage_primary_content','onepage_add_portfolio_section');
        add_action('onepage_primary_content','onepage_add_author_section');
        add_action('onepage_primary_content','onepage_add_blog_section');
        add_action('onepage_primary_content','onepage_add_testimonial_section');
        add_action('onepage_primary_content','onepage_add_team_section');
        add_action('onepage_primary_content','onepage_add_client_section');
        add_action('onepage_primary_content','onepage_render_contact_section');
        do_action('onepage_primary_content');
        get_footer();
        endif; ?>
