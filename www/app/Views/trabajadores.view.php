<!--Inicio HTML -->
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <form method="get" action="">
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
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" name="username" id="username" value="<?php echo $input['username'] ?? '';?>"  />
                            </div>
                        </div>
                        <?php if (isset($roles)) { ?>
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
                        <?php } ?>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="salario_bruto">Salario Bruto:</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="min_salario" id="min_salario" value="" placeholder="Mí­nimo" />
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="max_salario" id="max_salario" value="" placeholder="Máximo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <label for="retencion">Retención:</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="min_retencion" id="min_retencion" value="" placeholder="Mí­nimo" />
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="max_retencion" id="max_retencion" value="" placeholder="Máximo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (isset($roles)) { ?>
                            <div class="col-12 col-lg-4">
                                <div class="mb-3">
                                    <label for="nacionalidad">Nacionalidad:</label>
                                    <select name="nacionalidad" id="nacionalidad" class="form-control" data-placeholder="Nacionalidad">
                                        <option value="">-</option>
                                        <?php foreach ($roles as $rol) : ?>
                                            <option value="<?= $rol['id_rol'] ?>" ><?= $rol['nombre_rol'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <a href="/trabajadores" value="" class="btn btn-danger">Reiniciar filtros</a>
                        <input type="submit" value="Aplicar filtros" name="enviar" class="btn btn-primary ml-2"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Trabajadores</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body" id="card_table">
                <div id="button_container" class="mb-3"></div>
                <!--<form action="./?sec=formulario" method="post">                   -->
                <table id="tabladatos" class="table table-striped">                    
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Salario Bruto</th>
                            <th>Retención</th>
                            <th>Rol</th>
                            <th>País</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($trabajadores as $trabajador) {
                    ?>
                        <tr class="<?php echo $trabajador['activo'] ? '' : 'table-danger'; ?>">
                            <td><?php echo $trabajador['username'] ?></td>
                            <td><?php echo $trabajador['salarioBruto'] ?></td>
                            <td><?php echo $trabajador['retencionIRPF'] ?>%</td>
                            <td><?php echo $trabajador['nombre_rol'] ?></td>
                            <td><?php echo $trabajador['country_name'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>                    
                </table>
            </div>
        </div>
    </div>                        
</div>
<!--Fin HTML -->