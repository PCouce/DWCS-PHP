<?php

declare(strict_types=1);

namespace Com\Daw2\Controllers;

use Com\Daw2\Core\BaseController;

class IterativasController extends BaseController
{
    public function ejercicio1(): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );

        $this->view->showViews(array('templates/header.view.php', 'iterativas1.view.php', 'templates/footer.view.php'), $data);
    }

    public function doEjercicio1(): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );
        $numeros = $_POST['numeros'];
        $check = $this->checkEjercicio1($numeros);
        if ($check === true) {
            $arrayNumero = explode(',', $numeros);
            $data['mayor'] = max($arrayNumero);
            $data['menor'] = min($arrayNumero);
            $this->view->showViews(array('templates/header.view.php', 'iterativas1.view.php', 'templates/footer.view.php'), $data);
        } else {
            $data['error'] = $check;
            $data['numeros'] = filter_var($numeros, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->view->showViews(array('templates/header.view.php', 'iterativas1.view.php', 'templates/footer.view.php'), $data);
        }
    }

    private function checkEjercicio1(string $numeros): string | true
    {
        if ($numeros === '') {
            return 'Debe ingresar numeros';
        }
        $arrayNumero = explode(',', $numeros);

        foreach ($arrayNumero as $numero) {
            if (!is_numeric($numero)) {
                return 'Debe ingresar numeros separados por comas';
            }
        }
        return true;
    }

    public function ejercicio2(): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );

        $this->view->showViews(array('templates/header.view.php', 'iterativas2.view.php', 'templates/footer.view.php'), $data);
    }

    public function doEjercicio2(): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );
        $numeros = $_POST['numeros'];
        $check = $this->checkEjercicio2($numeros);
        if ($check === true) {
            $arrayNumero = explode(',', $numeros);
            sort($arrayNumero);
            $data['arrayNumeros'] = $arrayNumero;
            $this->view->showViews(array('templates/header.view.php', 'iterativas2.view.php', 'templates/footer.view.php'), $data);
        } else {
            $data['error'] = $check;
            $data['numeros'] = filter_var($numeros, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->view->showViews(array('templates/header.view.php', 'iterativas2.view.php', 'templates/footer.view.php'), $data);
        }
    }

    private function checkEjercicio2(string $numeros): string | true
    {
        if ($numeros === '') {
            return 'Debe ingresar numeros';
        }
        $arrayNumero = explode(',', $numeros);

        foreach ($arrayNumero as $numero) {
            if (!is_numeric($numero)) {
                return 'Debe ingresar numeros separados por comas';
            }
        }
        return true;
    }

    public function ejercicio3(): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );

        $this->view->showViews(array('templates/header.view.php', 'iterativas3.view.php', 'templates/footer.view.php'), $data);
    }

    public function doEjercicio3(): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );
        $numeros = $_POST['numeros'];
        $check = $this->checkEjercicio3($numeros);
        if ($check === true) {
            $conjuntoNumero = explode('|', $numeros);
            foreach ($conjuntoNumero as &$numero) {
                $numero = implode(',', $numero);
            }
            sort($arrayNumero);
            $data['numeros'] = $arrayNumero;
            $this->view->showViews(array('templates/header.view.php', 'iterativas3.view.php', 'templates/footer.view.php'), $data);
        } else {
            $data['error'] = $check;
            $data['numeros'] = filter_var($numeros, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->view->showViews(array('templates/header.view.php', 'iterativas3.view.php', 'templates/footer.view.php'), $data);
        }
    }

        private function checkEjercicio3(string $numeros): string | true
    {
        if ($numeros === '') {
            return 'Debe ingresar numeros';
        }
        $conjuntoNumero = explode('|', $numeros);
        foreach ($conjuntoNumero as &$numero) {
            $numero = explode(',', $numero);
            $totalNumeros[] = count($numero);
        }
        foreach ($totalNumeros as $numero) {
            if (max($totalNumeros) !== $numero) {
                return 'Debe ingresar la misma cantidad de numeros por fila';
            }
        }

        //foreach ($arrayNumero as $numero) {
        //    if (!is_numeric($numero)) {
        //        return 'Debe ingresar numeros separados por comas';
        //    }
        //}
        return true;
    }

    public function ejercicio4(array $errores = [], array $resultado = []): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );

        $data['errores'] = $errores;
        $data['resultado'] = $resultado;

        $this->view->showViews(array('templates/header.view.php', 'iterativas4.view.php', 'templates/footer.view.php'), $data);
    }

    public function doEjercicio4(): void
    {
        $texto = $_POST['texto'];

        $errores = [];
        if ($texto === '') {
            $errores['texto'] = 'Debe ingresar un texto';
        }
        $texto = strtolower($texto);
        $texto = preg_replace('/\P{L}/', '', $texto);
        preg_match_all('/\p{L}/', $texto, $coincidencias);

        $resultado = [];
        foreach ($coincidencias[0] as $coincidencia) {
            if (!isset($resultado[$coincidencia])) {
                $resultado[$coincidencia] = substr_count($texto, $coincidencia);
            }
        }
        arsort($resultado);
        $this->ejercicio4($errores, $resultado);
    }

    public function ejercicio5(array $errores = [], array $resultado = []): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'Ordenar'],
        );

        $data['errores'] = $errores;
        $data['resultado'] = $resultado;

        $this->view->showViews(array('templates/header.view.php', 'iterativas4.view.php', 'templates/footer.view.php'), $data);
    }

    public function doEjercicio5(): void
    {
        $texto = $_POST['texto'];

        $errores = [];
        if ($texto === '') {
            $errores['texto'] = 'Debe ingresar un texto';
        }
        $texto = strtolower($texto);
        $texto = preg_replace('/\P{L}/', '', $texto);
        preg_match_all('/\p{L}/', $texto, $coincidencias);

        $resultado = [];
        foreach ($coincidencias[0] as $coincidencia) {
            if (!isset($resultado[$coincidencia])) {
                $resultado[$coincidencia] = substr_count($texto, $coincidencia);
            }
        }
        arsort($resultado);
        $this->ejercicio5($errores, $resultado);
    }
}
