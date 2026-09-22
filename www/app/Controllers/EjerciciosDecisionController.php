<?php
declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class EjerciciosDecisionController extends BaseController
{
    public function ejercicio1Decision(): void
    {
        $data = array(
            'titulo' => 'Ejercicios Strings',
            'breadcrumb' => ['Inicio', 'Ejercicios Operadores'],
        );

        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-strings.view.php', 'templates/footer.view.php'), $data);
    }
}