<?php

declare(strict_types=1);
?>
<div class="row">
    <?php
    if (isset($resultado)):
    ?>
    <div class="col-12 alert alert-success">
        <?php foreach ($resultado as $indice => $valor):?>
         <p><?php echo"$indice: $valor"?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <form method="post" action="">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Contador de letras</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--<form action="./?sec=formulario" method="post">                   -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <textarea class="card-input" name="texto"></textarea>
                                <p class="text-danger small"><?php echo $errores['texto'] ?? ''; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <input type="submit" value="Contar letras" name="enviar" class="btn btn-primary ml-2"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
