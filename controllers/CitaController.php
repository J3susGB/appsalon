<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {
        session_start();

        isAuth(); //Revisará si el usuario ha iniciado sesión, sino, lo redirecciona a inicio de sesión

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}