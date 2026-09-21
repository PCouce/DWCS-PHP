<?php
declare(strict_types = 1);
namespace Com\Daw2\Controllers;

class EjerciciosController extends \Com\Daw2\Core\BaseController {

    public function ejercicio1strings() : void
    {
        $data = array(
            'titulo' => 'Ejercicio Strings',
            'breadcrumb' => ['Inicio', 'Ejercicio Strings']
        );
        $s = 'pablo';
        $comillasDobles =  "{$s}_user"; //pablo_user
        $comillasSimples = $s . '_user'; //pablo_user

        $data['comillasSimples'] = $comillasSimples;
        $data['comillasDobles'] = $comillasDobles;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-strings.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio1operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 1 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 1 Operadores']
        );

        $x1 = 10;
        $cuadrado = $x1**2;
        $data['x1'] = $x1;
        $data['cuadrado'] = $cuadrado;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio2operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 2 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 2 Operadores']
        );

        $price = 10;
        $hours = 8;
        $cost = $price * $hours;

        $data['price'] = $price;
        $data['hours'] = $hours;
        $data['cost'] = $cost;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios2-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio3operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 3 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 3 Operadores']
        );

        $base = 10;
        $height = 5;

        $area = $base * $height;
        $perimeter = $base * 2 + $height * 2;

        $data['base'] = $base;
        $data['height'] = $height;
        $data['area'] = $area;
        $data['perimeter'] = $perimeter;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios3-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio4operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 4 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 4 Operadores']
        );

        $name = 'Juan';
        $age = 25;
        $note = 5;

        $data['name'] = $name;
        $data['age'] = $age;
        $data['note'] = $note;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios4-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio5operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 5 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 5 Operadores']
        );

        $pricenightdown = 20;
        $pricenighthigh = 45;
        $daysnightdown = 5;
        $daysnighthigh = 2;

        $total = $pricenightdown * $daysnightdown + $pricenighthigh * $daysnighthigh;

        $data['pricenightdown'] = $pricenightdown;
        $data['pricenighthigh'] = $pricenighthigh;
        $data['daysnightdown'] = $daysnightdown;
        $data['daysnighthigh'] = $daysnighthigh;
        $data['total'] = $total;


        $this->view->showViews(array('templates/header.view.php', 'ejercicios5-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio6operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 6 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 6 Operadores']
        );

        $radio = 10;

        $areacircle = pi() * $radio**2;
        $perimetercircle = 2 * pi() * $radio;

        $data['radio'] = $radio;
        $data['areacircle'] = $areacircle;
        $data['perimetercircle'] = $perimetercircle;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios6-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio7operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 7 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 7 Operadores']
        );

        $km = 50;
        $ms = $km / 3.6;

        $data['km'] = $km;
        $data['ms'] = $ms;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios7-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio8operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 8 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 8 Operadores']
        );

        $numero = 365;
        $centenas = intval($numero/100, 10);
        $decenas = intval(($numero%100)/10, 10);
        $unidades = intval($numero%10, 10);

        $data['numero'] = $numero;
        $data['centenas'] = $centenas;
        $data['decenas'] = $decenas;
        $data['unidades'] = $unidades;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios8-operadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio9operadores() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 9 Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio 9 Operadores']
        );

        $cadenaTexto = 'Hola Mundo!';

        $numeroCaracteres = strlen($cadenaTexto);
        $numeroPalabras = str_word_count($cadenaTexto);

        $data['cadenaTexto'] = $cadenaTexto;
        $data['numeroCaracteres'] = $numeroCaracteres;
        $data['numeroPalabras'] = $numeroPalabras;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios9-operadores.view.php', 'templates/footer.view.php'), $data);
    }
}
