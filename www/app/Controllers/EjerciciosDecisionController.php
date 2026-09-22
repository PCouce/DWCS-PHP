<?php
declare(strict_types=1);
namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class EjerciciosDecisionController extends BaseController
{
    public function ejercicio1Decision() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 1 Decision',
            'breadcrumb' => ['Inicio', 'Ejercicio 1 Decision']
        );



        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-decision.view.php', 'templates/footer.view.php'), $data);
    }
}