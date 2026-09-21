<div class="card shadow mb-4">
        <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Cálculos círculo:</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Radio:</td>
                            <td><?php echo number_format($radio, decimals: 6, decimal_separator: ',', thousands_separator: '.') ?></td>
                        </tr>
                        <tr>
                            <td>Área:</td>
                            <td><?php echo number_format($area, decimals: 6, decimal_separator: ',', thousands_separator: '.')?></td>
                        </tr>
                        <tr>
                            <td>Perímetro:</td>
                            <td><?php echo number_format($perimetro, decimals: 6, decimal_separator: ',', thousands_separator: '.') ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
