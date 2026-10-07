<?php

declare(strict_types=1);
?>
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <?php if (isset($numeros)): ?>
            <div class="alert alert-success">
                <p>El cuadrado del número <?php echo $numero ?> es <?php echo $cuadrado ?></p>
            </div>
            <?php endif; ?>
            <form method="post" action="">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">El cuadrado de un número:</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!--<form action="./?sec=formulario" method="post">                   -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="numero">Número a elevar</label>
                                <input type="text" class="form-control" name="numero" id="numero" value="<?php echo $numeros ?? '' ?>" />
                                <p class="text-danger small"><?php echo $error ?? ''; ?></p>
                                <p class="m-0 small"> Script que recibe un número y muestra "El cuadrado del número $x es $y".</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-12 text-right">
                        <input type="submit" value="Elevar" name="enviar" class="btn btn-primary ml-2"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>