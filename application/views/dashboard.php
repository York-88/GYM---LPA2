<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

</head>
<body>

    <?php if($this->session->userdata('id_rol') == 3): ?>
        <div class="container mt-4">
            <h2 class="mb-4">Bienvenido al Dashboard del Cliente</h2>
            <!-- Sección: Rutinas asignadas -->
            <div class="card mb-4">
                <div class="card-header">Rutinas Asignadas</div>
                <div class="card-body">
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>Rutina</th>
                                <th>Nivel</th>
                                <th>Entrenador</th>
                                <th>Fecha</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($citas) && !empty($citas)): ?>
                                <?php foreach($citas as $cita): ?>
                                    <tr>
                                        <td><?php echo $cita->nombre_rutina; ?></td>
                                        <td><?php echo $cita->nombre_nivel; ?></td>
                                        <td><?php echo $cita->nombre_entrenador; ?></td>
                                        <td><?php echo $cita->fecha; ?></td>
                                        <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>Rutina</th>
                                <th>Nivel</th>
                                <th>Entrenador</th>
                                <th>Fecha</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($citas) && !empty($citas)): ?>
                                <?php foreach($citas as $cita): ?>
                                    <tr>
                                        <td><?php echo $cita->nombre_rutina; ?></td>
                                        <td><?php echo $cita->nivel; ?></td>
                                        <td><?php echo $cita->nombre_entrenador; ?></td>
                                        <td><?php echo $cita->fecha; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm" 
                                            onclick="verDetalleRutina(<?php echo $cita->id_rutina; ?>, <?php echo $cita->id_nivel; ?>)" 
                                            data-bs-toggle="modal" data-bs-target="#modalDetalleRutina">
                                                Detalles
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="5">No tienes citas agendadas.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="5">No tienes citas agendadas.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Sección: Escoger cita -->
            <div class="card mb-4">
                <div class="card-header">Escoger Cita</div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('Cliente/agendarCita'); ?>">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="rutina" class="form-label">Rutina</label>
                                <select class="form-select" id="rutina" name="rutina" required>
                                    <option value="">Selecciona una rutina</option>
                                    <?php foreach($rutinas as $rutina): ?>
                                        <option value="<?php echo $rutina->id; ?>"><?php echo $rutina->nombre; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="nivel" class="form-label">Nivel</label>
                                <select class="form-select" id="nivel" name="nivel" required>
                                    <option value="">Selecciona un nivel</option>
                                    <?php foreach($niveles as $nivel): ?>
                                        <option value="<?php echo $nivel->id_nivel; ?>"><?php echo $nivel->nombre_nivel; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="entrenador" class="form-label">Entrenador</label>
                                <select class="form-select" id="entrenador" name="entrenador" required>
                                    <option value="">Selecciona un entrenador</option>
                                    <?php foreach($entrenadores as $entrenador): ?>
                                        <option value="<?php echo $entrenador->id_usuario; ?>"><?php echo $entrenador->nombre; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Agendar Cita</button>
                    </form>
                </div>
            </div>
        </div>
    <?php elseif($this->session->userdata('id_rol') == 2): ?>
        <div class="container">
            <h2>Lista de Rutinas</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Entrenador</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($rutinas) && !empty($rutinas)): ?>
                        <?php foreach ($rutinas as $rutina): ?>
                            <tr>
                                <?php if ($rutina->estado == 1) : ?>
                                <td><?php echo $rutina->nombre; ?></td>
                                <td><?php echo $rutina->descripcion; ?></td>
                                <td><?php echo $rutina->duracion; ?></td>
                                <td><?php echo $rutina->entrenador; ?></td>
                                <td><a class="pencil-icon" href="<?php echo base_url('Modificar/editar/'.$rutina->id_rutina); ?>">Editar</a></td>
                                <td><a href="<?php echo base_url('Modificar/eliminar/'.$rutina->id_rutina); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar esta rutina?');">Eliminar</a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="8">No hay rutinas registradas.</td></tr>
                    <?php endif; ?>
                </tbody>
                </table>
                <a class="btn btn-primary" role="button" href="<?php echo base_url('Registrar/registrarRutina');?>">Agregar Rutina</a>
        </div>
    <?php elseif($this->session->userdata('id_rol') == 4): ?>

        <div class="container">
            <h2>Lista de Clientes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($clientes) && !empty($clientes)): ?>
                        <?php foreach ($clientes as $clientes): ?>
                            <tr>
                                <?php if ($clientes ->estado == 1): ?>
                                <td><?php echo $clientes->documento; ?></td>
                                <td><?php echo $clientes->nombre; ?></td>
                                <td><?php echo $clientes->apellido; ?></td>
                                <td><?php echo $clientes->direccion; ?></td>
                                <td><?php echo $clientes->telefono; ?></td>

                                <td><a class="pencil-icon" href="<?php echo base_url('Modificar/editar/'.$clientes->id_usuario); ?>">Editar</a></td>
                                <td><a href="<?php echo base_url('Modificar/eliminarUsuario/'.$clientes->id_usuario); ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="8">No hay empleados registrados.</td></tr>
                    <?php endif; ?>
                </tbody>
                </table>
                <a class="btn btn-primary" role="button" href="<?php echo base_url('Registrar/registrarUsuario/3');?>">Agregar Cliente</a>
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