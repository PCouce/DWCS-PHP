<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Sueldo Bruto:</td>
                <td><?php echo number_format($sueldoBruto, 2, ',', '.'); ?>€</td>
            </tr>
            <tr>
                <td>Descuento:</td>
                <td><?php echo $descuento ?></td>
            </tr>
            <tr>
                <td>Area:</td>
                <td><?php echo $area ?></td>
            </tr>
            <tr>
                <td>Perímetro:</td>
                <td><?php echo $perimeter ?></td>
            </tr>
        </table>
    </div>
</div>
