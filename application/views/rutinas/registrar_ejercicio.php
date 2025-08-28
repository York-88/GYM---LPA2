<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registrar Ejercicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="py-5">
        <div class="container px-5">
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Registrar Ejercicio</h1>
                    <p class="lead fw-normal text-muted mb-0">Agrega un nuevo ejercicio al sistema.</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="container">
                            <?php echo form_open('Registrar/registrarEjercicio'); ?>
                                <div class="mb-3">
                                    <label for="nombre_ejercicio" class="form-label">Nombre del ejercicio:</label>
                                    <input type="text" name="nombre_ejercicio" id="nombre_ejercicio" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="objetivo" class="form-label">Objetivo:</label>
                                    <textarea name="objetivo" id="objetivo" class="form-control" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Registrar ejercicio</button>
                                <a href="<?php echo base_url('welcome/dashboard'); ?>" class="btn btn-secondary">Volver</a>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>