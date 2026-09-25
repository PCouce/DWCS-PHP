<?php
declare(strict_types=1);
namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class EjerciciosDecisionController extends BaseController
{
    public function ejercicio1Decisiones() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 1 Decisiones',
            'breadcrumb' => ['Inicio', 'Ejercicio 1 Decisiones']
        );

        $x = 8;
        $y = 2;
        $resto = $x % $y;

        if($resto === 0) {
            $resultado = 'es divisible';
        } else {
            $resultado = 'no es divisible';
        }

        $data['x'] = $x;
        $data['y'] = $y;
        $data['resultado'] = $resultado;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios1-decisiones.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio2Decisiones() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 2 Decisiones',
            'breadcrumb' => ['Inicio', 'Ejercicio 2 Decisiones']
        );

        $x = 8;
        $y = 2;
        $z = 3;

        if($x > $y && $x > $z) {
            $resultado = $x;
        } else if ($y > $z){
            $resultado = $y;
        } else {
            $resultado = $z;
        }

        $data['x'] = $x;
        $data['y'] = $y;
        $data['z'] = $z;
        $data['resultado'] = $resultado;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios2-decisiones.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio3Decisiones() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 3 Decisiones',
            'breadcrumb' => ['Inicio', 'Ejercicio 3 Decisiones']
        );

        $segundosOriginal = 3600;

        $segundos = floor($segundosOriginal % 60);
        $minutos = floor($segundosOriginal / 60);
        $horas = floor($segundosOriginal / 3600);

        $data['segundosOriginal'] = $segundosOriginal;
        $data['segundos'] = $segundos;
        $data['minutos'] = $minutos;
        $data['horas'] = $horas;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios3-decisiones.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio4Decisiones() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 4 Decisiones',
            'breadcrumb' => ['Inicio', 'Ejercicio 4 Decisiones']
        );

        $año = 2004;

        $caso1 = $año % 400;
        $caso2 = $año % 4;
        $caso3 = $año % 100;

        if(($caso1 === 0) ||($caso2 === 0 && $caso3 !== 0)) {
            $resultado = 'es bisiesto';
        } else {
            $resultado = 'no es bisiesto';
        }

        $data['año'] = $año;
        $data['resultado'] = $resultado;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios4-decisiones.view.php', 'templates/footer.view.php'), $data);
    }

    /**
     * Devuelve cuanto dinero se descuenta a un sueldo bruto
     * @param float $sueldoBruto Sueldo bruto
     * @return float Descuento a aplicar
     */
    private function descuentoSueldoBruto(float $sueldoBruto) : float
    {
        $descuentoPor10pc = $sueldoBruto * 10 / 100;
        $descuentoPor5pcAdicional = ($sueldoBruto > 1000) ? ($sueldoBruto - 1000) * 5 / 100 : 0;
        $descuentoPor3pcAdicional = ($sueldoBruto > 2000) ? ($sueldoBruto - 2000) * 3 / 100 : 0;

        return $descuentoPor10pc + $descuentoPor5pcAdicional + $descuentoPor3pcAdicional;
    }
    public function ejercicio5Decisiones() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 5 Decisiones',
            'breadcrumb' => ['Inicio', 'Ejercicio 5 Decisiones']
        );

        $sueldoBruto = 2100;
        $descuento = $this->descuentoSueldoBruto($sueldoBruto);
        $neto = $sueldoBruto + $descuento;
        $data['sueldoBruto'] = $sueldoBruto;
        $data['descuento'] = $descuento;
        $data['neto'] = $neto;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios5-decisiones.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio6Decisiones() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 6 Decisiones',
            'breadcrumb' => ['Inicio', 'Ejercicio 6 Decisiones']
        );

        $nota = 8.74;

        $resultado = match (true) {
            $nota < 5 => ["Suspenso", "danger"],
            $nota >= 5 && $nota < 6 => ["Aprobado", "warning"],
            $nota >= 6 && $nota < 7 => ["Bien", "info"],
            $nota >= 7 && $nota < 8.75 => ["Notable", "info"],
            $nota >= 8.75 && $nota < 10 => ["Sobresaliente", "success"],
            $nota == 10 => ["Matrícula", "success"],
        };

        $data['nota'] = $nota;
        $data['resultado'] = $resultado;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios6-decisiones.view.php', 'templates/footer.view.php'), $data);
    }

    public function ejercicio7Decisiones() : void
    {
        $data = array(
            'titulo' => 'Ejercicio 7 Decisiones',
            'breadcrumb' => ['Inicio', 'Ejercicio 7 Decisiones']
        );

        $bebida = "Coca-Cola";

        $resultado = match (true) {
            $bebida == "Marcilla" || "Bonka" => "café",
            $bebida == "Coca-Cola" || "Kas" || "Pepsi" => "refresco",
            $bebida == "Mondariz" || "Cabreiroá" || "Sousas" => "agua",
        };

        $data['bebida'] = $bebida;
        $data['resultado'] = $resultado;

        $this->view->showViews(array('templates/header.view.php', 'ejercicios7-decisiones.view.php', 'templates/footer.view.php'), $data);
    }
}