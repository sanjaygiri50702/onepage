<?php
function onepage_render_contact_section(){ ?>
    <div id="contact-form" class="page-section relative">
    <div class="container">
        <div class="find-us-content-title clear">
            <header class="entry-header section-title">
                <h2 class="entry-title">Find Us</h2>
            </header><!-- .entry-header -->
            <p class="description">Cras placerat ipsum sit amet vehicula rhoncus. Aenean blandit leo mauris, ut lobortis diam egestas et. Pellentesque lorem massa, pharetra non dolor eu, pharetra maximus mi. Maecenas et condimentum erat. Donec consectetur neque justo, in faucibus nunc tristique sit amet.</p>
        </div><!-- team-content -->
        <div class="entry-content">
            <div class="contact-information-wrapper col-2">
                <div class="hentry">
                    <ul class="address-block">
                        <li class="address"><label>Address:</label>
                            <span>265 Street, Manbhawan, Lalitpur, Nepal</span></li>
                        <li class="phone"><label>Call Us:</label>
                            <span><a href="tel:977123456789">+977-123456789</a>,
                                <a href="tel:014852137">01-4852137</a></span></li>
                        <li class="email"><label>Email:</label>
                            <span><a href="mailto:info@themepalace.com">info@themepalace.com</a></span></li>
                    </ul><!-- .address-block -->
                </div><!-- .hentry -->

                <div class="hentry">
                    <div role="form" class="wpcf7" id="wpcf7-f21-p2-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/wordpress/sample-page/#wpcf7-f21-p2-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="21">
                                <input type="hidden" name="_wpcf7_version" value="4.5">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f21-p2-o1">
                                <input type="hidden" name="_wpnonce" value="c20cc4e8e4">
                            </div>
                            <p><label> Your Name (required)<br>
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
                            <p><label> Your Email (required)<br>
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
                            <p><label> Subject<br>
                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
                            <p><label> Your Message<br>
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
                            <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"></p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div><!-- .wpcf7 -->
                </div>
            </div><!-- .contact-information-wrapper -->
        </div><!-- .entry-content -->
    </div><!-- .container -->
</div><!-- #contact-form -->
<?php }
?>

