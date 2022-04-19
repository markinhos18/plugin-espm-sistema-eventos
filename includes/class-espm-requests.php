<?php

/**
 * Este arquivo contém todas as chamadas a API de eventos
 */

if (!defined('ABSPATH')) exit;

class ESPM_Requests
{
  /**
   * Listar todos os eventos da API
   */
  public static function getEventos($filtros = [])
  {
    $url = sprintf(
      "%sevento?publicosIds=%s&campusIds=%s&modelo=%s&investimento=%s&data=%s",
      ESPM_Config::API_EVENTOS_URL,
      $filtros['publicosIds'],
      join(",", $filtros['campusIds']),
      $filtros['modelo'],
      $filtros['investimento'],
      $filtros['data'],
    );
    $token = self::getEventoToken();

    return self::onGet($url, $token);
  }

  /**
   * Listar todas as atividades por evento
   */
  public static function getAtividadesPorEvento($idsEventos)
  {
    $url = ESPM_Config::API_EVENTOS_URL . 'Atividade/GetAtividadesPorEvento?idsEventos=' . $idsEventos;
    $token = self::getEventoToken();

    return self::onGet($url, $token);
  }

  /**
   * Recupera o banner de destaque do evento
   */
  public static function getBannersDestaque()
  {
    $url = ESPM_Config::API_EVENTOS_URL . 'evento/getBannersDestaque';
    $token = self::getEventoToken();

    return self::onGet($url, $token);
  }

  /**
   * Lista todos os Campus da API
   */
  public static function getCampus()
  {
    $url = ESPM_Config::API_MICROSERVICES_URL . 'institution/campis';
    $token = self::getMicroservicesToken();

    return self::onGet($url, $token);
  }

  /**
   * Lista os eventos públicos por vitrine
   */
  public static function getPublicoPorVitrine()
  {
    $url = sprintf(
      "%spublicos/getPublicosPorVitrine?id=%s",
      ESPM_Config::API_EVENTOS_URL,
      ESPM_Config::PUBLICO_VITRINE_ID
    );
    $token = self::getEventoToken();

    return self::onGet($url, $token);
  }

  /**
   * Recupera um público por id
   */
  public static function getPublicoPorId($publicoId)
  {
    $url = sprintf(
      "%spublicos/%s",
      ESPM_Config::API_EVENTOS_URL,
      $publicoId
    );
    $token = self::getEventoToken();

    return self::onGet($url, $token);
  }

  /**
   * Consegue um token da API de eventos
   */
  private static function getEventoToken()
  {
    $url = ESPM_Config::API_EVENTOS_URL . 'users/login';

    $args = [
      'username' => ESPM_Config::API_EVENTOS_USER,
      'password' => ESPM_Config::API_EVENTOS_PASS,
    ];

    return self::getToken($url, $args);
  }

  /**
   * Consegue um token da API de microserviços
   */
  private static function getMicroservicesToken()
  {
    $url = ESPM_Config::API_MICROSERVICES_URL . 'users/login';

    $args = [
      'username' => ESPM_Config::API_MICROSERVICES_USER,
      'password' => ESPM_Config::API_MICROSERVICES_PASS,
    ];

    return self::getToken($url, $args);
  }

  /**
   * Recupera um token da API
   */
  private static function getToken(string $url, array $args = [])
  {
    $args = [
      'httpversion' => '1.1',
      'headers' => [
        'Content-Type' => 'application/json',
      ],
      'body' => json_encode($args)
    ];

    $response = wp_remote_post($url, $args);
    $json = json_decode($response['body']);

    return $json->token;
  }

  /**
   * Realiza uma requisição GET na API
   */
  private static function onGet(string $url, string $token, array $args = [])
  {
    $args = [
      'httpversion' => '1.1',
      'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . $token,
      ],
    ];

    $response = wp_remote_get($url, $args);

    if ($response instanceof WP_Error) {
      return [
        'error' => true,
        'stack' => print_r($response, true)
      ];
    }

    $json = json_decode($response['body']);

    return $json;
  }
}
