<div class="container">
            <h2>Lista de Rutinas</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>

                    <th scope="col">Nombre</th>
                    <th scope="col">Objetivo</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($rutinas) && !empty($rutinas)): ?>
                        <?php foreach ($rutinas as $rutina): ?>
                            
                                <tr>
                                    <td><?php echo $rutina->grupo_muscular; ?></td>
                                    <td><?php echo $rutina->objetivo; ?></td>
                                    <td><a href="<?php echo base_url('Obtener/obtenerRutinaPorId/'. $rutina->id_rutina); ?>">Detalles</a></td>
                                    <td><a class="pencil-icon" href="<?php echo base_url('Modificar/editarRutina/' . $rutina->id_rutina); ?>">Editar</a></td>                                </tr>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="8">No hay rutinas registradas.</td></tr>
                    <?php endif; ?>
                </tbody>
                </table>
                <a class="btn btn-primary" role="button" href="<?php echo base_url('Registrar/registrarRutina'); ?>">Agregar rutina</a>
                <a class="btn btn-secondary" role="button" href="<?php echo base_url('welcome/dashboard'); ?>">Volver</a>
        </div>