<!doctype html>
<html lang="es">

<head>
    <!-- meta, link, CSS, plugins, querys -->
    <?php
    include '../components/querys.php';
    include '../components/head.php';
    ?>
    <!-- Titulo de la pagina -->
    <title>Servicios | Cáritas Córdoba A.C.</title>
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
                    <h2 class="text-white font-weight-bold">Servicios</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../../index.php"><i class="fas fa-arrow-left"></i> Inicio</a>
                        </li>
                        <li>Servicios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- seccion servicios -->
    <section class="section" id="seccionServicios1">
        <div class="container">
            <div class="row justify-content-center">
                <!-- service Escucha de casos -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="escuchaCasos">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Escucha de casos
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/escuchaCasos/1-escuchaCasos.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">A partir de la escucha atenta, se detectan las necesidades de las personas y se puede idear y proponer un plan de atención...</p>
                        </div>
                        <div class="card-footer">
                            <a href="escuchaCasos.php" id="generales" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- service Luchamos contra el Cáncer -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="luchaCancer">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Luchamos contra el Cáncer
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/luchaCancer/1-luchaCancer.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Estancia para personas que están en tratamiento de Cáncer...</p>
                        </div>
                        <div class="card-footer">
                            <a href="contraCancer.php" class="btn btn-primary"><i class="fab fa-readme"></i>  Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- service Farmacia -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="farmacia">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Farmacia
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/farmacia/1-farmacia.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Es el servicio que Cáritas brinda a los hermanos que necesitan medicinas después de haber recibido atención médica...
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="farmacia.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="seccionServicios2">
            <div class="row justify-content-center">
                <!-- service Consultas médicas -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="consultasMedicas">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Consultas médicas
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/consultasMedicas/1-consultasMedicas.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Este es uno de los servicios con mayor demanda, de los más amplios y la más necesitada de apoyo. Esto es posible gracias a doctores generosos...
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="consultasMedicas.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- service Consultas psicológicas -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="consultasPsicologicas">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Consultas psicológicas
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/consultapsicologica/1-consultaPsicologica.jfif" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Realizado por profesionistas capacitados que desean donar un poco de su tiempo y de su experiencia...
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="consultasPsicologicas.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- service Despensas a adultos mayores -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="despensasAdultosMayores">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Despensas a adultos mayores
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/despensaAncianos/1-despensaAncianos.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                El apoyo se da una vez a personas de la tercera edad en extrema pobreza, se lleva un registro, antes se le hace una entrevista para conocer su situación
                            <p>
                        </div>
                        <div class="card-footer">
                            <a href="despensaAncianos.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="seccionServicios3">
            <div class="row justify-content-center">
                <!-- service Despensa a familias -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="despensaFamilias">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Despensa a familias
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/despensaFamilias/1-despensaFamilias.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                La ayuda se les da a madres solteras, viudas o sin empleo, también se les hace la entrevista...
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="despensaFamilias.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- service Bazar de ropa -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="bazarRopa">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Bazar de ropa
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/bazarRopa/1-bazarRopa.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Es el de compartir diversos artículos recibidos en donación como ropa, zapatos, línea blanca, utensilios de cocina
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="bazarRopa.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- service Emergencias -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="emergencias">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Emergencias
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/emergencias/1-emergencias.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Ante la fuerza de la naturaleza, el ser humano descubre su pequeñez y hasta su impotencia...
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="emergencias.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="seccionServicios4">
            <div class="row justify-content-center">
                <!-- service Comedor de pobres -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="comedorPobres">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Comedor de pobres
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios//comedorPobres/1-comedorPobres.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Este servicio que dará Cáritas, será de mucha ayuda a personas que andan en la calle, hemos notado que, en las nuevas instalaciones...
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="comedor.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- service Servicios varios -->
                <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="serviciosVarios">
                    <div class="card text-center" id="card-services">
                        <div class="card-header">
                            Servicios varios
                        </div>
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="../../src/img/servicios/serviciosVarios/1-serviciosVarios.png" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <p class="card-text mx-2 mb-0 text-justify">
                                Apoyos económicos y en especie. Préstamo o donación de sillas de ruedas, bastones, andaderas y otros aparatos ortopédicos...
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="serviciosVarios.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /seccion servicios -->

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