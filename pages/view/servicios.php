<?php
require '../../config/functions.php';
conectar();


// query Imagen Banner Principal 
$query = "SELECT * FROM recursos WHERE modulo = 'bannerServ' LIMIT 1";
$resultado = mysqli_query($conexion, $query);

// query Imagen servicio1
$query1 = "SELECT * FROM recursos WHERE modulo = 'servicio1' LIMIT 1";
$resultado1 = mysqli_query($conexion, $query1);
// query Imagen servicio2
$query2 = "SELECT * FROM recursos WHERE modulo = 'servicio2' LIMIT 1";
$resultado2 = mysqli_query($conexion, $query2);
// query Imagen servicio3
$query3 = "SELECT * FROM recursos WHERE modulo = 'servicio3' LIMIT 1";
$resultado3 = mysqli_query($conexion, $query3);
// query Imagen servicio4
$query4 = "SELECT * FROM recursos WHERE modulo = 'servicio4' LIMIT 1";
$resultado4 = mysqli_query($conexion, $query4);
// query Imagen servicio5
$query5 = "SELECT * FROM recursos WHERE modulo = 'servicio5' LIMIT 1";
$resultado5 = mysqli_query($conexion, $query5);
// query Imagen servicio6
$query6 = "SELECT * FROM recursos WHERE modulo = 'servicio6' LIMIT 1";
$resultado6 = mysqli_query($conexion, $query6);
// query Imagen servicio7
$query7 = "SELECT * FROM recursos WHERE modulo = 'servicio7' LIMIT 1";
$resultado7 = mysqli_query($conexion, $query7);
// query Imagen servicio8
$query8 = "SELECT * FROM recursos WHERE modulo = 'servicio8' LIMIT 1";
$resultado8 = mysqli_query($conexion, $query8);
// query Imagen servicio9
$query9 = "SELECT * FROM recursos WHERE modulo = 'servicio9' LIMIT 1";
$resultado9 = mysqli_query($conexion, $query9);
// query Imagen servicio10
$query10 = "SELECT * FROM recursos WHERE modulo = 'servicio10' LIMIT 1";
$resultado10 = mysqli_query($conexion, $query10);
// query Imagen servicio11
$query11 = "SELECT * FROM recursos WHERE modulo = 'servicio11' LIMIT 1";
$resultado11 = mysqli_query($conexion, $query11);

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
    <title>Servicios | Cáritas Córdoba A.C.</title>
</head>

<body>
    <?php
    /* preloader, particles & header */
    include '../components/header.php';
    ?>
    <!-- banner -->
    <?php while ($row = $resultado->fetch_assoc()) { ?>
        <section class="page-title overlay" style="background-image: url(../../src/img/imgModuloServicios/<?php echo $row['file'] ?>);">
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
    <?php } ?>

    <!-- seccion servicios -->
    <section class="section" id="seccionServicios1">
        <div class="container">
            <div class="row justify-content-center">
                <!-- service Escucha de casos -->
                <?php while ($row1 = $resultado1->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="escuchaCasos">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                                <?php echo $row1['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row1['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify"><?php echo $row1['descripcion'] ?>...</p>
                            </div>
                            <div class="card-footer">
                                <a href="escuchaCasos.php" id="generales" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- service Luchamos contra el Cáncer -->
                <?php while ($row2 = $resultado2->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="luchaCancer">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                                <?php echo $row2['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row2['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                    <?php echo $row2['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="contraCancer.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- service Farmacia -->
                <?php while ($row3 = $resultado3->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="farmacia">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                                <?php echo $row3['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row3['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                    <?php echo $row3['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="farmacia.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="container" id="seccionServicios2">
            <div class="row justify-content-center">
                <!-- service Consultas médicas -->
                <?php while ($row4 = $resultado4->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="consultasMedicas">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                                <?php echo $row4['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row4['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row4['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="consultasMedicas.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- service Consultas psicológicas -->
                <?php while ($row5 = $resultado5->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="consultasPsicologicas">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                            <?php echo $row5['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row5['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row5['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="consultasPsicologicas.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- service Despensas a adultos mayores -->
                <?php while ($row6 = $resultado6->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="despensasAdultosMayores">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                            <?php echo $row6['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row6['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row6['descripcion'] ?>...
                                <p>
                            </div>
                            <div class="card-footer">
                                <a href="despensaAncianos.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="container" id="seccionServicios3">
            <div class="row justify-content-center">
                <!-- service Despensa a familias -->
                <?php while ($row7 = $resultado7->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="despensaFamilias">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                            <?php echo $row7['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row7['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row7['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="despensaFamilias.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- service Bazar de ropa -->
                <?php while ($row8 = $resultado8->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="bazarRopa">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                            <?php echo $row8['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row8['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row8['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="bazarRopa.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- service Emergencias -->
                <?php while ($row9 = $resultado9->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="emergencias">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                            <?php echo $row9['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row9['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row9['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="emergencias.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="container" id="seccionServicios4">
            <div class="row justify-content-center">
                <!-- service Comedor de pobres -->
                <?php while ($row10 = $resultado10->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="comedorPobres">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                            <?php echo $row10['titulo']; ?>
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row10['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row10['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="comedor.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- service Servicios varios -->
                <?php while ($row11 = $resultado11->fetch_assoc()) { ?>
                    <div class="col-lg-4 col-sm-6 mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500" id="serviciosVarios">
                        <div class="card text-center" id="card-services">
                            <div class="card-header">
                                Servicios varios
                            </div>
                            <div class="card-img-wrapper overlay-rounded-top">
                                <img class="card-img-top rounded-0" src="../../src/img/imgModuloServicios/<?php echo $row11['file'] ?>" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <p class="card-text mx-2 mb-0 text-justify">
                                <?php echo $row11['descripcion'] ?>...
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="serviciosVarios.php" class="btn btn-primary"><i class="fab fa-readme"></i> Leer más</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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

</html> -->