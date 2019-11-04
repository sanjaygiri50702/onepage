<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' )?></title>
</head>
<?php wp_head()?>
<body class="home">
<header class="site-header">
    <div class="site-menu">
        <div class="container">
            <div class="site-branding pull-left">
                <div class="site-logo">
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri().'/assets/uploads/logo.png'?>" alt="logo" class="custom-logo">
                    </a>
                </div>
                <div id="site-details">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url());?>"><?php bloginfo( 'name' ) ?></a>
                    </h1>
                </div>
            </div>
        </div>
        <!-- <div id="header-featured-image" class="relative">
            <div class="overlay"></div>
            <div id="wp-custom-header" class="wp-custom-header">
                <video id="wp-custom-header-video" autoplay="" loop="" width="1920" height="1080" src="<?php echo get_template_directory_uri().'/assets/video/video.mp4' ?>">
                </video>
                <button type="button" id="wp-custom-header-video-button" class="wp-custom-header-video-button wp-custom-header-video-play">Pause</button>
            </div>
        </div> -->
    </div>
</header>
<div class="icons-menu">
        <ul>
            <li class="active"><a href="#masthead" class="scroll-link">
                <i class="fa fa-home"></i>
                <span>Home</span></a>
            </li>
            <li><a href="#about" class="scroll-link">
                <i class="fa fa-user"></i>
                <span>About</span></a>
            </li>
            <li><a href="#services" class="scroll-link">
                <i class="fa fa-cog"></i>
                <span>services</span></a>
            </li>

            <li><a href="#counter" class="scroll-link">
                <i class="fa fa-star-o"></i>
                <span>counter</span></a>
            </li>

            <li><a href="#portfolio" class="scroll-link">
                <i class="fa fa-file-picture-o"></i>
                <span>portfolio</span></a>
            </li>

            <li><a href="#author" class="scroll-link">
                <i class="fa fa-envelope-o"></i>
                <span>author</span></a>
            </li>

            <li><a href="#latest-blog" class="scroll-link">
                <i class="fa fa-address-card-o"></i>
                <span>blog</span></a>
            </li>

            <li><a href="#testimonial" class="scroll-link">
                <i class="fa fa-commenting-o"></i>
                <span>testimonial</span></a>
            </li>

            <li><a href="#team" class="scroll-link">
                <i class="fa fa-handshake-o"></i>
                <span>team</span></a>
            </li>

            <li><a href="#client" class="scroll-link">
                <i class="fa fa-phone"></i>
                <span>client</span></a>
            </li>

            <li><a href="#contact-form" class="scroll-link">
                <i class="fa fa-wifi"></i>
                <span>contact</span></a>
            </li>
        </ul>
    </div><!-- .icons-menu -->
<div id="content" class="site-content">