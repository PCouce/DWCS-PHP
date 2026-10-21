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

    public function ejercicio8(string $json = '', array $errores = [], array $resultado = []): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas',
            'breadcrumb' => ['Inicio', 'CÃ¡lculo de notas'],
        );
        $data['errores'] = $errores;
        $data['json'] = $json;
        $data['resultado'] = $resultado['resultado'];
        $data['alumnos'] = $resultado['alumnos'];
        $this->view->showViews(array('templates/header.view.php', 'iterativas8.view.php', 'templates/footer.view.php'), $data);
    }

    public function doEjercicio8(): void
    {
        $json = $_POST['json'] ?? '';
        $errores = $this->checkEjercicio8($json);
        if ($errores === []) {
            $resultado['resultado'] = $this->procesarEjercicio8(json_decode($json, true));
            $this->ejercicio8(filter_var($json, FILTER_SANITIZE_FULL_SPECIAL_CHARS), $errores, $resultado);
        } else {
            $this->ejercicio8(filter_var($json, FILTER_SANITIZE_FULL_SPECIAL_CHARS), $errores);
        }
    }

    private function procesarEjercicio8(array $datos): array {
        $resultado = [];
        $alumnosDatos = [];
        $suspendidosPorAlumno = [];
        foreach ($datos as $asignatura => $alumnos) {
            $datosAsignatura = [
                'media' => 0,
                'suspensos' => 0,
                'aprobados' => 0,
                'max' => [
                    'alumno' => null,
                    'nota' => null
                ],
                'min' => [
                    'alumno' => null,
                    'nota' => null
                ]
            ];
            $numAlumnos = count($alumnos);
            $notaAgregada = 0;
            foreach ($alumnos as $nombre => $nota) {
                $notaAgregada += $nota;
                if ($nota >= 5) {
                    $datosAsignatura['aprobados']++;
                } else {
                    $datosAsignatura['suspensos']++;
                }
                if (!isset($suspendidosPorAlumno[$nombre])) {
                    $suspendidosPorAlumno[$nombre] = 0;
                }
                if ($nota < 5) {
                    $suspendidosPorAlumno[$nombre]++;
                }
                //Solo se va a ejecutar para el primer alumno de cada asignatura
                if ($datosAsignatura['max']['alumno'] === null) {
                    $datosAsignatura['max']['alumno'] = $nombre;
                    $datosAsignatura['max']['nota'] = $nota;
                    $datosAsignatura['min']['alumno'] = $nombre;
                    $datosAsignatura['min']['nota'] = $nota;
                } else {
                    if ($datosAsignatura['max']['nota'] < $nota) {
                        $datosAsignatura['max']['alumno'] = $nombre;
                        $datosAsignatura['max']['nota'] = $nota;
                    }
                    if ($datosAsignatura['min']['nota'] > $nota) {
                        $datosAsignatura['min']['alumno'] = $nombre;
                        $datosAsignatura['min']['nota'] = $nota;
                    }
                }
            }
            $datosAsignatura['media'] = ($numAlumnos > 0) ? $notaAgregada / $numAlumnos : null;
            $resultado[$asignatura] = $datosAsignatura;
            $alumnosDatos = $this->obtenerEstadoAlumnos($suspendidosPorAlumno);
        }
        $data['resultado'] = $resultado;
        $data['alumnos'] = $alumnosDatos;
        return $data;
    }

    private function obtenerEstadoAlumnos(array $datos): array
    {
        $aprobadoTodo = [];
        $suspendidoAlMenosUna = [];
        $noPromociona = [];

        // 1. Clasificar según el número de suspensos
        foreach ($datos as $alumno => $numSuspenso) {
            if ($numSuspenso === 0) {
                $aprobadoTodo[] = $alumno;
            } else {
                $suspendidoAlMenosUna[] = $alumno;
                if ($numSuspenso > 1) {
                    $noPromociona[] = $alumno;
                }
            }
        }
        $datosAlumnos['aprobadoTodo'] = count($aprobadoTodo);
        $datosAlumnos['suspendidoUna'] = count($suspendidoAlMenosUna);
        $datosAlumnos['noPromociona'] = count($noPromociona);
        return $datosAlumnos;
    }

    private function checkEjercicio8(string $json)
    {
        $errores = [];
        if ($json === '') {
            $errores['json'][] = 'Campo obligatorio';
        } else {
            if (json_validate($json)) {
                $datos = json_decode($json, true);
                if (is_array($datos)) {
                    foreach($datos as $asignatura => $alumnos) {
                        if (!is_string($asignatura)) {
                            $errores['json'][] = "El valor $asignatura no es una string";
                        } else {
                            if (!is_array($alumnos)) {
                                $errores['json'][] = "No tenemos un array de alumnos en la asignatura: $asignatura ";
                            } else {
                                foreach($alumnos as $nombre => $nota) {
                                    if (!is_string($nombre)) {
                                        $errores['json'][] = "En la asignatura $asignatura existe un alumno cuyo nombre no es una string";
                                    } elseif (!is_numeric($nota)) {
                                        $errores['json'][] = "En la asignatura $asignatura, el alumno $nombre no tiene una nota numérica";
                                    } elseif ($nota > 10 || $nota < 0) {
                                        $errores['json'][] = "En la asignatura $asignatura, el alumno $nombre no tiene una nota entre 0 y 10";
                                    }
                                }
                            }
                        }
                    }
                } else{
                    $errores['json'][] = 'El json no tiene el formato esperado';
                }
            } else {
                $errores['json'][] = 'Inserte un json válido';
            }
        }
        return $errores;
    }

    public function ejercicio9(string $json = '', array $errores = [], array $resultado = []): void
    {
        $data = array(
            'titulo' => 'Ejercicios iterativas 09',
            'breadcrumb' => ['Inicio', 'Cálculo de notas 2'],
        );
        $data['errores'] = $errores;
        $data['json'] = $json;
        $data['resultado'] = $resultado;
        $this->view->showViews(array('templates/header.view.php', 'iterativas9.view.php', 'templates/footer.view.php'), $data);
    }

    public function doEjercicio9(): void
    {
        $errores = $this->checkEjercicio09($_POST);
        $inputJson = filter_var($_POST['json'], FILTER_SANITIZE_SPECIAL_CHARS);
        if ($errores === []) {
            $resultado = $this->procesarEjercicio09(json_decode($_POST['json'], true));
            $this->ejercicio9($inputJson, $errores, $resultado);
        } else {

            $this->ejercicio9($inputJson, $errores);
        }
    }

    private function checkEjercicio09(array $datosFormulario): array
    {
        $errores = [];
        if (!isset($datosFormulario['json'])) {
            $errores['json'][] = 'Campo obligatorio';
        } else {
            $jsonText = $datosFormulario['json'];
            if ($jsonText === '') {
                $errores['json'][] = 'Campo obligatorio';
            } else {
                if (!json_validate($jsonText)) {
                    $errores['json'][] = 'Inserte un json válido';
                } else {
                    $data = json_decode($jsonText, true);
                    foreach ($data as $modulo => $alumnado) {
                        if (!is_string($modulo)) {
                            $errores['json'][] = "El valor $modulo no es una string";
                        }
                        if (!is_array($alumnado)) {
                            $errores['json'][] = "El modulo $modulo no tiene un array de alumando asociado";
                        } else {
                            foreach ($alumnado as $nombre => $notas) {
                                if (!is_string($nombre)) {
                                    $errores['json'][] = "En el modulo $modulo, el alumno '$nombre' no es de tipo string";
                                }
                                if (!is_array($notas)) {
                                    $errores['json'][] = "En el modulo $modulo, el alumno '$nombre' no tiene un array de notas";
                                } else {
                                    if ($notas === []) {
                                        $errores['json'][] = "En el modulo $modulo, el alumno '$nombre' no tiene notas asignadas";
                                    } else {
                                        foreach ($notas as $nota) {
                                            if (!is_numeric($nota)) {
                                                $errores['json'][] = "En el modulo $modulo, el alumno '$nombre' tiene la nota $nota que no es un número";
                                            } else if ($nota < 0 || $nota > 10) {
                                                $errores['json'][] = "En el modulo $modulo, el alumno '$nombre' tiene la nota $nota que no es un valor entre 0 y 10";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return $errores;
    }

    private function procesarEjercicio09(array $datos) : array {
        $resultado = [];
        foreach ($datos as $modulo => $alumnos) {
            $datosModulo = [
                'media' => null,
                'aprobados' => 0,
                'suspensos' => 0,
                'max' => [
                    'alumno' => null,
                    'nota' => null,
                ],
                'min' => [
                    'alumno' => null,
                    'nota' => null,
                ]
            ];
            $notasFinales = [];
            foreach($alumnos as $nombre => $notas) {
                $mediaAlumno = array_sum($notas) / count($notas);
                $notasFinales[] = $mediaAlumno;
                if ($mediaAlumno >= 5) {
                    $datosModulo['aprobados']++;
                } else {
                    $datosModulo['suspensos']++;
                }
                if ($datosModulo['max']['alumno'] === null) {
                    $datosModulo['max']['alumno'] = $nombre;
                    $datosModulo['max']['nota'] = $mediaAlumno;
                    $datosModulo['min']['alumno'] = $nombre;
                    $datosModulo['min']['nota'] = $mediaAlumno;
                } else {
                    if ($datosModulo['max']['nota'] < $mediaAlumno) {
                        $datosModulo['max']['alumno'] = $nombre;
                        $datosModulo['max']['nota'] = $mediaAlumno;
                    }
                    if ($datosModulo['min']['nota'] > $mediaAlumno) {
                        $datosModulo['min']['alumno'] = $nombre;
                        $datosModulo['min']['nota'] = $mediaAlumno;
                    }
                }
            }
            if (count($notasFinales) > 0) {
                $datosModulo['media'] = array_sum($notasFinales) / count($notasFinales);
            }
            $resultado[$modulo] = $datosModulo;
        }
        return $resultado;
    }
}
