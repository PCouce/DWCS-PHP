<?php

declare(strict_types=1);

namespace Com\Daw2\Controllers;

class EjerciciosController extends \Com\Daw2\Core\BaseController
{
    public function ejercicio1strings(): void
    {
        $data = array(
            'titulo' => 'Ejercicio Strings',
            'breadcrumb' => ['Inicio', 'Ejercicio Strings'],
            //'variableNueva' => 'Tengo valor'
        );
        $s = 'Carmiña';
        $final = '_user';
        $comillasDobles = "{$s}_user";
        $comillasSimples = $s . '_user'; //rafa_user

        $data['comillasSimples'] = $comillasSimples;
        $data['comillasDobles'] = $comillasDobles;
        $data['s'] = $s;
        $data['final'] = $final;
        $this->addNumbers(1,2);
        $this->addNumbers(2,3, 4);
        $this->addNumbers(a:5, b:6, d: '8');


        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-strings.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio1operadores(): void
    {
        $data = array(
            'titulo' => 'Ejercicio Strings',
            'breadcrumb' => ['Inicio', 'Ejercicio 1 operadores'],
            //'variableNueva' => 'Tengo valor'
        );
        $x = 10;
        $cuadrado = $x**2;
        $data['x'] = $x;
        $data['cuadrado'] = $cuadrado;
        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio2operadores(): void
    {
        $data = array(
            'titulo' => 'Ejercicio Strings',
            'breadcrumb' => ['Inicio', 'Ejercicio 2 operadores'],
            //'variableNueva' => 'Tengo valor'
        );
        $precioHora = 23.3;
        $numHorasTrabajadas = 160;
        $salarioBruto = $precioHora * $numHorasTrabajadas;

        $data['salarioBruto'] = $salarioBruto;
        $data['horasTrabajadas'] = $numHorasTrabajadas;
        $data['precioHora'] = $precioHora;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios2-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio3operadores(): void
    {
        $data = array(
            'titulo' => 'Ejercicio Strings',
            'breadcrumb' => ['Inicio', 'Ejercicio 3 operadores'],
            //'variableNueva' => 'Tengo valor'
        );
        $base = 15;
        $altura = 10;
        $area = $base * $altura;
        $perimetro = 2 * $base + 2 * $altura;

        $data['perimetro'] = $perimetro;
        $data['base'] = $base;
        $data['altura'] = $altura;
        $data['area'] = $area;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios3-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio4operadores(): void
    {
        $data = array(
            'titulo' => 'Ejercicio Strings',
            'breadcrumb' => ['Inicio', 'Ejercicio 4 operadores'],
            //'variableNueva' => 'Tengo valor'
        );
        $nombre = 'Pepe';
        $edad = 32;
        $notaMedia = 8.3;

        $data['nombre'] = $nombre;
        $data['edad'] = $edad;
        $data['notaMedia'] = $notaMedia;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios4-operadores.view.php', 'templates/footer.view.php'), $data);
    }

}
