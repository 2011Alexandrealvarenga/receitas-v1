<?php 
/*
Plugin Name: Receitas
Plugin URI:
Description: 
Version: 5.12.3
Author: 
Author URI:
Text Domain: 
Domain Path: /lang
*/

// recurso de segurança
if(!function_exists('add_action')){
    echo 'Opa! eu sou só um plugin, não posso ser chamado diretamente';
    exit;
}
// setup

// includes
include('includes/activate.php');
include('includes/init.php');

// hooks
register_activation_hook(__FILE__, 'br_activate_plugin');
add_action('init','br_receitas_init');


// shortcodes