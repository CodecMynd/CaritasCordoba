<!doctype html>
<html lang="es">

<head>
    <!-- meta, link, CSS, plugins, querys -->
    <?php
    include '../components/querys.php';
    include '../components/head.php';
    ?>
    <!-- Titulo de la pagina -->
    <title>Contacto | Cáritas Córdoba A.C.</title>
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
                    <h2 class="text-white font-weight-bold">Contacto</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../../index.php"><i class="fas fa-arrow-left"></i> Inicio</a>
                        </li>
                        <li>Contacto</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /banner -->

    <!-- contact -->
      <section class="section" data-aos="fade-out" data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 ml-auto" data-aos="zoom-in" data-aos-duration="1500" >
                    <div class="rounded p-sm-5 px-3 py-5 bg-secondary" style="height: 450px;">
                        <h3 class="section-title section-title-border-half text-white">Contáctanos</h3>
                        <ul class="pl-0">
                            <!-- contact items -->
                            <li class="d-flex mb-30">
                                <i class="round-icon mr-3 ti-mobile"></i>
                                <div class="align-self-center font-primary">
                                    <a class="text-white" href="callto:2717178279 "> 271 717 8279</a><br>
                                    <a class="text-white" href="callto:2282882976 "> 228 288 2976</a>
                                </div>
                            </li>
                            <li class="d-flex mb-30 text-white">
                                <i class="round-icon mr-3 ti-email"></i>
                                <div class="align-self-center font-primary">
                                    <a class="text-white" href="mailto:benefactordecaritasobis@yahoo.com.mx  "> benefactordecaritasobis@yahoo.com.mx </a><br>
                                    <a class="text-white" href="mailto:caritas20cordoba@gmail.com ">caritas20cordoba@gmail.com</a>
                                </div>
                            </li>
                            <li class="d-flex mb-30 text-white">
                                <i class="round-icon mr-3 ti-map-alt"></i>
                                <div class="align-self-center font-primary">
                                <a class="text-white" href=""> Calle 1, núm. 407 entre av. 4 y 6. Col. Centro C.P. 94500, Córdoba, Ver</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 ml-auto" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="rounded p-sm-5 px-3 py-5 bg-secondary" style="height: 450px;">
                        <h3 class="section-title section-title-border-half text-white">Formulario de contacto</h3>
                        <form action="#" class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Ingresa tu nombre" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control p-2" name="message" id="message" placeholder="Ingresa tu mensaje aqui..." required style="height: 100px;"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" value="send">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mapa" data-aos="fade-right" data-aos-duration="1500">
        <div class="container-fluid">
            <div class="map-responsive">
                <!-- Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15099.214025386274!2d-96.9424579!3d18.8957963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d2612515a024f9f!2sCaritas%20de%20C%C3%B3rdoba!5e0!3m2!1ses-419!2smx!4v1643964772773!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

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