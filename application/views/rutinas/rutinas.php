<div class="container">
            <h2>Lista de Ejercicios</h2>
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
                                    <td><?php echo $rutina->nombre_rutina; ?></td>
                                    <td><?php echo $rutina->objetivo; ?></td>
                                    <td><a class="pencil-icon" href="<?php echo site_url('Modificar/editarRutina/' . $rutina->id_rutina); ?>">Editar</a></td>
                                    <td><a href="<?php echo site_url('Modificar/eliminarRutina/' . $rutina->id_rutina); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta rutina?');">Eliminar</a></td>
                                </tr>
                            
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="8">No hay rutinas registradas.</td></tr>
                    <?php endif; ?>
                </tbody>
                </table>
                <a class="btn btn-primary" role="button" href="#">Agregar rutina</a>
                <a class="btn btn-secondary" role="button" href="<?php echo base_url('welcome/dashboard'); ?>">Volver</a>
</div>