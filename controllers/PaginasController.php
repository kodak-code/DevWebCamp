<?php

namespace Controllers;

use Model\Dia;
use Model\Hora;
use MVC\Router;
use Model\Evento;
use Model\Ponente;
use Model\Categoria;

class PaginasController
{

    public static function index(Router $router)
    {


        $router->render('paginas/index', [
            'titulo' => 'Inicio'
        ]);
    }
    public static function evento(Router $router)
    {


        $router->render('paginas/devwebcamp', [
            'titulo' => 'Sobre DevWebCamp'
        ]);
    }
    public static function paquetes(Router $router)
    {


        $router->render('paginas/paquetes', [
            'titulo' => 'Paquetes DevWebCamp'
        ]);
    }
    public static function conferencias(Router $router)
    {
        $eventos = Evento::ordenar('hora_id', 'ASC');
        
        // formatear los eventos para mostrarlos segun dia y categoria
        $eventos_formateados = [];
        foreach($eventos as $evento) {
            // asignar al obj
            $evento->categoria = Categoria::find($evento->categoria_id);
            $evento->dia = Dia::find($evento->dia_id);
            $evento->hora = Hora::find($evento->hora_id);
            $evento->ponente = Ponente::find($evento->ponente_id);

            // Viernes y es Conferencia
            if($evento->dia_id === "1" && $evento->categoria_id === "1") {
                $eventos_formateados['conferencias_v'][] = $evento;
            }
            // Sabado y es Conferencia
            if($evento->dia_id === "2" && $evento->categoria_id === "1") {
                $eventos_formateados['conferencias_s'][] = $evento;
            }
            // Viernes y es Workshop
            if($evento->dia_id === "1" && $evento->categoria_id === "2") {
                $eventos_formateados['workshops_v'][] = $evento;
            }
            // Sabado y es Workshop
            if($evento->dia_id === "2" && $evento->categoria_id === "2") {
                $eventos_formateados['workshops_s'][] = $evento;
            }
            
        }

        $router->render('paginas/conferencias', [
            'titulo' => 'Conferencias & Workshops',
            'eventos' => $eventos_formateados
        ]);
    }
}
