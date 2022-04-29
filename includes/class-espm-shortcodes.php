<?php

/**
 * Este arquivo contém os shortcodes do plugin.
 */

if (!defined('ABSPATH')) exit;

class ESPM_Shortcodes
{
  private static $instance;

  private function __construct()
  {
    add_shortcode('eventos', [$this, 'eventos']);
    add_shortcode('eventodetalhe', [$this, 'eventodetalhe']);
  }



  public static function init()
  {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  /**
   * Exibe á página de eventos
   */
  public function eventos()
  {
    // Filtros
    $filtros = [
      'campusIds' => isset($_POST['campusIds']) ? $_POST['campusIds'] : [],
      'publicosIds' => isset($_POST['publicosIds']) ? $_POST['publicosIds'] : '',
      'modelo' => isset($_POST['modelo']) ? $_POST['modelo'] : '',
      'investimento' => isset($_POST['investimento']) ? $_POST['investimento'] : '',
      'data' => isset($_POST['data']) ? $_POST['data'] : '',
    ];

    // Valores dos campos do filtro
    $campus = ESPM_Requests::getCampus();
    $publico = ESPM_Requests::getPublicoPorVitrine();

    $modelos = [
      "On-line" => 'Online',
      "Presencial" => 'Presencial',
      "Hibrido" => 'Hibrido'
    ];

    $investimentos = [
      "Gratuito" => 'Gratuito',
      "Pago" => 'Pago'
    ];

    // Banner de destaque
    $bannerDestaque = ESPM_Requests::getBannersDestaque();

    // Resultado da pesquisa
    $eventos = ESPM_Requests::getEventos($filtros);

    // Atividades dos eventos
    if (isset($eventos)) {
      foreach ($eventos->data as $evento) {
        $atividades = ESPM_Requests::getAtividadesPorEvento($evento->id);
      }
    }

    include plugin_dir_path(__FILE__) . '../templates/eventos.php';
  }

  /**
   * Exibe á página de cada evento evento
   */
  public function eventodetalhe()
  {
    // Filtros
    $filtros = [
      'campusIds' => isset($_POST['campusIds']) ? $_POST['campusIds'] : [],
      'publicosIds' => isset($_POST['publicosIds']) ? $_POST['publicosIds'] : '',
      'modelo' => isset($_POST['modelo']) ? $_POST['modelo'] : '',
      'investimento' => isset($_POST['investimento']) ? $_POST['investimento'] : '',
      'data' => isset($_POST['data']) ? $_POST['data'] : '',
    ];

    // Valores dos campos do filtro
    $campus = ESPM_Requests::getCampus();
    $publico = ESPM_Requests::getPublicoPorVitrine();

    $modelos = [
      "On-line" => 'Online',
      "Presencial" => 'Presencial',
      "Hibrido" => 'Hibrido'
    ];

    $investimentos = [
      "Gratuito" => 'Gratuito',
      "Pago" => 'Pago'
    ];

    // Banner de destaque
    $bannerDestaque = ESPM_Requests::getBannersDestaque();

    // Resultado da pesquisa
    $eventos = ESPM_Requests::getEventos($filtros);

    // Atividades dos eventos
    if (isset($eventos)) {
      foreach ($eventos->data as $evento) {
        $atividades = ESPM_Requests::getAtividadesPorEvento($evento->id);
      }
    }


    include plugin_dir_path(__FILE__) . '../templates/eventodetalhe.php';
  }
}
