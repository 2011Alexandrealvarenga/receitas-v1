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
define('RECEITA_PLUGIN_URL', __FILE__);

// includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/admin_init.php');

// hooks
register_activation_hook(RECEITA_PLUGIN_URL, 'br_activate_plugin');
add_action('init','br_receitas_init');
add_action('admin_init','br_receitas_admin_init'); //painel do wp-admin
add_action('save_post_receita','br_save_post_admin', 10 ,3); //salva os dados do metabox inseridos no post

// shortcodes