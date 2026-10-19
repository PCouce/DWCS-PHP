<?php

namespace Com\Daw2\Core;

use Com\Daw2\Controllers\CategoriaController;
use Com\Daw2\Controllers\EjerciciosController;
use Com\Daw2\Controllers\PreferenciasController;
use Com\Daw2\Controllers\UsuarioSistemaController;
use Steampixel\Route;

class FrontController
{
    public static function main()
    {
        Route::add(
            '/',
            function () {
                $controlador = new \Com\Daw2\Controllers\InicioController();
                $controlador->index();
            },
            'get'
        );
        Route::add(
            '/ejercicio1-strings',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio1Strings();

            },
            'get'
        );
        Route::add(
            '/ejercicio1-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio1operadores();

            },
            'get'
        );
        Route::add(
            '/ejercicio2-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio2operadores();

            },
            'get'
        );

        Route::add(
            '/ejercicio3-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio3operadores();

            },
            'get'
        );

        Route::add(
            '/ejercicio4-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio4operadores();

            },
            'get'
        );

        Route::add(
            '/ejercicio5-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio5operadores();

            },
            'get'
        );
        Route::add(
            '/ejercicio6-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio6operadores();

            },
            'get'
        );
        Route::add(
            '/ejercicio7-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio7operadores();

            },
            'get'
        );

        Route::add(
            '/ejercicio8-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio8operadores();

            },
            'get'
        );

        Route::add(
            '/ejercicio9-operadores',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosController();
                $controlador->ejercicio9operadores();

            },
            'get'
        );

        Route::add(
            '/ejercicio5-decision',
            function () {
                $controlador = new \Com\Daw2\Controllers\EjerciciosDecisionController();
                $controlador->ejercicio5Decision();

            },
            'get'
        );

        Route::add(
            '/iterativas1',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->ejercicio1();

            },
            'get'
        );

        Route::add(
            '/iterativas1',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->doEjercicio1();
            },
            'post'
        );
        Route::add(
            '/iterativas2',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->ejercicio2();

            },
            'get'
        );

        Route::add(
            '/iterativas2',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->doEjercicio2();
            },
            'post'
        );
        Route::add(
            '/iterativas8',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->ejercicio8();

            },
            'get'
        );

        Route::add(
            '/iterativas8',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->doEjercicio8();
            },
            'post'
        );

        Route::add(
            '/iterativas2',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->ejercicio2();

            },
            'get'
        );

        Route::add(
            '/iterativas2',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->doEjercicio2();
            },
            'post'
        );

        Route::add(
            '/iterativas3',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->ejercicio3();

            },
            'get'
        );

        Route::add(
            '/iterativas3' ,
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->doEjercicio3();
            },
            'post'
        );

        Route::add(
            '/iterativas4',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->ejercicio4();

            },
            'get'
        );

        Route::add(
            '/iterativas4' ,
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->doEjercicio4();
            },
            'post'
        );
        Route::add(
            '/iterativas8',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->ejercicio8();

            },
            'get'
        );

        Route::add(
            '/iterativas8',
            function () {
                $controlador = new \Com\Daw2\Controllers\IterativasController();
                $controlador->doEjercicio8();
            },
            'post'
        );

        Route::add(
            '/test-conection',
            function () {
                $controlador = new \Com\Daw2\Controllers\TrabajadorController();
                $controlador->testDB();

            },
            'get'
        );

        Route::add(
            '/consultas1_1',
            function () {
                $controlador = new \Com\Daw2\Controllers\TrabajadorController();
                $controlador->ejercicio1();

            },
            'get'
        );
        Route::add(
            '/consultas1_2',
            function () {
                $controlador = new \Com\Daw2\Controllers\TrabajadorController();
                $controlador->ejercicio2();

            },
            'get'
        );
        Route::add(
            '/consultas1_3',
            function () {
                $controlador = new \Com\Daw2\Controllers\TrabajadorController();
                $controlador->ejercicio3();

            },
            'get'
        );
        Route::add(
            '/consultas1_4',
            function () {
                $controlador = new \Com\Daw2\Controllers\TrabajadorController();
                $controlador->ejercicio4();

            },
            'get'
        );

        Route::add(
            '/demo-proveedores',
            function () {
                $controlador = new \Com\Daw2\Controllers\InicioController();
                $controlador->demo();
            },
            'get'
        );
        Route::pathNotFound(
            function () {
                $controller = new \Com\Daw2\Controllers\ErroresController();
                $controller->error404();
            }
        );
        Route::methodNotAllowed(
            function () {
                $controller = new \Com\Daw2\Controllers\ErroresController();
                $controller->error405();
            }
        );
        Route::run();
    }
}
