<div class="card shadow mb-4">
        <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Km/h a m/s:</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Km/h:</td>
                            <td><?php echo number_format($kmh, decimals: 6, decimal_separator: ',', thousands_separator: '.') ?></td>
                        </tr>
                        <tr>
                            <td>m/s:</td>
                            <td><?php echo number_format($ms, decimals: 6, decimal_separator: ',', thousands_separator: '.')?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
