<?php

/**
 * Este arquivo contém as configurações gerais do plugin.
 */

if (!defined('ABSPATH')) exit;

class ESPM_Config
{
  /**
   * Endereço da API de eventos
   */
  public const API_EVENTOS_URL = 'https://apieventos.espm.br/api/';

  /**
   * Nome de usuário para fazer o login na API de eventos
   */
  public const API_EVENTOS_USER = 'certificados';

  /**
   * Senha para fazer o login na API de eventos
   */
  public const API_EVENTOS_PASS = '9e6fEODjT9kQ';

  /**
   * Endereço da API de microserviços
   */
  public const API_MICROSERVICES_URL = 'https://microservices.espm.br/api/';

  /**
   * Nome de usuário para fazer o login na API de microserviços
   */
  public const API_MICROSERVICES_USER = 'lifeapp2';

  /**
   * Senha para fazer o login na API de microserviços
   */
  public const API_MICROSERVICES_PASS = 'YchMKaHow28i';

  /**
   * Id da vitrine padrão para listagem de público
   */
  public const PUBLICO_VITRINE_ID = 'xQVvLZ69rKg';
}
