<!doctype html>
<html lang="es">

<head>
    <!-- meta, link, CSS, plugins, querys -->
    <?php
    include '../components/querys.php';
    include '../components/head.php';
    ?>
    <!-- Titulo de la pagina -->
    <title>Servicio: Escucha de casos | Cáritas Córdoba A.C.</title>
</head>

<body>
    <?php
    /* preloader, particles & header */
    include '../components/header.php';
    ?>
    <!-- banner -->
    <section class="page-title overlay" style="background-image: url(../../src/img/banner/banner-donar.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">!Quiero ayudar¡</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- seccion donaciones -->
    <section class="section" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title section-title-border-gray">Formas de ayudar</h2>
                </div>
                <div class="col-6">
                    <h5 class="section-title-sm">"Hacer el bien al prójimo nos hace bien también a nosotros. Nos colma de bendición y de la gracia de Dios. Por favor ayuda a esta noble causa con cualquier contribución. Tú aporte es valioso."</h5>
                    <h5 class="section-title-sm">Tú aporte es muy importante y valioso.</h5>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-12 pb-50">
                    <div class="border rounded bg-white">
                        <div class="p-4">
                            <h3>TEXTO TITULO DE EJEMPLO</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /seccion donaciones -->


    <!-- components -->
    <?php
    /* seccion btn apoyar */
    // include '../components/divDonaciones.php';
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