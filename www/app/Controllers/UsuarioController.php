<?php
declare(strict_types=1);
namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;
use Com\Daw2\Models\AuxRolTrabajadorModel;
use Com\Daw2\Models\AuxRolUsuarioModel;
use Com\Daw2\Models\UsuarioModel;

class UsuarioController extends BaseController {

    public function getUsuarios(): void
    {
        $data = array(
            'titulo' => 'Listado usuarios',
            'breadcrumb' => ['Inicio', 'Usuarios'],
        );

        $model = new UsuarioModel();
        $data['usuarios'] = $model->getFilterBy($_GET);
        $data['order'] = $model->getOrderIndex($_GET);
        $data['currentPage'] = $model->getCurrentPage($_GET);
        $data['maxPage'] = $model->getLastPage($_GET);
        $auxUsuarioRolModel = new AuxRolUsuarioModel();
        $data['roles'] = $auxUsuarioRolModel->getAll();
        $input = filter_var_array($_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $data['input'] = $input;

        $getOrder = $_GET;
        $data['baseUrl'] = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
        unset($getOrder['order']);
        unset($getOrder['sentido']);
        unset($getOrder['page']);
        $data['queryParams'] = http_build_query($getOrder);

        $getPage = $_GET;
        unset($getPage['page']);
        $data['queryParamsPage'] = http_build_query($getPage);
        $this->view->showViews(array('templates/header.view.php', 'usuarios.view.php', 'templates/footer.view.php'), $data);
    }
}