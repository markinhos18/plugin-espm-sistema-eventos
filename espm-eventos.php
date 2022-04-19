<?php
/*
Plugin Name: ESPM Eventos 2
Plugin URI: https://espm.br
Description: Integração com o sistema de Eventos
Version: 2.0
Author: ESPM Developers
Author URI: https://espm.br
Text Domain: espmeventos
License: GPL2
*/

if (!defined('ABSPATH')) exit;

/**
 * Incluir as classes do plugin.
 */
add_action('plugins_loaded', 'espm_init', 11);

function espm_init()
{
  require_once plugin_dir_path(__FILE__) . 'includes/class-espm-ajax.php';
  require_once plugin_dir_path(__FILE__) . 'includes/class-espm-config.php';
  require_once plugin_dir_path(__FILE__) . 'includes/class-espm-requests.php';
  require_once plugin_dir_path(__FILE__) . 'includes/class-espm-shortcodes.php';
  require_once plugin_dir_path(__FILE__) . 'includes/class-espm-main.php';
  require_once plugin_dir_path(__FILE__) . 'common.php';

  ESPM_Main::init();
}

/**
 * Incluir os assets do plugin.
 */
add_action('wp_enqueue_scripts', 'espm_enqueue_scripts');

function espm_enqueue_scripts()
{
  wp_enqueue_style('espm-eventos', plugin_dir_url(__FILE__) . 'assets/css/style.css', array(), '2.0.0', 'all');
  wp_enqueue_script('espm-eventos', plugin_dir_url(__FILE__) . 'assets/js/scripts.js', array('jquery'), '2.0.0', true);
}
