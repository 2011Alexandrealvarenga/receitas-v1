<?php 
function br_activate_plugin(){
    
    // verificar versao do WP
    if(version_compare(get_bloginfo('version'),'4.5','<')){
        wp_die('Voce precisa atualizar o WP para usar esse plugin');
    }
}