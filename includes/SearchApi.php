<?php

//autor: Márcio Roberto Cardoso
class SearchApi
{

    private static $baseUrl = 'https://apieventos.espm.br/api/Evento';


    public function __construct()    {
        
    }

    //buscar baseado no tipo de pesuisa generica bastanto passar a query e o valor 
    public static function SearchGeneric($query, $value)
    {

        $token = Eventos_API::Token();

        if (!empty($query) and !empty($value)) {
            if (is_array($value)) {
                foreach ($value as $v) {
                    if (!empty($v)) {

                        foreach ($v as $t) {
                            
                           $url = self::$baseUrl . '?' . $query . "=" . $t;
                        }
                    }
                }
            } else {
                $url = self::$baseUrl . '?' . $query . "=" . $value;
            }
        }

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

        // $final = json_decode($resp);

        return $result;

        curl_close($curl);
    }
}
