<div class="container">
    <h2>Detalles de la Rutina</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nivel</th>
                <th scope="col">Ejercicio/s</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($info_rutina) && !empty($info_rutina)): ?>
                <?php foreach ($info_rutina as $detalle): ?>
                <tr>
                    <td><?php echo $detalle->nivel; ?></td>
                    <td><?php echo $detalle->nombre_ejercicio; ?></td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No hay detalles registrados.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="<?php echo base_url('Obtener/obtenerRutinas'); ?>" class="btn btn-secondary">Volver a las Rutinas</a>
</div>