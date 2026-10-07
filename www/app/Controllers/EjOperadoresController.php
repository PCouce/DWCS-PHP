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

    public function doOperadores1(): void
    {
        $data = array(
            'titulo' => 'Operadores 1',
            'breadcrumb' => ['Inicio', 'Operadores 1'],
        );

        $numero = $_POST['numero'];
        $check = $this->checkOperadores1($numero);

        if ($check === true) {

        } else {
            $data['error'] = $check;
            // $data['numeros'] = filter_var($numero, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->view->showViews(array('templates/header.view.php', 'operadores1.view.php', 'templates/footer.view.php'), $data);
        }

        $this->view->showViews(array('templates/header.view.php', 'operadores1.view.php', 'templates/footer.view.php'), $data);
    }

    private function checkOperadores1($numero): string | true
    {
        if ($numero === '') {
            return 'Debe ingresar numeros';
        }
        if (preg_match('/\d+/', $numero) === 0) {
            return 'Solo se permiten números';
        }

        return true;
    }
}