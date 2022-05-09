<?php
require '../../config/functions.php';
conectar();
$query = "SELECT * FROM recursos WHERE modulo = 'contacto' LIMIT 1";
$resultadoContacto = mysqli_query($conexion, $query);

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
    <title>Contacto | Cáritas Córdoba A.C.</title>
</head>

<body>
    <?php
    /* preloader, particles & header */
    include '../components/header.php';
    ?>
    <!-- banner -->
    <?php while ($row = $resultadoContacto->fetch_assoc()) { ?>
        <section class="page-title overlay" style="background-image: url(../../src/img/imgModuloContacto/<?php echo $row['file'] ?>);">
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
    <?php } ?>
    <!-- /banner -->

    <!-- contact -->
    <section class="section" data-aos="fade-out" data-aos-duration="1500">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 ml-auto" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="rounded p-sm-5 px-3 py-5 bg-secondary" style="height: 550px;">
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
                    <div class="rounded p-sm-5 px-3 py-5 bg-secondary" style="height: 550px;">
                        <h3 class="section-title section-title-border-half text-white">Formulario de contacto</h3>
                        <form id="formAddImgContactoUsuario" autocomplete="off">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 col-sm-10 my-1 form-group">
                                        <div class="input-group form-floating mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                            <input autofocus name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                            <label for="floatingInput" class="pl-5">Nombre(s)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-10 my-1">
                                        <div class="input-group form-floating mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                            </div>
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Correo" data-inputmask="'alias': 'email'" />
                                            <label for="floatingInput" class="pl-5">Email <small> *Ej. prueba@prueba.com</small> </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-10 my-1 form-group">
                                        <div class="input-group form-floating mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                            <input autofocus name="asunto" id="asunto" type="text" class="form-control" placeholder="Asunto" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                            <label for="floatingInput" class="pl-5">Asunto</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-10 my-1">
                                        <div class="input-group form-floating mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                            </div>
                                            <input name="tel" id="tel" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                            <label for="floatingInput" class="pl-5">Teléfono <small>* 10 dígitos</small></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-10 my-1 form-group">
                                        <div class="input-group form-floating mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                            <textarea autofocus name="mensaje" id="mensaje" type="text" class="form-control"  placeholder="Asunto" required maxlength="200" data-toggle="tooltip" data-placement="bottom" title="Max. 200 caracteres"></textarea>
                                            <label for="floatingInput" class="pl-5">Mensaje</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-footer border-footer"> -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 align-self-center">
                                        <button type="submit" id="btnAddContactoUsuario" class="btn btn-primary mb-md-50 mt-40" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</button>
                                    </div>
                                    <br>
                                    <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                        <div id="respuestaAddContactoUsuario"></div>
                                    </div>
                                </div>
                            <!-- </div> -->
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
    require '../componentsAdmin/scripts-main.php';
    ?>

    <script>
        $("form").on("submit", function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            var imagen = new FormData($("#formAddImgContactoUsuario")[0]);

            $.each(datos, function(key, input) {
                imagen.append(input.name, input.value);
            });
            $.ajax({
                    type: 'post',
                    url: '../adds/addContactoUsuario.php',
                    data: imagen,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $('#formAddImgContactoUsuario')[0].reset();
                        } else {
                            $("#fracaso").delay(500).fadeIn("slow");
                        }
                    }
                })
                .done(function(res) {
                    $('#respuestaAddContactoUsuario').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnAddContactoUsuario").on('click', function() {
            $("#btnAddContactoUsuario").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnAddContactoUsuario").css('visibility', 'visible');
            }, 300000);
        });
    </script>

</body>

</html>