<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Gerar_Shortcode_Eventos{
    private static $instance;


    public static function getInstance() {
        if (self::$instance == NULL) {
        self::$instance = new self();
        }

        return self::$instance;
    }


    private function __construct() {
        add_shortcode('eventos',  __CLASS__ .'::Mostra_Eventos');

    }


    /**
     * Mostra_Eventos
     * Listagem dos Eventos
     * 
     * @return void
    */




    public static function Mostra_Eventos($atts){
        extract(shortcode_atts(array(), $atts));

        $evento = Eventos_API::Evento();

    

        for ($i=0; $i < count($evento["data"]) ; $i++) { 

            $eventoAtividades = EventosAtividades_API::Evento_Atividades_id($evento["data"][$i]["id"]);

        }


        $eventoBannerTopo = EventosGetBanner_API::Evento();
        $eventoPublicos = EventosPublicos_API::Evento();
        $eventoCampus = EventosCampus_API::Evento_Campus();
            
        

        // chama o layout do sistema eventos
        include 'template_evento.php';
        

    }

    // $mostrar_evento = Mostra_Eventos();

    

}

Gerar_Shortcode_Eventos::getInstance();






