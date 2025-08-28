<div class="container mt-4">
    <h2>Detalles de la Rutina</h2>
    <p><strong>Rutina:</strong> <?php echo $rutina->nombre; ?></p>
    <p><strong>Nivel:</strong> <?php echo $nivel->nombre_nivel; ?></p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ejercicio</th>
                <th>Nivel</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($detalles)): ?>
                <?php foreach ($detalles as $detalle): ?>
                    <tr>
                        <td><?php echo $detalle->nombre_ejercicio; ?></td>
                        <td><?php echo $detalle->nombre_nivel; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="2">No hay detalles para esta rutina y nivel.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-secondary">Volver</a>
</div>