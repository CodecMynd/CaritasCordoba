<!doctype html>
<html lang="es">

<head>
    <!-- meta, link, CSS, plugins, querys -->
    <?php
    include '../components/querys.php';
    include '../components/head.php';
    ?>
    <!-- Titulo de la pagina -->
    <title>Servicio: Consultas psicológicas | Cáritas Córdoba A.C.</title>
</head>

<body>
    <?php
    /* preloader, particles & header */
    include '../components/header.php';
    ?>
    <!-- banner -->
    <section class="page-title overlay" style="background-image: url(../../src/img/banner/banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Consultas psicológicas</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../../index.php"><i class="fas fa-arrow-left"></i> Inicio</a>
                        </li>
                        <li>Consultas psicológicas</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- seccion escucha de casos: descripcion -->
    <section class="overlay" data-aos="fade-left" data-aos-duration="3000">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0 pl-0">
                    <div class="p-sm-5 pl-5 py-5 div-info-video">Consultas psicológicas.</h3>
                        <div>
                            <ul class="pl-3 d-inline-block float-sm-left mr-sm-5">
                                <li class="font-secondary mb-10 text-white text-justify">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Realizado por profesionistas capacitados que desean donar un poco de su tiempo y de su experiencia al más pobre y necesitado, este servicio es para personas que están viviendo una situación mental o emocional difícil que les causa problemas y que, para manejarlos de manera adecuada, necesitan apoyo terapéutico, pero no pueden costear un tratamiento particular.
                                </li>
                                <li class="font-secondary mb-10 text-white text-justify">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    Debido a la pandemia se ha incrementado la solicitud de asesoría psicológica, en esta área necesitamos psicólogos voluntarios que nos regalen algunas horas de su tiempo para acompañar proceso de muchas personas que lo solicitan. 
                                </li>
                            </ul>
                        </div>
                        <div class="btn-position-bottom-div pl-3">
                            <a href="donar.php" class="btn btn-primary parpadea" data-aos="zoom-in" data-aos-duration="1500"><i class="fas fa-heart"></i> Donaciones</a>
                            <a href="contacto.php" class="btn btn-primary" data-aos="zoom-in" data-aos-duration="1500"><i class="fas fa-at"></i> Contáctanos</a>
                        </div>
                        <div style="float:right;">
                           <a href="consultasMedicas.php" class="prevArrowS" title="Anterior: Consultas médicas"><i class="fas fa-angle-left fa-2x"></i></a>
                           <a href="despensaAncianos.php" class="nextArrowS" title="Siguiente: Despensas a adultos mayores"><i class="fas fa-angle-right fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mx-0 align-self-center img-back-div" style="background-image: url(../../src/img/servicios/consultaPsicologica/1-consultaPsicologica.jfif);">
                    <div class="about-video">
                        <!-- about-video -->
                        <a class="popup-youtube play-icon centralized" href="https://www.youtube.com/watch?v=6ZfuNTqbHE8">
                            <i class="ti-control-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /seccion escucha de casos: descripcion -->

    <!-- galeria imagenes -->
    <section class="section text-center"> 
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-right" data-aos-duration="2000">
                    <h2 class="section-title section-title-border-gray">Galeria</h2>
                </div>
                <div class="col-12" data-aos="fade-laft" data-aos-duration="2000">
                    <div class="project-menu text-center">
                        <ul class="controls list-inline">
                            <!-- filter item list -->
                            <li class="list-inline-item control active" data-filter="all">All</li>
                            <li class="list-inline-item control" data-filter="enero">Enero</li>
                            <li class="list-inline-item control" data-filter="febrero">Febrero</li>
                            <li class="list-inline-item control" data-filter="marzo">Marzo</li>
                            <li class="list-inline-item control" data-filter="abril">Abril</li>
                            <li class="list-inline-item control" data-filter="mayo">Mayo</li>
                            <li class="list-inline-item control" data-filter="enero">Junio</li>
                            <li class="list-inline-item control" data-filter="febrero">Julio</li>
                            <li class="list-inline-item control" data-filter="marzo">Agosto</li>
                            <li class="list-inline-item control" data-filter="abril">Septiembre</li>
                            <li class="list-inline-item control" data-filter="mayo">Octubre</li>
                            <li class="list-inline-item control" data-filter="abril">Noviembre</li>
                            <li class="list-inline-item control" data-filter="diciembre">Diciembre</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="3000">
                <div class="row filtr-container">
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="febrero">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-1.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="enero, diciembre">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-2.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="junio">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-3.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="enero">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-4.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="marzo">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-5.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="enero, febrero">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-6.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="marzo">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-7.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="abril, junio">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-8.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="febrero marzo">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-9.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="abril, febrero">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-1.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="noviembre">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-5.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="febrero, marzo">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="../../src/img/servicios/escuchaCasos/evidencias/project-2.jpg" alt="project-image">
                            <div class="project-info">
                                <a href="project-single.html" class="h4">Finance Consultancy</a>
                                <p>
                                    <i class="ti-tag"></i>Ecommerce Advice
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /galeria imagenes -->


    <!-- components -->
    <?php
    /* seccion btn apoyar */
    include '../components/divDonaciones.php';
    /* slider benefactores */
    // include '../components/benefactores.php';
    /* footer */
    include '../components/footer.php';
    /* social bar */
    include '../components/socialBar.php';
    /* scripts */
    include '../components/scripts.php';
    ?>
</body>

</html>