<?php
class Onepage_slider_control extends WP_Customize_Control {

    public $type = 'slider_control';

    public function enqueue() {
        wp_enqueue_script( 'onepage-custom-controls-js', get_template_directory_uri(). '/assets/js/customizer.js', array( 'jquery', 'jquery-ui-core' ), '1.0', true );
        wp_enqueue_style( 'onepage-custom-controls-css', get_template_directory_uri(). '/assets/css/customizer.css', array(), '1.0', 'all' );
    }

    public function render_content() {
        ?>
        <div class="slider-custom-control">
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>
            <input type="number" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-slider-value" <?php $this->link(); ?> />
            <div class="slider" slider-min-value="<?php echo esc_attr( $this->input_attrs['min'] ); ?>" slider-max-value="<?php echo esc_attr( $this->input_attrs['max'] ); ?>" slider-step-value="<?php echo esc_attr( $this->input_attrs['step'] ); ?>"></div><span class="slider-reset dashicons dashicons-image-rotate" slider-reset-value="<?php echo esc_attr( $this->value() ); ?>"></span>
        </div>
        <?php
    }
}

class Onepage_toggle_switch extends WP_Customize_Control {

    public $type = 'toggle_switch';

    public function enqueue(){
        wp_enqueue_style( 'onepage-custom-controls-css', get_template_directory_uri(). '/assets/css/customizer.css', array(), '1.0', 'all' );
    }

    public function render_content(){
        ?>
        <div class="toggle-switch-control">
            <div class="toggle-switch">
                <input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="toggle-switch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
                <label class="toggle-switch-label" for="<?php echo esc_attr( $this->id ); ?>">
                    <span class="toggle-switch-inner"></span>
                    <span class="toggle-switch-switch"></span>
                </label>
            </div>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <?php if( !empty( $this->description ) ) { ?>
                <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
            <?php } ?>
        </div>
        <?php
    }
}
class Onepage_social_link extends WP_Customize_Control {

    public $type = 'sortable_repeater';

    public $button_labels = array();

    public function __construct( $manager, $id, $args = array(), $options = array() ) {
        parent::__construct( $manager, $id, $args );
        // Merge the passed button labels with our default labels
        $this->button_labels = wp_parse_args( $this->button_labels,
            array(
                'add' => __( 'Add links', 'onepagetheme' ),
            )
        );
    }

    public function enqueue() {
        wp_enqueue_script( 'onepage-custom-controls-js', get_template_directory_uri(). '/assets/js/customizer.js', array( 'jquery', 'jquery-ui-core' ), '1.0', true );
        wp_enqueue_style( 'onepage-custom-controls-css', get_template_directory_uri(). '/assets/css/customizer.css', array(), '1.0', 'all' );
    }

    public function render_content() {
        ?>
        <div class="sortable_repeater_control">
            <?php if( !empty( $this->label ) ) { ?>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <?php } ?>
            <?php if( !empty( $this->description ) ) { ?>
                <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
            <?php } ?>
            <input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-sortable-repeater" <?php $this->link(); ?> />
            <div class="sortable_repeater sortable">
                <div class="repeater">
                    <input type="text" value="" class="repeater-input" placeholder="https://" /><span class="dashicons dashicons-sort"></span><a class="customize-control-sortable-repeater-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a>
                </div>
            </div>
            <button class="button customize-control-sortable-repeater-add" type="button"><?php echo $this->button_labels['add']; ?></button>
        </div>
        <?php
    }
}