<?php

declare(strict_types=1);

?>
<div class="row">
    <div class="card shadow mb-4">
        <form method="get" action="/trabajadores-filtros">
            <input type="hidden" name="order" value="1"/>
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Filtros</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!--<form action="./?sec=formulario" method="post">                   -->
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <label for="alias">Alias:</label>
                            <input type="text" class="form-control" name="alias" id="alias" value="" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <label for="nombre_completo">Nombre completo:</label>
                            <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" value="" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="mb-3">
                            <label for="id_tipo">Tipo:</label>
                            <select name="id_tipo[]" id="id_tipo" class="form-control select2" data-placeholder="Tipo proveedor" multiple>
                                <option value="">-</option>
                                <option value="3" >Componentes móviles</option>
                                <option value="4" >Componentes PC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <label for="id_rol">Rol:</label>
                            <select name="id_rol" id="id_rol" class="form-control" data-placeholder="Rol">
                                <option value="">-</option>
                                <?php foreach ($roles as $rol) : ?>
                                <option value="<?= $rol['id_rol'] ?>" ><?= $rol['nombre_rol'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <label for="anho_fundacion">Año fundación:</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="min_anho" id="min_anho" value="" placeholder="Mí­nimo" />
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" name="max_anho" id="max_anho" value="" placeholder="Máximo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="col-12 text-right">
                    <a href="/trabajadores-filtros" value="" name="reiniciar" class="btn btn-danger">Reiniciar filtros</a>
                    <input type="submit" value="Aplicar filtros" name="enviar" class="btn btn-primary ml-2"/>
                </div>
            </div>
        </form>
    </div>
    <?php
    if (!empty($trabajadores)) {
        ?>
        <div class="col-12">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Salario Bruto</th>
                    <th>IRPF</th>
                    <th>Rol</th>
                    <th>País</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($trabajadores as $trabajador => $datos) {
                    ?>
                    <tr>
                        <td><?php echo $datos['username']; ?></td>
                        <td><?php echo $datos['salarioBruto']; ?></td>
                        <td><?php echo $datos['retencionIRPF']; ?></td>
                        <td><?php echo $datos['nombre_rol']; ?></td>
                        <td><?php echo $datos['country_name']; ?></td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
    } else {
        ?>

    <?php
    }
    ?>
</div>
