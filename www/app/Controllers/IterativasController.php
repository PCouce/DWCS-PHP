<?php
declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class IterativasController extends BaseController
{
    public function doEjercicio1(): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );

        $numeros = $_POST['numero'];
        $check = $this->checkEjercicio1($numeros);
        if ($check === true) {
            $arrayNumeros = explode(',', $numeros);
            $data['mayor'] = max($arrayNumeros);
            $data['menor'] = min($arrayNumeros);
        } else {
            echo 'Sin implementar'; die;
        }

        $this->view->showViews(array('templates/header.view.php', 'iterativas1.view.php', 'templates/footer.view.php'), $data);
    }

    private function checkEjercicio1(string $numeros): string|true
    {
        if($numeros === '') {
               return 'Debe ingresar numeros';
        }
        $arrayNumeros = explode(',', $numeros);

        foreach ($arrayNumeros as $numero) {
            if(is_numeric($numero)) {
                return 'Debe ingresar numeros separados por comas';
            }
        }
        return true;
    }
}