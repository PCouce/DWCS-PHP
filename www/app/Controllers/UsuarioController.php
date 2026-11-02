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
        $auxUsuarioRolModel = new AuxRolUsuarioModel();
        $data['roles'] = $auxUsuarioRolModel->getAll();

        $this->view->showViews(array('templates/header.view.php', 'usuarios.view.php', 'templates/footer.view.php'), $data);
    }
}