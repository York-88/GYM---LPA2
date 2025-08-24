<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

</head>
<body>

    <?php if($this->session->userdata('id_rol') == 3): ?>
        <h1>HOLA, FELICIDADES!!!</h1>
    <?php elseif($this->session->userdata('id_rol') == 2): ?>
        <h1>HOLA, FELICIDADES!!!</h1>
    <?php elseif($this->session->userdata('id_rol') == 4): ?>

        <div class="container">
            <h2>Lista de Empleados</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Fecha de Finalización</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($empleados) && !empty($empleados)): ?>
                        <?php foreach ($empleados as $empleado): ?>
                            <tr>
                                <?php if ($empleado->estado == 1): ?>
                                <td><?php echo $empleado->documento; ?></td>
                                <td><?php echo $empleado->nombre; ?></td>
                                <td><?php echo $empleado->apellido; ?></td>
                                <td><?php echo $empleado->direccion; ?></td>
                                <td><?php echo $empleado->telefono; ?></td>
                                <td><?php echo $empleado->salario; ?></td>
                                <td><?php echo $empleado->inicio_contrato; ?></td>
                                <td><?php echo $empleado->fin_contrato; ?></td>

                                <td><a class="pencil-icon" href="<?php echo base_url('Modificar/editar/'.$empleado->id_usuario); ?>">Editar</a></td>
                                <td><a href="<?php echo base_url('Modificar/eliminarUsuario/'.$empleado->id_usuario); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="8">No hay empleados registrados.</td></tr>
                    <?php endif; ?>
                </tbody>
                </table>
                <a class="btn btn-primary" role="button" href="<?php echo base_url('Registrar/registrarUsuario/4');?>">Agregar Empleado</a>
        </div>
        <div class="container mt-3" >
            <h2>Lista de Entrenadores</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Fecha de Finalización</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($entrenadores) && !empty($entrenadores)): ?>
                        <?php foreach ($entrenadores as $entrenador): ?>
                            <tr>
                                <?php if ($entrenador->estado == 1): ?>
                                <td><?php echo $entrenador->documento; ?></td>
                                <td><?php echo $entrenador->nombre; ?></td>
                                <td><?php echo $entrenador->apellido; ?></td>
                                <td><?php echo $entrenador->direccion; ?></td>
                                <td><?php echo $entrenador->telefono; ?></td>
                                <td><?php echo $entrenador->salario; ?></td>
                                <td><?php echo $entrenador->inicio_contrato; ?></td>
                                <td><?php echo $entrenador->fin_contrato; ?></td>
                                <td><a class="pencil-icon" href="<?php echo base_url('welcome/actualizar/'.$entrenador->id_usuario); ?>">Editar</a></td>
                                <td><a href="<?php echo base_url('Modificar/eliminarUsuario/'.$entrenador->id_usuario); ?>">Eliminar</a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="8">No hay entrenadores registrados.</td></tr>
                    <?php endif; ?>
                </tbody>
                </table>
                <a class="btn btn-primary" role="button" href="<?php echo base_url('Registrar/registrarUsuario/2');?>">Agregar Entrenador</a>
        </div>
    <?php endif; ?>



        </main>
    </body>
</html>