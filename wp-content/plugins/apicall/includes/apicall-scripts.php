<?php 
    // Add scripts 
    function apicall_add_scripts(){
        // Add main css
        wp_enqueue_style('apicall-main-style', plugins_url().'/apicall/css/style.css');

        // Add main js
        wp_enqueue_script('apicall-main-script', plugins_url().'/apicall/js/main.js');
    }

    add_action('wp_enqueue_scripts', 'apicall_add_scripts');