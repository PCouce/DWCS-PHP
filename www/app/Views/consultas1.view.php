<?php

declare(strict_types=1);

?>
<div class="row">
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
