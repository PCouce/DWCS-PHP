<div class="card shadow mb-4">
        <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Datos del estudiante:</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Nombre:</td>
                            <td><?php echo $nombre ?></td>
                        </tr>
                        <tr>
                            <td>Edad:</td>
                            <td><?php echo $edad ?></td>
                        </tr>
                        <tr>
                            <td>Nota media:</td>
                            <td><?php echo $notaMedia ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
