<?php
declare(strict_types=1);
namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class EjOperadoresController extends BaseController
{
    public function operadores1(): void
    {
        $data = array(
            'titulo' => 'Operadores 1',
            'breadcrumb' => ['Inicio', 'Operadores 1'],
        );

        $this->view->showViews(array('templates/header.view.php', 'operadores1.view.php', 'templates/footer.view.php'), $data);
    }
}