<?php
declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;
use Com\Daw2\Models\AuxCountriesModel;
use Com\Daw2\Models\AuxRolTrabajadorModel;
use Com\Daw2\Models\TrabajadorModel;

class TrabajadorController extends BaseController
{
    public function testDb()
    {
        $model = new TrabajadorModel();
        $model->getTrabajadores();
    }

    public function getAllTrabajadores(): void
    {
        $data = array(
            'titulo' => 'Todos los trabajadores',
            'breadcrumb' => ['Inicio', 'Consultas simples'],
        );
        $model = new TrabajadorModel();
        $data['trabajadores'] = $model->getAllTrabajadores();
        $this->view->showViews(array('templates/header.view.php', 'trabajadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function getAllTrabajadoresOrdenadosSalario(): void
    {
        $data = array(
            'titulo' => 'Todos los trabajadores ordenados',
            'breadcrumb' => ['Inicio', 'Consultas simples'],
        );
        $model = new TrabajadorModel();
        $data['trabajadores'] = $model->getAllTrabajadoresOrdenados();
        $this->view->showViews(array('templates/header.view.php', 'trabajadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function getTrabajadores(): void
    {
        $data = array(
            'titulo' => 'Listado trabajadores',
            'breadcrumb' => ['Inicio', 'Trabajadores'],
        );

        $model = new TrabajadorModel();
        $data['trabajadores'] = $model->getFilterBy($_GET);
        $data['order'] = $model->getOrderIndex($_GET);
        $data['currentPage'] = $model->getCurrentPage($_GET);
        $data['maxPage'] = $model->getLastPage($_GET);
        $auxTrabajadorRolModel = new AuxRolTrabajadorModel();
        $data['roles'] = $auxTrabajadorRolModel->getAll();
        $countriesModel = new AuxCountriesModel();
        $data['countries'] = $countriesModel->getAll();
        $input = filter_var_array($_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $data['input'] = $input;
        //No modificamos la superglobal, la copiamos en $getOrder
        $getOrder = $_GET;
        $data['baseUrl'] = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
        unset($getOrder['order']);
        unset($getOrder['sentido']);
        unset($getOrder['page']);
        $data['queryParams'] = http_build_query($getOrder);

        $getPage = $_GET;
        unset($getPage['page']);
        $data['queryParamsPage'] = http_build_query($getPage);
        $this->view->showViews(array('templates/header.view.php', 'trabajadores.view.php', 'templates/footer.view.php'), $data);
    }

    public function newTrabajador(): void
    {
        $data = array(
            'titulo' => 'Nuevo trabajador',
            'breadcrumb' => ['Inicio', 'Trabajadores'],
        );

        $countriesModel = new AuxCountriesModel();
        $data['countries'] = $countriesModel->getAll();
        $auxTrabajadorRolModel = new AuxRolTrabajadorModel();
        $data['roles'] = $auxTrabajadorRolModel->getAll();

        $this->view->showViews(array('templates/header.view.php', 'nuevo-trabajador.view.php', 'templates/footer.view.php'), $data);
    }

    public function postNewTrabajador(): void
    {
        $errors = [];
        $input = filter_var_array($_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (empty($input['nombre']) || mb_strlen($input['nombre']) < 4 || mb_strlen($input['nombre']) > 50) {
            $errors['nombre'] = 'El nombre debe tener entre 4 y 50 caracteres.';
        }
        if (empty($input['email']) || !filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'El formato del email no es válido.';
        }
        if (empty($input['id_rol'])) {
            $errors['id_rol'] = 'Debe seleccionar un rol válido.';
        }
        if (empty($input['id_country'])) {
            $errors['id_country'] = 'Debe seleccionar un país válido.';
        }

        if (empty($errors)) {
            $model = new TrabajadorModel();
            try {
                $model->insertTrabajador($_POST);
                header('Location: /trabajadores');
                exit;
            } catch (\PDOException $e) {
                $errors['db'] = 'Error al guardar en la base de datos: ' . $e->getMessage();
            }
        }

        $data = array(
            'titulo' => 'Nuevo trabajador',
            'breadcrumb' => ['Inicio', 'Trabajadores'],
        );

        $data['input'] = $input;
        $data['errors'] = $errors;
        $countriesModel = new AuxCountriesModel();
        $data['countries'] = $countriesModel->getAll();
        $auxTrabajadorRolModel = new AuxRolTrabajadorModel();
        $data['roles'] = $auxTrabajadorRolModel->getAll();

        $this->view->showViews(array('templates/header.view.php', 'nuevo-trabajador.view.php', 'templates/footer.view.php'), $data);
    }
}