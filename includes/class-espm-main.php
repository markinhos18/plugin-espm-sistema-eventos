<?php

/**
 * Este arquivo contém a classe que inicializa o plugin
 */

if (!defined('ABSPATH')) exit;

class ESPM_Main
{
  private static $instance;

  private function __construct()
  {
    ESPM_Shortcodes::init();
    ESPM_Ajax::init();
  }

  /**
   * Inicializa o plugin.
   */
  public static function init()
  {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }
}
