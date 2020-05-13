<?php
/**
 * @package Api_Call
 * @version 1.0.0
 */
/*
Plugin Name: Api Call
Plugin URI: http://afikri.net/
Description: This is a very simple plugin for calling json data from https://jsonplaceholder.typicode.com/
Author: Abdul Fikri
Version: 1.0.0
Author URI: http://afikri.net/
*/

//To prevent client access from url link such permalink
if(!defined('ABSPATH')){
    exit;
}

//Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/apicall-scripts.php');

//Load class 
require_once(plugin_dir_path(__FILE__).'/includes/apicall-class.php');

//Register
function register_apicall(){
    register_widget('Apicall_Widget');
}

//Hook in function
add_action('widgets_init', 'register_apicall');