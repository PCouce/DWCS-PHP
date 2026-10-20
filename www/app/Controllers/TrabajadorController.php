<?php
declare(strict_types=1);
namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;
use Com\Daw2\Models\TrabajadorModel;

class TrabajadorController extends BaseController {

    public function testDB() : void
    {
       $model = new TrabajadorModel();
       $model-> getTrabajadores();
    }

    public function ejercicio1() : void{
        $data = array(
            'titulo' => 'Ejercicios consultas',
            'breadcrumb' => ['Inicio', 'Consultas'],
        );

        $model = new TrabajadorModel();
        $data['trabajadores'] = $model->getTrabajadores();

        $this->view->showViews(array('templates/header.view.php', 'consultas1.view.php', 'templates/footer.view.php'), $data);
    }
    public function ejercicio2() : void{
        $data = array(
            'titulo' => 'Ejercicios consultas',
            'breadcrumb' => ['Inicio', 'Consultas'],
        );

        $model = new TrabajadorModel();
        $data['trabajadores'] = $model->getTrabajadoresOrdenados();

        $this->view->showViews(array('templates/header.view.php', 'consultas1.view.php', 'templates/footer.view.php'), $data);
    }
    public function ejercicio3() : void{
        $data = array(
            'titulo' => 'Ejercicios consultas',
            'breadcrumb' => ['Inicio', 'Consultas'],
        );

        $model = new TrabajadorModel();
        $data['trabajadores'] = $model->getTrabajadoresStandard();

        $this->view->showViews(array('templates/header.view.php', 'consultas1.view.php', 'templates/footer.view.php'), $data);
    }
    public function ejercicio4() : void{
        $data = array(
            'titulo' => 'Ejercicios consultas',
            'breadcrumb' => ['Inicio', 'Consultas'],
        );

        $model = new TrabajadorModel();
        $data['trabajadores'] = $model->getTrabajadoresPorNombre();

        $this->view->showViews(array('templates/header.view.php', 'consultas1.view.php', 'templates/footer.view.php'), $data);
    }

    public function getTrabajadoresFiltros() : void{
        $data = array(
            'titulo' => 'Ejercicios consultas',
            'breadcrumb' => ['Inicio', 'Consultas'],
        );

        $model = new TrabajadorModel();
        $data['roles'] = $model->getRoles();
        $data['trabajadores'] = $model->getTrabajadoresFiltros($_GET);

        $this->view->showViews(array('templates/header.view.php', 'consultas1.view.php', 'templates/footer.view.php'), $data);
    }

}