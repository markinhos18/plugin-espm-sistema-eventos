<?php
/*
Plugin Name: ESPM Eventos
Plugin URI: https://espm.br
Description: Integração com o sistema de Eventos
Version: 1.0
Author: ESPM Developers
Author URI: https://espm.br
Text Domain: espmeventos
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'plugins_loaded', 'espm_plugin_eventos' );

function espm_plugin_eventos() {

    register_activation_hook( __FILE__, 'eventos_activation');
    register_deactivation_hook( __FILE__, 'eventos_deactivation');
    register_uninstall_hook(__FILE__, 'eventos_uninstall');

    //VARIÁVEIS DE AMBIENTE
    // include 'includes/class-wp-requerimento-variables.php'; //Sempre será a primeira chamada
  
    //INSERÇÃO DE CSS
    eventos_add_css_admin();

    //INSERÇÃO DE JS
    eventos_add_js_admin();

    //CRIAÇÃO DO MENU
    add_action( 'admin_menu', 'eventos_menu' );

    //AJAX
    // include 'includes/class-wp-requerimento-ajax.php';

    // //INCLUDES
    // include 'includes/class-wp-requerimento-main.php';
    include 'includes/api/class-wp-eventos-api.php';
    include 'includes/api/class-wp-eventos-banner-topo-api.php';
    include 'includes/api/class-wp-eventos-publicos.php';
    include 'includes/api/class-wp-eventos-atividades.php';
    include 'includes/api/class-wp-eventos-campus.php';
    include 'includes/class-wp-eventos-shortcode.php';
    
    
}


function eventos_menu(){
    // add_menu_page('ESPM Requerimentos', 'ESPM Requerimentos', 'manage_options', 'requerimentos', 'Requerimento::Layout_Insercao', 'dashicons-awards', 10);
}




function eventos_add_js_admin(){
    // wp_enqueue_style( 'Select2_4.0.3_CSS',  REQUERIMENTO_ADMIN_CSS.'requerimentos/lib/select2.min.css' );
    // wp_enqueue_script( 'Select2_4.0.3_JS', REQUERIMENTO_ADMIN_JS.'requerimentos/select2.min.js', array('jquery') );
    // wp_enqueue_script( 'Select2_4.0.3_pt-BR_JS', REQUERIMENTO_ADMIN_JS.'requerimentos/pt-BR.js', array('jquery') );
    // wp_enqueue_script( 'Jquery_Validate', REQUERIMENTO_ADMIN_JS.'jquery.validate.js', array ( 'jquery' ));
    // wp_enqueue_script( 'Additional_Methods', REQUERIMENTO_ADMIN_JS.'additional-methods.min.js', array ( 'jquery' ));
    // wp_enqueue_script( 'Validacao_Requerimentos', REQUERIMENTO_ADMIN_JS.'validacao-requerimentos.js', array ( 'jquery' ));   
}



function enqueue_related_pages_scripts_and_styles(){
    wp_enqueue_style('related-styles', plugins_url('public/css/style.css', __FILE__));

    // wp_enqueue_script('releated-script', plugins_url( 'public/js/scripts.js' , __FILE__ ), array('jquery'));

    wp_enqueue_script('releated-script', plugins_url( 'public/js/eventos.js' , __FILE__ ), array('jquery'),'',true  ); 
    
}
add_action('wp_enqueue_scripts','enqueue_related_pages_scripts_and_styles');






function eventos_add_css_admin(){
    // wp_enqueue_style( 'style', REQUERIMENTO_ADMIN_CSS.'style.css');
}


function eventos_activation(){}


function eventos_deactivation(){}


function eventos_uninstall(){}


function eventos_code_head(){}
 

function eventos_code_body(){}