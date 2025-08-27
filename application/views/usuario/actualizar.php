<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder">Actualizar Información Personal</h1>
                            <p class="lead fw-normal text-muted mb-0">Modifica tus datos personales y guarda los cambios.</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="container">
                                    <?php echo form_open('modificar/editarUsuario'); ?> 
                                        <input type="hidden" name="id_usuario" value="<?php echo isset($usuario->id_usuario) ? $usuario->id_usuario : ''; ?>">
                                        <div class="mb-3">
                                            <label for="documentoUsuario" class="form-label">Número de documento:</label>
                                            <input type="text" name="documentoUsuario" id="documentoUsuario" class="form-control" required value="<?php echo isset($usuario->documento) ? $usuario->documento : ''; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombreUsuario" class="form-label">Primer Nombre:</label>
                                            <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" required value="<?php echo isset($usuario->nombre) ? $usuario->nombre : ''; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="apellidoUsuario" class="form-label">Primer Apellido:</label>
                                            <input type="text" name="apellidoUsuario" id="apellidoUsuario" class="form-control" required value="<?php echo isset($usuario->apellido) ? $usuario->apellido : ''; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="direccionUsuario" class="form-label">Dirección de residencia:</label>
                                            <input type="text" name="direccionUsuario" id="direccionUsuario" class="form-control" required value="<?php echo isset($usuario->direccion) ? $usuario->direccion : ''; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telefonoUsuario" class="form-label">Número de teléfono:</label>
                                            <input type="text" name="telefonoUsuario" id="telefonoUsuario" class="form-control" required value="<?php echo isset($usuario->telefono) ? $usuario->telefono : ''; ?>">
                                        </div>
                                        <?php if (isset($usuario->salario)): ?>
                                        <div class="mb-3">
                                            <label for="salarioUsuario" class="form-label">Salario</label>
                                            <input type="number" name="salarioUsuario" id="salarioUsuario" class="form-control" step="0.01" value="<?php echo $usuario->salario; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fechaInicio" class="form-label">Fecha de inicio</label>
                                            <input type="date" name="fechaInicio" id="fechaInicio" class="form-control" value="<?php echo $usuario->inicio_contrato; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fechaFinalizacion" class="form-label">Fecha de finalización</label>
                                            <input type="date" name="fechaFinalizacion" id="fechaFinalizacion" class="form-control" value="<?php echo $usuario->fin_contrato; ?>">
                                        </div>
                                        <?php endif; ?>
                                        <div class="mb-3">
                                            <label for="contraseñaUsuario" class="form-label">Nueva Contraseña (opcional)</label>
                                            <input type="password" name="contraseñaUsuario" class="form-control" id="contraseñaUsuario">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                        <a href="<?php echo base_url('Welcome/dashboard'); ?>" class="btn btn-secondary">Volver</a>
                                    <?php echo form_close(); ?>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </body>
</html>

