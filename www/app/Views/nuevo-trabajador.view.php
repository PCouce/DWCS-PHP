<!--Inicio HTML -->
<div class="row">
    <div class="col-12">
        <?php if (!empty($mensaje_exito)): ?>
            <div class="alert alert-success"><?php echo $mensaje_exito; ?></div>
        <?php endif; ?>
        <?php if (!empty($errors['db'])): ?>
            <div class="alert alert-danger"><?php echo $errors['db']; ?></div>
        <?php endif; ?>

        <div class="card shadow mb-4">
            <form method="post" action="">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Nuevo Trabajador</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control"
                                       name="nombre" id="nombre"
                                       value="<?php echo htmlspecialchars($input['nombre'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                       minlength="4"
                                       maxlength="50"
                                       placeholder="Nombre"
                                />
                                <p class="text-error small"><?php echo $errors['nombre'] ?? ''; ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="salario_bruto">Salario Bruto:</label>
                                <input type="number" step="0.01" class="form-control"
                                       name="salario_bruto" id="salario_bruto"
                                       value="<?php echo htmlspecialchars((string)($input['salario_bruto'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>"
                                       placeholder="Salario Bruto"
                                />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="retencion">Retención:</label>
                                <input type="number" step="0.01" class="form-control"
                                       name="retencion" id="retencion"
                                       value="<?php echo htmlspecialchars((string)($input['retencion'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>"
                                       placeholder="Retención"
                                />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="id_rol">Rol:</label>
                                <select name="id_rol" id="id_rol" class="form-control select2">
                                    <option value="">-</option>
                                    <?php foreach ($roles as $role) {
                                        $selected = (isset($input['id_rol']) && (int)$input['id_rol'] === (int)$role['id_rol']) ? 'selected' : '';
                                        ?>
                                        <option value="<?php echo $role['id_rol']; ?>" <?php echo $selected; ?>><?php echo ucfirst($role['nombre_rol']); ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <p class="text-error small"><?php echo $errors['id_rol'] ?? ''; ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="id_country">País:</label>
                                <select name="id_country" id="id_country" class="form-control select2">
                                    <option value="">-</option>
                                    <?php foreach ($countries as $country) {
                                        $selected = (isset($input['id_country']) && (int)$input['id_country'] === (int)$country['id_country']) ? 'selected' : '';
                                        ?>
                                        <option value="<?php echo $country['id_country']; ?>" <?php echo $selected; ?>><?php echo ucfirst($country['country_name']); ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <p class="text-error small"><?php echo $errors['id_country'] ?? ''; ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-check">
                                <!-- IMPORTANTE: Añadido name="activo" y lógica para mantener el estado -->
                                <input class="form-check-input" type="checkbox" name="activo" id="activo" value="1" <?php echo (isset($_POST['activo'])) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="activo">Activo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <a href="<?php echo strtok($_SERVER['REQUEST_URI'] ?? '/', '?'); ?>" class="btn btn-danger">Reiniciar</a>
                        <input type="submit" value="Añadir trabajador" class="btn btn-primary ml-2"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Fin HTML -->