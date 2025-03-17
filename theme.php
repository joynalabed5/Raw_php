<?php
//with function exist we can avoid the error
if ( ! function_exists('register_my_custom_post_type') ) {
    function register_my_custom_post_type() {
        // Register custom post type
    }
    add_action('init', 'register_my_custom_post_type');
}


//without function exist we will get the error
function register_my_custom_post_type() {
    // Register custom post type
}
    add_action('init', 'register_my_custom_post_type');



//example 2
if ( ! function_exists('register_my_custom_post_type') ) {
    function register_my_custom_post_type() {
        // Register custom post type
    }
    add_action('init', 'register_my_custom_post_type');
}
else{
    echo "function already exists";
}

//example 2 without function exists
function register_my_custom_post_type() {
    // Register custom post type
}
    add_action('init', 'register_my_custom_post_type');
    else{
        echo "function already exists";
    }

