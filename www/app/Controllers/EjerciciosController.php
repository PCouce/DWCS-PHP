<?php
declare(strict_types = 1);
namespace Com\Daw2\Controllers;

class EjerciciosController extends \Com\Daw2\Core\BaseController {

    public function ejercicio1strings() : void {
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

}
