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
            'titulo' => 'Ejercicio Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio Operadores']
        );

        $number1 = 1;
        $number2 = 2;

        $result = $number1 ** $number2;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-operadores.view.php', 'templates/footer.view.php'), $data);
    }

}
