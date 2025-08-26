<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <title>GYMFITNESS</title>
</head>
<body>
    <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php echo base_url('welcome/dashboard')?>">GymFitness</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Modificar/editar/'.$this->session->userdata('id')); ?>">Mi perfil</a>
                            
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="<?php echo base_url('Autenticar/logout'); ?>" onclick="return confirm('¿Estás seguro de que deseas cerrar sesión?');" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cerrar Sesion</a>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </main>
</body>
