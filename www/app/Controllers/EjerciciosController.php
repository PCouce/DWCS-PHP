<?php

declare(strict_types=1);

namespace Com\Daw2\Controllers;

class EjerciciosController extends \Com\Daw2\Core\BaseController
{
    public function ejercicio1strings(): void
    {
        $data = array(
            'titulo' => 'Ejercicios Strings',
            'breadcrumb' => ['Inicio', 'Ejercicios Operadores'],
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
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 1 operadores'],
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
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 2 operadores'],
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
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 3 operadores'],
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
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 4 operadores'],
        );
        $nombre = 'Pepe';
        $edad = 32;
        $notaMedia = 8.3;

        $data['nombre'] = $nombre;
        $data['edad'] = $edad;
        $data['notaMedia'] = $notaMedia;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios4-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio5operadores()
    {
        $data = array(
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 5 operadores'],
        );
        $precioNocheBaja = 70;
        $precioNocheAlta = 100;
        $nochesBaja = 3;
        $nochesAlta = 2;
        $total = $precioNocheBaja * $nochesBaja + $precioNocheAlta * $nochesAlta;
        $data['total'] = $total;
        $data['nochesBaja'] = $nochesBaja;
        $data['precioNocheBaja'] = $precioNocheBaja;
        $data['precioNocheAlta'] = $precioNocheAlta;
        $data['nochesAlta'] = $nochesAlta;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios5-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio6operadores()
    {
        $data = array(
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 6 operadores'],
        );

        $radio = 7;
        $area = pi() * $radio**2;
        $perimetro = 2 * pi() * $radio;

        $data['perimetro'] = $perimetro;
        $data['area'] = $area;
        $data['radio'] = $radio;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios6-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio7operadores()
    {
        $data = array(
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 7 operadores'],
        );

        $kmh = 120;
        $ms = $kmh / 3.6;

        $data['kmh'] = $kmh;
        $data['ms'] = $ms;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios7-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio8operadores()
    {
        $data = array(
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 8 operadores'],
        );

        $numeroOriginal = 9818181887;

        $numero = (string)($numeroOriginal % 1000);
        $centenas = $numero[0];
        $decenas = $numero[1];
        $unidades = $numero[2];

        $data['centenas'] = $centenas;
        $data['decenas'] = $decenas;
        $data['unidades'] = $unidades;
        $data['numero'] = $numeroOriginal;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios8-operadores.view.php', 'templates/footer.view.php'), $data);
    }
    public function ejercicio9operadores()
    {
        $data = array(
            'titulo' => 'Ejercicios Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 9 operadores'],
        );

        $stringOriginal = "Un trabajo liderado por la Universidad Complutense de Madrid muestra que los modelos celulares 3D derivados de tejido histológicamente libre de tumor son capaces de manifestar capacidades de crecimiento, autorrenovación y migración que no son visibles mediante el análisis convencional del tejido. Los autores afirman que esta técnica podría ser un complemento diagnóstico.";

        $numCaracteres = mb_strlen($stringOriginal);
        $numPalabras = str_word_count($stringOriginal);

        $data['stringOriginal'] = $stringOriginal;
        $data['numPalabras'] = $numPalabras;
        $data['numCaracteres'] = $numCaracteres;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios9-operadores.view.php', 'templates/footer.view.php'), $data);
    }

}
