<?php

function my_action_function( $text ){
    echo 'Сщбытие "my_action" сработало сейчас.';
}

add_action('my_action', 'my_action_function');


do_action('my_action');
