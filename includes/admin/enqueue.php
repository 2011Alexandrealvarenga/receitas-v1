<?php 

function br_admin_enqueue(){
    // tipo de post
    global $typenow;

    if($typenow != 'receita'){
        return;
    }

    // registros
    wp_register_style(
        'br_style',
        plugins_url('/assets/css/style.css', RECEITA_PLUGIN_URL)
    );

    // uso
    wp_enqueue_style('br_style');

}