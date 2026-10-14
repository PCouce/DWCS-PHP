<?php
declare(strict_types=1);
namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;
use Com\Daw2\Models\TrabajadorModel;

class TrabajadorController extends BaseController {

    public function trabajadorDB() : void
    {
        $data = array(
            'titulo' => 'Trabajador DB',
            'breadcrumb' => ['Inicio', 'Trabajador DB']
        );

        $database = new TrabajadorModel();

        $this->view->showViews(array('templates/header.view.php', 'trabajador-db.view.php', 'templates/footer.view.php'), $data);
    }

}