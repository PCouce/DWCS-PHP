<!--Inicio HTML -->
<div class="row">
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