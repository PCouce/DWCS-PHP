<?php

declare(strict_types=1);

?>
<!--Inicio HTML -->
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <form method="post" action="">
                <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Nuevo Trabajador</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--<form action="./?sec=formulario" method="post">                   -->
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control"
                                       name="nombre" id="nombre"
                                       value=""
                                       minlength="4"
                                       maxlength="50"
                                       placeholder="Nombre"
                                />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="id_rol">Rol:</label>
                                <select name="id_rol[]" id="id_rol" class="form-control select2"">
                                <option value="">-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control"
                                       name="email" id="email"
                                       value="<?php
                                        echo $input['email'] ?? ''; ?>"
                                       maxlength="255"
                                       placeholder="usuario@email.org"
                                />
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="idioma">Idioma:</label>
                                <select name="idioma" id="idioma" class="form-control">
                                    <option value="">-</option>
                                    <?php foreach ($idiomas as $idioma) {
                                        ?>
                                        <option value="<?php echo $idioma ?>" <?php echo (isset($input['idioma']) && $idioma == $input['idioma']) ? 'selected' : ''; ?>><?php echo ucfirst($idioma); ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <p class="text-error small"><?php echo $errors['idioma'] ?? ''; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <div class="col-12 text-right">
                <a href="<?php echo strtok($_SERVER['REQUEST_URI'] ?? '/', '?'); ?>" value="" name="reiniciar"
                   class="btn btn-danger">Reiniciar</a>
                <input type="submit" value="Añadir trabajador" class="btn btn-primary ml-2"/>
            </div>
        </div>
        </form>
    </div>
</div>

<!--Fin HTML -->
