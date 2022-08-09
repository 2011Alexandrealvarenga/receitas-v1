<?php 
include 'metabox_br_receita_opcoes.php';
include 'enqueue.php';

function br_receitas_admin_init(){
    add_action('add_meta_boxes_receita','br_receitas_metabox');
    add_action('admin_enqueue_scripts','br_admin_enqueue');
}
function br_receitas_metabox(){
    add_meta_box(
        'br_receita_opcoes', __('opções da receita','receitas'),
        'br_receita_opcoes',
        'receita',
        'normal',//posicao no painel
        'high'//posicao no painel
    );
}