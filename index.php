<?php
require 'config/functions.php';
conectar();

// query Imagen Carrusel Principal carrusel1
$query1 = "SELECT * FROM recursos WHERE modulo = 'carrusel1' LIMIT 4";
$resultadoCarrusel1 = mysqli_query($conexion, $query1);

// query Imagen Carrusel Principal carrusel2
$query2 = "SELECT file FROM recursos WHERE modulo = 'carrusel2' LIMIT 4";
$resultadoCarrusel2 = mysqli_query($conexion, $query2);

// query Imagen Carrusel Principal carrusel3
$query3 = "SELECT descripcion FROM recursos WHERE modulo = 'carrusel3' LIMIT 10";
$resultadoCarrusel3 = mysqli_query($conexion, $query3);

// query Imagen Carrusel Principal carrusel3
$query4 = "SELECT file FROM recursos WHERE modulo = 'carrusel4' LIMIT 20";
$resultadoCarrusel4 = mysqli_query($conexion, $query4);

?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Christian Ricardo Jimenes Rosas">
    <meta name="copyright" content="Caritas Cordoba A.C.">
    <meta name="robots" content="index">

    <!-- Titulo de la pagina -->
    <title>Cáritas Córdoba A.C.</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="src/img/logo/faviconlogoCaritas.ico" type="image/x-icon">
    <link rel="icon" href="src/img/logo/faviconlogoCaritas.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- themify icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- Fantawesome icon -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- icoMoon -->
    <link rel="stylesheet" href="plugins/icoMoon/font.css">
    <!-- animate -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- Aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- swiper -->
    <link rel="stylesheet" href="plugins/swiper/swiper.min.css">
    <!-- Style css -->
    <link rel="stylesheet" href="src/css/style.css">
    <!-- CSS particles -->
    <link rel="stylesheet" href="plugins/particles/style.css">

</head>

<body>
    <!-- Preloader start -->
    <!-- <div class="preloader">
        <img src="src/img/preloader/preloader.gif" alt="">
    </div> -->
    <div id="particles-js"></div>

    <header>
        <div class="top-header fixed-top ">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <!-- back to top -->
                        <button class="back-to-top parpadea" title="Subir">
                            <i class="ti-angle-up"></i>
                        </button>
                    </div>
                    <div class="col-8">
                    </div>
                    <div class="col-2">
                        <a href="pages/view/donar.php" class="btn btn-primary mb-md-50 mt-40 parpadea" data-aos="zoom-in" data-aos-duration="1500"><i class="fas fa-heart"></i> Donaciones</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav bar -->
        <div class="navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="src/img/logo/logoCaritasNavbar.png" alt="logo Caritas Cordoba A.C.">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nosotros
                                </a>
                                <div class="dropdown-menu">
                                    <ul style="columns: 2;">
                                        <li><a class="dropdown-item" href="pages/view/nosotros.php#historia">Historia</a></li>
                                        <li><a class="dropdown-item" href="pages/view/nosotros.php#identidad">Identidad</a></li>
                                        <li><a class="dropdown-item" href="pages/view/nosotros.php#identidad">Objetivos</a></li>
                                        <li><a class="dropdown-item" href="pages/view/nosotros.php#filosOrganiza">Misión</a></li>
                                        <li><a class="dropdown-item" href="pages/view/nosotros.php#filosOrganiza">Visión</a></li>
                                        <li><a class="dropdown-item" href="pages/view/nosotros.php#filosOrganiza">Valores</a></li>
                                        <li><a class="dropdown-item" href="pages/view/nosotros.php#directorio">Directorio</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Servicios
                                </a>
                                <div class="dropdown-menu">
                                    <ul style="columns:2;">
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios1">Escucha de casos</a< /li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios1">Luchamos contra el Cáncer</< /li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios1">Farmacia</a></li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios2">Consultas médicas</a></li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios2">Consultas psicológicas</a></li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios2">Despensas a ancianos</a< /li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios3">Despensas a familias</a< /li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios3">Bazar de ropa</a< /li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios3">Emergencias</a></li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios4">Comedor</a></li>
                                        <li><a class="dropdown-item" href="pages/view/servicios.php#seccionServicios4">Servicios varios</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Quiero ayudar
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="pages/view/donar.php#donar">Donar</a>
                                    <a class="dropdown-item" href="pages/view/donar.php#voluntarios">Voluntarios</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="pages/view/reportes.php">
                                    Reportes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/view/contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header><!-- /navigation -->
    <section>
        <!-- carousell -->

        <div class="hero-slider position-relative">
            <!-- query mostrar imagenes carrusel principal -->
            <?php while ($rowC1 = $resultadoCarrusel1->fetch_assoc()) { ?>
                <div class="hero-slider-item py-160" style="background-image: url(src/img/imgModuloInicio/<?php echo $rowC1['file'] ?>);" data-icon="fas fa-info-circle" data-text="<?php echo $rowC1['titulo'] ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="hero-content">
                                    <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1"><?php echo $rowC1['subtitulo'] ?></h4>
                                    <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5"><?php echo $rowC1['titulo'] ?></h1>
                                    <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9"><?php echo $rowC1['descripcion'] ?>
                                    </p>
                                    <!-- <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="#" class="btn btn-outline text-uppercase">Mas detalles</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- /carousell -->

    <!-- reseña -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h4 class="section-title-md" data-aos="fade-right" data-aos-duration="1500">Breve reseña</h4>
                        <h3 class="section-title section-title-border-half" data-aos="fade-left" data-aos-duration="1500"> Cáritas de Córdoba</h3>
                        <div class="about-item">
                            <ul class="pl-0 d-inline-block float-sm-left mr-sm-5">
                                <li class="font-secondary text-color text-justify mb-10 lead" data-aos="fade-down" data-aos-duration="1000">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>
                                    La obra de Cáritas de Córdoba fue iniciada por el Pbro. Francisco Javier Rodríguez Sainz, junto con algunos sacerdotes y laicos. Una vez constituida legalmente como A.C. el 14 de enero de 1998 queda como presidente de la institución el Pbro. Eliseo Martínez Andrade y como vicepresidente al Pbro. Hugo Rayón Escobar...
                                </li>
                            </ul>
                        </div>
                        <a href="pages/view/nosotros.php#historia" class="btn btn-primary mb-md-50 mt-4" data-aos="zoom-in" data-aos-duration="1500"><i class="fab fa-readme"></i> Leer más...</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-slider" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                        <!-- query mostrar imagenes carrusel secundario -->
                        <?php while ($rowC2 = $resultadoCarrusel2->fetch_assoc()) { ?>
                            <img class="img-fluid" src="src/img/imgModuloInicio/<?php echo $rowC2['file'] ?>" alt="about-image">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoniales -->
    <section class="section bg-gray" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title section-title-border-gray">Video testimoniales</h2>
                </div>
            </div>
            <div class="row work-slider">
                <!-- query mostrar imagenes carrusel videos testimoniales -->
                <?php while ($rowC3 = $resultadoCarrusel3->fetch_assoc()) { ?>
                    <div class="col-lg-3 px-0">
                        <div class="work-slider-image">
                            <div class="youtube-player" data-id="<?php echo $rowC3['descripcion'] ?>"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Donaciones section -->
    <section class="about section-sm overlay" style="background-image: url(src/img/inicio/donaciones/donaciones.jpg);" data-aos="fade-out" data-aos-duration="1500">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 ml-auto" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                        <h3 class="section-title section-title-border-half text-white">Necesitamos de tu apoyo</h3>
                        <p class="text-white mb-40">Formas de ayuda:</p>
                        <ul class="d-inline-block pl-0 mr-5">
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Donar en línea
                            </li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Depósito bancario
                            </li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Voluntarios
                            </li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Donativo en especie
                            </li>
                        </ul>
                        <blockquote class="blockquote">
                            <p class="text-white mb-40">
                                "La gente exitosa está siempre buscando oportunidades para ayudar a otros. La gente poco exitosa, están siempre preguntando. ¿Qué hay para mí?"
                                <br>
                                <small><em>Brian Tracy.</em></small>
                            </p>
                        </blockquote>
                        <a href="pages/view/donar.php" class="btn btn-primary parpadea" data-aos="zoom-in" data-aos-duration="1500"><i class="fas fa-heart"></i> Donaciones</a>
                        <a href="pages/view/contacto.php" class="btn btn-primary" data-aos="zoom-in" data-aos-duration="1500"><i class="fas fa-at"></i> Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Donaciones section -->

    <!-- benefactores empresas logo slider -->
    <section class=" py-4">
        <div class="container">
            <div class="col-12 text-center">
                <h4 class="section-title section-title-border-gray">Nuestros benefactores</h4>
            </div>
            <!-- query mostrar imagenes carrusel Benefactores -->
            <div class="client-logo-slider align-self-center">
                <?php while ($rowC4 = $resultadoCarrusel4->fetch_assoc()) { ?>
                    <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="src/img/imgModuloInicio/<?php echo $rowC4['file'] ?>" alt="Benefactor-logo"></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset" src="src/img/imgModuloInicio/benefactor-logo-2-white.png" alt="Benefactor-logo"></a>

    <!-- /benefactores empresas logo slider -->

    <!-- footer -->
    <footer class="bg-secondary" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="py-50 border-bottom" style="border-color: #454547 !important">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-5 mb-md-0 text-center text-md-center">
                            <!-- logo -->
                            <img class="mb-30 text-center" src="src/img/logo/logoCaritasBlanco.png" width="50%" alt="logo">
                            <p class="text-white text-justify mb-30">Somos un organismo de la Iglesia Católica en la diócesis de Córdoba que anima, coordina y contribuye a la construcción de la cultura de la vida sin distinción de credo.</p>
                        </div>
                    </div>
                    <!-- footer links -->
                    <div class="col-md-4">
                        <h4 class="text-white mb-4">Servicios</h4>
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <ul class="footer-links">
                                    <li>
                                        <a href="pages/view/escuchaCasos.php">Escucha de casos</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/contraCancer.php">Luchamos contra el cáncer</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/farmacia.php">Farmacia</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/consultasMedicas.php">Consultas médicas</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/consultasPsicologicas.php">Consultas psicológicas</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- footer links -->
                            <div class="col-md-6 col-6">
                                <ul class="footer-links">
                                    <li>
                                        <a href="pages/view/despensaAncianos.php">Despensa a ancianos</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/despensaFamilias.php">Despensa a familias</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/bazarRopa.php">Bazar de ropa</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/emergencias.php">Emergencias</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/comedor.php">Comedor</a>
                                    </li>
                                    <li>
                                        <a href="pages/view/serviciosVarios.php">Servicios varios</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- contactos -->
                    <div class="col-md-4">
                        <h4 class="text-white mb-4">Contactos</h4>
                        <div class="col-md-8">
                            <ul class="footer-links">
                                <li>
                                    <a href="callto:2282882976">Celular: 228 288 2976</a>
                                </li>
                                <li>
                                    <a href="callto:2717178279"> Oficina: 271 717 8279</a>
                                </li>
                                <li>
                                    <a href="mailto:benefactordecaritasobis@yahoo.com.mx">benefactordecaritasobis@yahoo.com.mx</a>
                                </li>
                                <li>
                                    <a href="mailto:caritas20cordoba@gmail.com">caritas20cordoba@gmail.com</a>
                                </li>
                                <li>
                                    <a href="">Calle 1, núm. 407 entre av. 4 y 6. Col. Centro C.P. 94500, Córdoba, Ver</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="pages/view/donar.php" class="btn btn-primary mb-md-50 mt-40 parpadea" data-aos="zoom-in" data-aos-duration="1500"><i class="fas fa-heart"></i> Donaciones</a>
                    </div><i class="fas fa-at"></i>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="pt-4 pb-3 position-relative">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 d-flex flex-row-reverse">
                            <p class="text-white text-center text-md-left">
                                <span class="text-primary">Cáritas de Córdoba</span> &copy; 2022 Derechos reservados
                            </p>
                        </div>
                        <div class="col-md-5 col-sm-12 d-flex flex-row-reverse">
                            <ul class="list-inline text-right text-md-right">
                                <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                                    <a class="font-secondary text-white" href="#">Políticas de privacidad</a>
                                </li>
                                <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
                                    <a class="font-secondary text-white" href="#">Términos &amp; Condiciones</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-1 text-md-center">
                            <a class="text-white" href="pages/view/login.php"><i class="text-white fas fa-user-cog"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- Barralateral redes sociales -->
    <div class="social-bar">
        <a href="https://www.facebook.com/DevCode.la" class="iconMoon icon-facebook" target="_blank"></a>
        <a href="https://twitter.com/DevCodela" class="iconMoon icon-twitter" target="_blank"></a>
        <a href="https://www.youtube.com/c/devcodela" class="iconMoon icon-youtube" target="_blank"></a>
        <a href="https://www.instagram.com/devcodela/" class="iconMoon icon-instagram" target="_blank"></a>
    </div>
    <!-- /Barralateral redes sociales -->

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "2282882976", // WhatsApp number
                email: "caritas20cordoba@gmail.com", // Email
                call_to_action: "Envíanos un mensaje", // Call to action
                button_color: "#FD2015", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,email", // Order of buttons
                pre_filled_message: "Hola somos Cáritas Córdoba en que podemos servirte?", // WhatsApp pre-filled message
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
    <!-- slick slider caruseles -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter fotos-->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Syo Timer temporizador -->
    <script src="plugins/syotimer/jquery.syotimer.js"></script>
    <!-- aos efectos scroll en div se recorre de un lado a otro-->
    <script src="plugins/aos/aos.js"></script>
    <!-- swiper efecto transiciones de imagenes-->
    <script src="plugins/swiper/swiper.min.js"></script>
    <!-- Main Script -->
    <script src="src/js/script.js"></script>
    <!-- js particles -->
    <script src="plugins/particles/particles.js"></script>
    <script src="plugins/particles/app.js"></script>
    <!-- scrollTop al cargar pagina posicion top(0)-->
    <!-- <script>
        $(window).on('beforeunload', function() {
            $(window).scrollTop(0);
        });
    </script> -->

</body>

</html>