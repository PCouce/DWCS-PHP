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
            'breadcrumb' => ['Inicio', 'Ejercicio Strings'],
            //'variableNueva' => 'Tengo valor'
        );
        $x = 10;
        $cuadrado = $x**2;
        $data['x'] = $x;
        $data['cuadrado'] = $cuadrado;
        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-operadores.view.php', 'templates/footer.view.php'), $data);
    }

}
