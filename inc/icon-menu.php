<?php function icon_menu(){
    $option = onepage_get_theme_options();
    if(is_front_page()):?>
<div class="icons-menu">
    <ul>
        <li class="active"><a href="#masthead" class="scroll-link">
                <i class="fa fa-home"></i>
                <span>Home</span></a>
        </li>
        <?php if(absint($option['about_section_enable'])):?>
        <li><a href="#about" class="scroll-link">
                <i class="fa fa-user"></i>
                <span>About</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['service_section_enable'])):?>
        <li><a href="#services" class="scroll-link">
                <i class="fa fa-cog"></i>
                <span>services</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['counter_section_enable'])):?>
        <li><a href="#counter" class="scroll-link">
                <i class="fa fa-star-o"></i>
                <span>counter</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['portfolio_section_enable'])):?>
        <li><a href="#portfolio" class="scroll-link">
                <i class="fa fa-file-picture-o"></i>
                <span>portfolio</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['author_section_enable'])):?>
            <li><a href="#author" class="scroll-link">
                <i class="fa fa-envelope-o"></i>
                <span>author</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['blog_section_enable'])):?>
        <li><a href="#latest-blog" class="scroll-link">
                <i class="fa fa-address-card-o"></i>
                <span>blog</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['testimonial_section_enable'])):?>
        <li><a href="#testimonial" class="scroll-link">
                <i class="fa fa-commenting-o"></i>
                <span>testimonial</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['team_section_enable'])):?>
        <li><a href="#team" class="scroll-link">
                <i class="fa fa-handshake-o"></i>
                <span>team</span></a>
        </li>
        <?php endif;?>
        <?php if(absint($option['client_section_enable'])):?>
        <li><a href="#client" class="scroll-link">
                <i class="fa fa-phone"></i>
                <span>client</span></a>
        </li>
        <?php endif;?>
        <li><a href="#contact-form" class="scroll-link">
                <i class="fa fa-wifi"></i>
                <span>contact</span></a>
        </li>
    </ul>
</div><!-- .icons-menu -->

<?php endif;
} ?>