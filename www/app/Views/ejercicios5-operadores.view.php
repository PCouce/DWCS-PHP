<div class="card shadow mb-4">
        <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Factura hotel:</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Precio noche t. alta:</td>
                            <td><?php echo $precioNocheAlta ?></td>
                        </tr>
                        <tr>
                            <td>Precio noche t. baja:</td>
                            <td><?php echo $precioNocheBaja ?></td>
                        </tr>
                        <tr>
                            <td>Noches alta:</td>
                            <td><?php echo $nochesAlta ?></td>
                        </tr>
                        <tr>
                            <td>Noches baja:</td>
                            <td><?php echo $nochesBaja ?></td>
                        </tr>
                        <tr>
                            <td>Coste total:</td>
                            <td><?php echo $total ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
