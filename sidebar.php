<?php
if(is_active_sidebar('sidebar-1') && !in_array('no-sidebar',get_body_class())) : ?>
    <aside class="widget-area" id="secondary" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'onepagetheme' ); ?>">
            <div class="widget-column footer-widget-1">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
    </aside><!-- .widget-area -->
<?php endif; ?>