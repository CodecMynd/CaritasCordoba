<?php
require '../../config/functions.php';
conectar();


// query Imagen Banner Principal 
$query = "SELECT * FROM recursos WHERE modulo = 'reportes' LIMIT 1";
$resultado = mysqli_query($conexion, $query);

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
    <?php while ($row = $resultado->fetch_assoc()) { ?>
    <section class="page-title overlay" style="background-image: url(../../src/img/imgModuloReportes/<?php echo $row['file'] ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Reportes</h2>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <!-- seccion reportes -->
    <section class="section" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" id="donar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title section-title-border-gray">Reportes</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-3 col-6" >
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="text-white">150</h3>
                <p class="text-white">New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag text-white"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="text-white">53<sup style="font-size: 20px">%</sup></h3>
                <p class="text-white">Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars text-white"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="text-white">44</h3>
                <p class="text-white">User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add text-white"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="text-white">65</h3>
                <p class="text-white">Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph text-white"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /seccion reportes -->


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