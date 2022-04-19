<?php

/**
 * Este arquivo contém a classe que gerencia as requisições AJAX fitas ao plugin.
 */

if (!defined('ABSPATH')) exit;

class ESPM_Ajax
{
  private static $instance;

  private function __construct()
  {
    add_action('wp_ajax_resultados', [$this, 'resultados']);
    add_action('wp_ajax_nopriv_resultados', [$this, 'resultados']);
  }

  public static function init()
  {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  /**
   * Retorna o HTML com os resultados da pesquisa.
   */
  public function resultados()
  {
    // Filtros
    $filtros = [
      'campusIds' => isset($_POST['campusIds']) ? $_POST['campusIds'] : [],
      'publicosIds' => isset($_POST['publicosIds']) ? $_POST['publicosIds'] : '',
      'modelo' => isset($_POST['modelo']) ? $_POST['modelo'] : '',
      'investimento' => isset($_POST['investimento']) ? $_POST['investimento'] : '',
      'data' => isset($_POST['data']) ? $_POST['data'] : '',
    ];

    // Resultado da pesquisa
    $resultado = ESPM_Requests::getEventos($filtros);

    if (!isset($resultado->data)) {
      echo 'sem_resultados';
      die();
    }

    $eventos = $resultado->data;

    // Ordenação
    $ordem = isset($_POST['ordem']) ? $_POST['ordem'] : 'asc';

    if ($ordem == 'asc') {
      // A - Z
      usort($eventos, fn ($a, $b) => $b->titulo <=> $a->titulo);
    } else {
      // Z - A
      usort($eventos, fn ($a, $b) => $a->titulo <=> $b->titulo);
    }

    // echo print_r($eventos, true);
    // die();

    // Atividades dos eventos
    foreach ($eventos as $evento) {
      $atividades = ESPM_Requests::getAtividadesPorEvento($evento->id);
    }

    include plugin_dir_path(__FILE__) . '../templates/resultados.php';

    die();
  }
}
