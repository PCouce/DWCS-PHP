<?php
declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class PreferenciasController extends BaseController
{

    public function showPreferencias(): void
    {
        $data = array(
            'titulo' => 'Preferencias',
            'breadcrumb' => ['Inicio', 'Preferencias'],
        );
        $this->view->showViews(array('templates/header.view.php', 'preferencias.view.php', 'templates/footer.view.php'), $data);
    }

    public function savePreferencias(): void
    {
        $darkmode = !empty($_POST['tema']) && $_POST['tema'] == 'dark';
        setcookie('dark_mode', (string)$darkmode, time() + 2592000);
        $_COOKIE['dark_mode'] = $darkmode;
        $this->showPreferencias();
    }
}