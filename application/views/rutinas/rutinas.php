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
                                    <td><?php echo $rutina->grupo_muscular; ?></td>
                                    <td><?php echo $rutina->objetivo; ?></td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Detalles</a></td>
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
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h2>Detalles de la rutina</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Objetivo</th>
                                <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($ejercicios) && !empty($ejercicios)): ?>
                                        <?php foreach ($ejercicios as $ejercicio): ?>
                                            <?php if ($ejercicio->estado == 1) : ?>
                                                <tr>
                                                    <td><?php echo $ejercicio->nombre_ejercicio; ?></td>
                                                    <td><?php echo $ejercicio->objetivo; ?></td>
                                                    <td><a class="pencil-icon" href="<?php echo site_url('Modificar/editarEjercicio/' . $ejercicio->id_ejercicio); ?>">Editar</a></td>
                                                    <td><a href="<?php echo site_url('Modificar/eliminarEjercicio/' . $ejercicio->id_ejercicio); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este ejercicio?');">Eliminar</a></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr><td colspan="8">No hay ejercicios registrados.</td></tr>
                                    <?php endif; ?>
                                </tbody>
                                </table>

                            <a class="btn btn-secondary" role="button" href="<?php echo base_url('welcome/dashboard'); ?>">Volver</a>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" role="button" href="#">...</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</div>