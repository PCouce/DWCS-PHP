<?php
declare(strict_types=1);
namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class EjOperadoresController extends BaseController
{
    public function ejercicio1operadores(): void
    {
        $data = array(
            'titulo' => 'Ejercicio Operadores',
            'breadcrumb' => ['Inicio', 'Ejercicio Operadores'],
        );

        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-operadores.view.php', 'templates/footer.view.php'), $data);
    }
}