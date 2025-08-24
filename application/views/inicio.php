<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login - GymFitness</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('asessts/css/styles.css') ?>" rel="stylesheet" />
</head>
<body class="d-flex flex-column bg-light">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="<?php echo base_url('welcome')?>">GymFitness</a>
            </div>
        </nav>

        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card shadow-lg border-0 rounded-3">
                            <div class="card-body p-5">
                                <div class="text-center mb-4">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <?php if ($id_rol == 2): ?>
                                        <h2>Inicio de Sesion</h2>
                                        <p>Iniciar sesion como entrenador</p>
                                    <?php elseif ($id_rol == 3): ?>
                                        <h2>Inicio de Sesion</h2>
                                        <p>Iniciar sesion como cliente</p>
                                    <?php else: ?>
                                        <h2>Inicio de Sesion</h2>
                                        <p>Iniciar sesion como empleado</p>
                                    <?php endif; ?>
                                </div>
                                    <?php if (isset($error)): ?>
                                        <div class="alert alert-danger text-center">
                                            <?php echo $error; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo form_open('autenticar/autenticarUsuario');?>
                                        <input type="hidden" name="id_rol" value="<?php echo isset($id_rol) ? $id_rol : ''; ?>">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="Documento" name="Documento" type="text" placeholder="Usuario" required />
                                            <label for="Documento">Usuario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="Contraseña" name="Contraseña" type="password" placeholder="Contraseña" required />
                                            <label for="Contraseña">Contraseña</label>
                                        <div class="d-grid mb-3 mt-3">
                                            <button class="btn btn-primary btn-lg" type="submit">Ingresar</button>
                                        </div>
                                        <div class="d-grid mb-3">
                                            <a href="<?php echo base_url('welcome/index'); ?>" class="btn btn-secondary btn-lg">Regresar</a>
                                        </div>
                                        <div class="text-center">
                                            <a href="#">¿Olvidaste tu contraseña?</a>
                                        </div>
                                        <?php if ($id_rol==3): ?>
                                        <div class="text-center">
                                            <a href="<?php echo base_url('Registrar/registrarUsuario/'.$id_rol); ?>">Crear una cuenta</a>
                                        </div>
                                        <?php endif; ?>
                                    <?php echo form_close(); ?>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5 text-center text-white small">
            &copy; GymFitness 2023 - Todos los derechos reservados
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
