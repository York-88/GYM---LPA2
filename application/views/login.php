<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    </head>
        <?php if($this->session->flashdata('mensaje')): ?>
            <script>
                alert("<?= $this->session->flashdata('mensaje'); ?>");
            </script>
        <?php endif; ?>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Transforma tu cuerpo, supera tus límites.</h1>
                                <p class="lead fw-normal text-white-50 mb-4">"Entrena con disciplina y constancia, porque el esfuerzo de hoy será la fuerza y la confianza de mañana."</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Leer más</a>      
                                    <a class="btn btn-outline-light btn-lg px-4" href="<?php echo base_url('Registrar/registrarUsuario/3');?>">Inscribrise ya!!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?php echo base_url('asessts/img/vector.jpg');?>" alt="GymFitnes" /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">En GymFitness no solo entrenas, transformas tu vida.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Entrenadores especializados</h2>
                                    <p class="mb-0">Contamos con profesionales que te guían paso a paso para alcanzar tus objetivos.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Rutinas personalizadas</h2>
                                    <p class="mb-0">Diseñamos entrenamientos adaptados a tu nivel y metas, para que logres resultados efectivos.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Ambiente motivador y moderno</h2>
                                    <p class="mb-0">Un espacio con energía positiva y equipos de calidad que te inspiran a dar siempre el 100%.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Resultados visibles y sostenibles</h2>
                                    <p class="mb-0">Nos enfocamos en cambios reales que mejoran tu salud, fuerza y confianza a largo plazo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Cada repetición cuenta, cada gota de sudor te acerca más a tu mejor versión. No pares, tu esfuerzo construye el cambio."</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="<?php echo base_url('asessts/img/victor.jpeg');?>" width="40" height="50" />
                                    <div class="fw-bold">
                                        Victor Gamboa
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        El Hobre Más Musculoso de Urabá
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Nuestros Niveles de Entrenamiento</h2>
                                <p class="lead fw-normal text-muted mb-5"> En el gimnasio entendemos que cada persona tiene un punto de partida diferente. Por eso hemos creado tres niveles de entrenamiento: principiante, intermedio y avanzado. Así podrás progresar de forma segura y efectiva, alcanzando tus metas paso a paso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo base_url('asessts/img/principiante.jpg');?>" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nivel 1</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Principiante</h5></a>
                                    <p class="card-text mb-0">Ideal para quienes inician en el gimnasio. Rutinas básicas para aprender técnica, mejorar resistencia y construir la base de fuerza.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo base_url('asessts/img/medio.webp');?>" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nivel 2</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Intermedio</h5></a>
                                    <p class="card-text mb-0">Para quienes ya dominan los ejercicios básicos. Aquí se busca aumentar masa muscular, fuerza y trabajar con mayor intensidad en cada sesión.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo base_url('asessts/img/avanzado.jpg');?>" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nivel 3</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Avanzado</h5></a>
                                    <p class="card-text mb-0">Pensado para atletas y personas con experiencia. Se enfoca en alto rendimiento, rutinas intensivas, fuerza explosiva y definición muscular.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
