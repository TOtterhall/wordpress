<?php
/*
 * Plugin Name: sport-cpt
 * Description: Handle the custom functions for my site.
 */

//Plugin som tar bort adminbaren
add_filter('show_admin_bar', '__return_false');

//Plugin som lägger till"skor" i adminbaren
add_action('init','register_skor');

function register_skor(){

    $skor_args = [
        'public'=> true,
        'label'=> 'skor',
        'show_in_rest'=>true,
    ];
    register_post_type('löparskor', $skor_args);
    }
    
?>