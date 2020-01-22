<?php

function text( $text){
    $text = strip_tags( $text );

    return apply_filters('my_filter_name', $text );
}

function my_filter_function( $text ){
    return mb_substr( $text, 0, 30 ) .'...';
}

add_filter('my_filter_name', 'my_filter_function');

echo text('Lorem <b>Ipsum</b> is simply dummy text of the printing and typesetting industry');

function new_excerpt_length($Length) {
    return 20;
}

add_filter('excerpt_length', 'new_excerpt_length');