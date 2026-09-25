<?php
declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class EjerciciosDecisionController extends BaseController
{
    public function ejercicio5Decision(): void
    {
        $data = array(
            'titulo' => 'Ejercicios Strings',
            'breadcrumb' => ['Inicio', 'Ejercicios 5 Decisión'],
        );

        $sueldoBruto = 2100;
        $descuento = $this->descuentoSueldoBruto($sueldoBruto);
        $neto = $sueldoBruto - $descuento;
        $data['neto'] = $neto;
        $data['sueldoBruto'] = $sueldoBruto;
        $data['descuento'] = $descuento;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios5-decision.view.php', 'templates/footer.view.php'), $data);
    }

    /**
     * Devuelve cuanto dinero se descuenta a un sueldo bruto
     * @param float $sueldoBruto Sueldo bruto
     * @return float Descuento a aplicar
     */
    private function descuentoSueldoBruto(float $sueldoBruto): float
    {
        $descuentoPor10pc = $sueldoBruto * 10 / 100;

        $descuentoPor5pcAdicional = ($sueldoBruto > 1000) ? ($sueldoBruto - 1000) * 5 / 100 : 0;
        $descuentoPor3pcAdicional = ($sueldoBruto > 2000) ? ($sueldoBruto - 2000) * 3 / 100 : 0;

        return $descuentoPor10pc + $descuentoPor5pcAdicional + $descuentoPor3pcAdicional;
    }
}