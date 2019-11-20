<?php

function validate_about_counter($validity, $value){
    $value = intval($value);
    if (!is_numeric($value)) {
        $validity->add( 'percent_value_not_numeric', __( 'value is not numeric' ) );
    } elseif ($value < 0) {
        $validity->add( 'percent_value_small', __( 'percent is lesser than 0' ) );
    } elseif ($value > 100) {
        $validity->add( 'percent_value_large', __( 'Percent is greater than 100' ) );
    }
    return $validity;
}