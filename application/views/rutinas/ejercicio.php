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
                <a class="btn btn-primary" role="button" href="<?php echo base_url('Registrar/registrarEjercicio'); ?> ">Agregar ejercicio</a>
                <a class="btn btn-secondary" role="button" href="<?php echo base_url('welcome/dashboard'); ?>">Volver</a>
</div>