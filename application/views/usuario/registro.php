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
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Formulario de Registro</h1>
                            <?php if ($id_rol_especifico == 3): ?>
                            <p class="lead fw-normal text-muted mb-0">¡Justo desde aquí inicia el cambio!</p>
                            <?php endif; ?>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <div class="container">
                                        <?php echo form_open('registrar/registrarUsuario');?> 
                                            <div class="row">
                                                <input type="hidden" name="rolUsuario" value="<?php echo $id_rol_especifico; ?> ">
                                                <div class="mb-3">
                                                    <label for="DocumentoUsuario" class="form-label">Numero de documento:</label>
                                                    <input type="text" name="documentoUsuario" id="documentoUsuario" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nombreUsuario" class="form-label">Primer Nombre:</label>
                                                    <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ApellidoUsuario" class="form-label">Primer Apellido:</label>
                                                    <input type="text" name="apellidoUsuario" id="apellidoUsuario" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="DireccionUsuario" class="form-label">Dirección de residencia:</label>
                                                    <input type="text" name="direccionUsuario" id="direccionUsuario" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="TelefonoUsuario" class="form-label">Numero de telefono:</label>
                                                    <input type="text" name="telefonoUsuario" id="telefonoUsuario" class="form-control" required>
                                                </div>
                                                <?php if ($id_rol_especifico == 2 || $id_rol_especifico == 4): ?>
                                                <div class="mb-3">
                                                    <label for="salario" class="form-label">Salario</label>
                                                    <input type="number" name="salarioUsuario" id="salarioUsuario" class="form-control" step="0.01" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="salario" class="form-label">Fecha de inicio</label>
                                                    <input type="date" name="fechaInicio" id="fechaInicio" class="form-control"  required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="salario" class="form-label">Fecha de finalización</label>
                                                    <input type="date" name="fechaFinalizacion" id="fechaFinalizacion" class="form-control"  required>
                                                </div>
                                                <?php endif; ?>
                                                <div class="mb-3">
                                                    <label for="ContraseñaDelUsuario" class="form-label">Contraseña</label>
                                                    <input type="password" name="contraseñaUsuario" class="form-control" id="contraseñaUsuario" required>
                                                </div>
                                            <? echo form_close(); ?>   
                                        </div>
                                            <button type="submit" class="btn btn-primary">Terminar registro</button>
                                            
                                            <?php if ($this->session->userdata('logueado')): ?>
                                            <div class="mb-3">
                                                <a href="<?php echo base_url('Welcome/dashboard'); ?>" class="btn btn-secondary">Volver</a>
                                            </div>
                                                
                                            <?php else: ?>
                                            <a href="<?php echo base_url('Welcome'); ?>" class="btn btn-secondary">Volver</a>
                                            <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                        
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                            <div class="h5 mb-2">Entrena con nosotros</div>
                            <p class="text-muted mb-0">Habla en vivo con uno de nuestros entrenadores y recibe asesoría personalizada sobre rutinas, alimentación y planes de entrenamiento.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5">Centro de Ayuda</div>
                            <p class="text-muted mb-0">Encuentra respuestas rápidas a preguntas frecuentes sobre horarios, membresías y servicios de entrenamiento.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5">Centro de Ayuda</div>
                            <p class="text-muted mb-0">Encuentra respuestas rápidas a preguntas frecuentes sobre horarios, membresías y servicios de entrenamiento.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5">Llámanos</div>
                            <p class="text-muted mb-0">Contáctanos en horario laboral al <strong>(+57) 324-253-7329</strong> y agenda tu clase, resuelve dudas o solicita información sobre planes.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
    </body>
</html>
