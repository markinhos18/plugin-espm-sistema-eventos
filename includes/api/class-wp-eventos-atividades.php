<?php

class EventosAtividades_API
{


    private static $instance;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    private function __construct()
    {
        add_action('admin_footer_text', [$this, 'Evento']);
    }

    public static function Token()
    {
        $header = array(
            "Content-Type: application/json; charset=utf-8"
        );
        $ch     = curl_init('https://apieventos.espm.br/api/Users/login');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            '{
                "username": "certificados",
                "password": "9e6fEODjT9kQ"
            }'
        );

        $result = curl_exec($ch);

        $chaves = json_decode($result);

        curl_close($ch);

        return $chaves->token;

    }

    public static function Evento_Atividades_id($eventoAtividades){

        $token = EventosAtividades_API::Token();


        $url = "https://apieventos.espm.br/api/Atividade/GetAtividadesPorEvento?idsEventos=" . $eventoAtividades ;

        // $url = "https://apieventos.espm.br/api/Atividade/GetAtividadesPorEvento?idsEventos=CNnq56Cpf08";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


        $headers = array(
            "Authorization: Bearer " . $token . "",
        );

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);

        $result = json_decode($resp, true);

        curl_close($curl);
        return $result;
    }
}
