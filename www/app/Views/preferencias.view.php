<?php

declare(strict_types=1);
?>
<!--Inicio HTML -->
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <form method="post" action="">
                <div class="card card-header">
                    <h6>Seleccionar tema</h6>
                </div>
                <div class="card-body">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="tema">Tema:</label>
                            <select name="tema" id="tema" class="form-control">
                                <option value="light" <?php echo empty($_COOKIE['dark_mode']) ? 'selected' : ''; ?>>Claro</option>
                                <option value="dark" <?php echo !empty($_COOKIE['dark_mode']) ? 'selected' : ''; ?>>Oscuro</option>
                            </select>
                            <p class="text-error small"><?php echo $errors['tema'] ?? ''; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <input type="submit" value="Guardar cambios" name="guardar" class="btn btn-primary ml-2"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
