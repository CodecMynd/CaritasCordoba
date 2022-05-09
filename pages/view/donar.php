<?php
require '../../config/functions.php';
conectar();

// query Imagen banner quiero ayudar
$query1 = "SELECT * FROM recursos WHERE modulo = 'quieroAyudar' LIMIT 1";
$resultadoQayudar = mysqli_query($conexion, $query1);
?>
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
    <?php while ($rowQa = $resultadoQayudar->fetch_assoc()) { ?>
        <section class="page-title overlay" style="background-image: url(../../src/img/imgModuloQayudar/<?php echo $rowQa['file'] ?>">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">!Quiero ayudar¡</h2>
                </div>
            </div>
        </div>
        </section>

        <!-- seccion donaciones -->
        <section class="section" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" id="donar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="section-title section-title-border-gray">Formas de ayudar</h2>
                    </div>
                    <div class="col-8">
                        <h5 class="section-title-sm">"Hacer el bien al prójimo nos hace bien también a nosotros. Nos colma de bendición y de la gracia de Dios. Por favor ayuda a esta noble causa con cualquier contribución. Tú aporte es valioso."</h5>
                        <h5 class="section-title-sm">Tú aporte es muy importante y valioso.</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- donar -->
        <section class="container mb-5">
            <div class="card-deck">
                <div class="card cardDonar">
                    <img class="img-fluid" src="../../src/img/donar/banco.png" alt="Nuestro banco">
                    <div class="card-body">
                        <h3 class="card-title">Puedes depósitar en</h3>
                        <ul class="d-inline-block pl-0 mr-1">
                            <li class="font-secondary mb-10 text-dark">
                                <i class="text-secondary mr-2 ti-arrow-circle-right"></i><strong>Banco: </strong> BBVA
                            </li>
                            <li class="font-secondary mb-10 text-dark">
                                <i class="text-secondary mr-2 ti-arrow-circle-right"></i><strong>N. de Cuenta: </strong> xxxx xxxx xxxx xxxx
                            </li>
                            <li class="font-secondary mb-10 text-dark">
                                <i class="text-secondary mr-2 ti-arrow-circle-right"></i><strong>CLABE: </strong> XXXX XXXX XXXX XXXX XXXX
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <h6 class="card-text text-justify">Nosotros, en Caritas de Córdoba no podemos expresar en palabras el agradecimiento que sentimos hacia todas esas personas que aportan un granito de arena a esta muy noble causa.</h6>
                    </div>
                </div>
                <div class="card cardDonar">
                    <img src="../../src/img/donar/Inbursa.png" class="card-img-top" alt="Nuestro banco">
                    <div class="card-body">
                        <h3 class="card-title">Compartir es dar Amor</h3>
                        <ul class="d-inline-block pl-0 mr-1">
                            <li class="font-secondary mb-10 text-dark">
                                <i class="text-secondary mr-2 ti-arrow-circle-right"></i><strong>Banco: </strong> IMBURSA
                            </li>
                            <li class="font-secondary mb-10 text-dark">
                                <i class="text-secondary mr-2 ti-arrow-circle-right"></i><strong>N. de Cuenta: </strong> 50039157678
                            </li>
                            <li class="font-secondary mb-10 text-dark">
                                <i class="text-secondary mr-2 ti-arrow-circle-right"></i><strong>CLABE: </strong> 036855500391576784
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <h6 class="card-text text-justify">Nosotros, en Caritas de Córdoba no podemos expresar en palabras el agradecimiento que sentimos hacia todas esas personas que aportan un granito de arena a esta muy noble causa.</h6>
                    </div>
                </div>
            </div>
        </section>

        <!-- Voluntarios -->
        <section class="section bg-gray" id="voluntarios">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="section-title section-title-border">¿Quieres dar algo?</h2>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="about-content">
                            <h3 class="section-title section-title-border-half">Voluntarios</h3>
                            <p class="text-dark">Hay héroes y heroínas, aunque sin capa ni antifaz, que están siempre ahí para ayudar a quien lo necesite y están haciendo del mundo un lugar mejor. ¿Sabes de quién hablamos? Sí, se trata de los voluntarios y voluntarias de Cáritas de Córdoba.
                            </p>
                            <p class="text-dark">
                                Estas personas parecen provenir de otro planeta, pues ofrecen desinteresadamente su tiempo a los demás y saben que es más satisfactorio dar que recibir. ¿Qué tienen en común?.
                            </p>
                            <ul class="pl-0 d-inline-block float-sm-left mr-sm-5">
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Compromiso con una causa:</strong>
                                </li>
                                <p class=text-dark>Su motivación principal es colaborar en un proyecto solidario. Con su voluntariado no persiguen en realidad otro objetivo encubierto</p>

                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Altruismo</strong>
                                </li>
                                <p class="text-dark">
                                    Son personas generosas, humanitarias y desprendidas. Su estímulo es simplemente ayudar y, por ello, no dudan en tender su mano y participar en iniciativas solidarias.
                                </p>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>No esperan una contraprestación económica o material</strong>
                                </li>
                                <p class="text-dark">
                                    Los voluntarios y voluntarias realizan la labor que les han encomendado sin esperar una retribución de ningún tipo por llevarla a cabo.
                                </p>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Ser mayor de edad</strong>
                                </li>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Sentir el deseo de ayudar por que te nace del corazón, sin esperar nada a cambio.</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="about-content">
                            <h3 class="section-title section-title-border-half">Donativos en especie</h3>
                            <p class="text-dark">Las necesidades en Cáritas de Córdoba son muchas, y tú puedes hacer posible que algunas de esas necesidades se vayan cubriendo con donativos en especie ya que se aprovechan, ya sea, utilizándolos directamente o enviándolos a bazar para poder hacernos de recursos y cubrir dichas necesidades.
                            </p>
                            <p class="text-dark">
                                Con tus donativos en especie cubrimos las necesidades elementales de nuestros beneficiados dándoles una vida más digna.
                            </p>
                            <ul class="pl-0 d-inline-block float-sm-left mr-sm-5">
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Artículos de higiene personal Como son:</strong> detergentes, jabón, pasta dental, cremas, desodorante, cepillos dentales, etc.
                                </li>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Pañales de adulto tipo calzón.</strong>
                                </li>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Medicinas.</strong> No caducadas y en sus empaques.
                                </li>

                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Ropa.</strong> Prendas como son pantalones, vestidos, abrigos, camisas, todo limpio y en buen estado.
                                </li>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>Línea blanca.</strong> Estufa, refrigerador, horno de microondas, etc. estás herramientas son para el comedor
                                </li>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>
                                        Cuando necesitan efectivo</strong>, para pagar medicinas, gastos de hospitalización o funerarios, renta y otros de primera necesidad.
                                </li>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>En caso de tener en la familia un enfermo crónico o en fase terminal cuya atención les impide tener un empleo formal y necesitan tener ingresos pues las medicinas y los alimentos son caros.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row justify-content-center">
                            <ul class="pl-0 d-inline-block float-sm-left mr-sm-5">
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>DONACIÓN EN ESPECIE: OFICINAS DE CÁRITAS DIOCESANA, UBICADA EN CALLE 1 ENTRE AVS 4 Y 6 CENTRO.</strong>
                                </li>
                                <li class="font-secondary text-color mb-10">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i><strong>TEL 271 717 82 79</strong>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <a href="contacto.php" class="btn btn-primary" data-aos="zoom-in" data-aos-duration="1500"><i class="fas fa-at"></i> Contáctanos</a>
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