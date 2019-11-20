<?php
function onepage_sanitize_text_option( $choice ) {
    $valid = array(
        'default',
        'custom',
    );
    if ( in_array( $choice, $valid, true ) ) {
        return $choice;
    }
    return 'default';
}