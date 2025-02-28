<?php 

namespace Controllers;

use MVC\Router;

class PonentesController {

    public static function index(Router $router) {

        $router->render('admin/ponentes/index', [
            'titulo' => 'Exponentes / Conferencistas'
        ]);
    }
}