<?php
require '../componentsAdmin/head-main.php';

// consulta sql 
$idServicio = $_GET['id'];
$query = "SELECT * FROM servicios WHERE idServicio = $idServicio";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();

?>

<title>Edición Servicio Farmacia | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../componentsAdmin/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="float-left m-0">Edición Servicio Farmacia </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-hand-holding-hand"></i> Edición Servicio Farmacia</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">

                        <!-- Formulario Edición de Sección de Textos -->
                        <div class="col-sm-12 col-md-12">
                            <div class="card card-secondary card-outline collapsed-card border-card">
                                <div class="card-header border-nav">
                                    <h2 class="card-title"><strong> Formulario Edición de Sección de Textos</strong></h2>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="formUpdateServFarmacia" enctype="multipart/form-data">
                                        <input type="hidden" name="idServicio" id="idServicio" value="<?php echo $idServicio ?>">
                                        <input type="hidden" name="modulo" id="modulo" value="<?php echo $row['modulo'] ?>">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-md-6 col-sm-12 my-1 titulo">
                                                    <div class="input-group form-floating mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                        </div>
                                                        <input autofocus name="titulo" id="titulo" type="text" class="form-control" placeholder="titulo" maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" value="<?php echo $row['titulo'] ?>">
                                                        <label for="floatingInput" class="pl-5">*Titulo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 my-1 subtitulo">
                                                    <div class="input-group form-floating mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                        </div>
                                                        <input name="subtitulo" id="subtitulo" type="text" class="form-control" placeholder="subtitulo " maxlength="50" data-toggle="tooltip" data-placement="bottom" title="Max. 50 caracteres" value="<?php echo $row['subtitulo'] ?>">
                                                        <label for="floatingInput" class="pl-5">*Subtitulo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 my-1 descripcion">
                                                    <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                        <label class="ml-5 mb-2">*Descripción del Servicio</label>
                                                        <span data-toggle="tooltip" title="max. 500 caracteres">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                                </div>
                                                                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" placeholder="Agrega alguna breve Descripción del Carrusel" maxlength="500"><?php echo $row['descripcion'] ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-4 col-sm-12 my-1">
                                                    <label class="ml-5 mb-2">Fecha<small> *modificación</small></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 my-1">
                                                    <label class="ml-5 mb-2">Capturista<small> *El que modifica</small></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nomComp ?>" disabled readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-footer">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12 align-self-center">
                                                    <button type="submit" id="btnUpdateServFarmacia" class="btn btn-secondary btn-block btnNuevoUsuario"><i class="fas fa-pen"></i> Guardar</buttom>
                                                </div>
                                                <div class="col-md-2 col-sm-12 align-self-center">
                                                    <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                </div>
                                                <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                <br>
                                                <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                    <div id="respuestaUpdateServFarmacia"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Formulario Edición Imagen Banner -->
                        <div class="col-sm-12 col-md-6">
                            <div class="card card-secondary card-outline collapsed-card border-card">
                                <div class="card-header border-nav">
                                    <h2 class="card-title"><strong>Formulario Edición Imagen Banner</strong></h2>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <form id="formUpdateSerFarmaciaImgBanner" enctype="multipart/form-data">
                                        <input type="hidden" name="idServicio" id="idServicio" value="<?php echo $idServicio ?>">
                                        <input type="hidden" name="imgBanner" id="imgBanner" value="<?php echo $row['imgBanner']  ?>">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <h5 class="parpadea">El formato de nombre de tu Imagen no debe tener separaciones</h5>
                                                <div class="col-md-12 col-sm-12 my-2">
                                                    <label for="image" class="form-label">*Imagen a Modificar: <strong><?php echo $row['imgBanner'] ?></strong></label>

                                                    <input name="ruta" id="ruta" type="file" class="form-control" placeholder="subtitulo">

                                                    <small id="helpId" class="text-muted">¡Puedes descargar la imagen desde aquí!</small>
                                                    <a href="../../src/img/servicios/farmacia/<?php echo $row['imgBanner'] ?>" class="btn btn-secondary" download="<?php echo  $row['imgBanner']  ?>" title="Descargar"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-footer">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 align-self-center">
                                                    <button type="submit" id="btnUpdateSerFarmaciaImgBanner" class="btn btn-secondary btn-block"><i class="fas fa-pen"></i> Guardar</buttom>
                                                </div>
                                                <div class="col-md-3 col-sm-6 align-self-center">
                                                    <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                </div>
                                                <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                <br>
                                                <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                    <div id="respuestaUpdateSerFarmaciaImgBanner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Formulario Edición Imagen Principal -->
                        <div class="col-sm-12 col-md-6">
                            <div class="card card-secondary card-outline collapsed-card border-card">
                                <div class="card-header border-nav">
                                    <h2 class="card-title"><strong>Formulario Edición Imagen Principal</strong></h2>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <form id="formUpdateSerFarmaciaImgPrinc" enctype="multipart/form-data">
                                        <input type="hidden" name="idServicio" id="idServicio" value="<?php echo $idServicio ?>">
                                        <input type="hidden" name="imgPrincipal" id="imgPrincipal" value="<?php echo $row['imgPrincipal']  ?>">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <h5 class="parpadea">El formato de nombre de tu Imagen no debe tener separaciones</h5>
                                                <div class="col-md-12 col-sm-12 my-2">
                                                    <label for="image" class="form-label">*Imagen a Modificar: <strong><?php echo $row['imgPrincipal'] ?></strong></label>

                                                    <input name="ruta" id="ruta" type="file" class="form-control" placeholder="subtitulo">

                                                    <small id="helpId" class="text-muted">¡Puedes descargar la imagen desde aquí!</small>
                                                    <a href="../../src/img/servicios/farmacia/<?php echo $row['imgPrincipal'] ?>" class="btn btn-secondary" download="<?php echo  $row['imgPrincipal']  ?>" title="Descargar"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-footer">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 align-self-center">
                                                    <button type="submit" id="btnUpdateSerFarmaciaImgPrinc" class="btn btn-secondary btn-block"><i class="fas fa-pen"></i> Guardar</buttom>
                                                </div>
                                                <div class="col-md-3 col-sm-6 align-self-center">
                                                    <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                </div>
                                                <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                <br>
                                                <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                    <div id="respuestaUpdateSerFarmaciaImgPrinc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <?php
        require '../componentsAdmin/footer.php';
        ?>
    </div>
    <?php
    // Scripts principal
    require '../componentsAdmin/scripts-main.php';
    ?>
    <script src="../src/js/ajax.js"></script>
    <script>
        // Formulario Edición de Sección de Textos --------------------------------------------
        $('#btnUpdateServFarmacia').click(function() {
            $.ajax({
                    url: 'updateServFarmacia.php',
                    type: 'POST',
                    data: $('#formUpdateServFarmacia').serialize(),
                })
                .done(function(res) {
                    $('#respuestaUpdateServFarmacia').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnUpdateServFarmacia").on('click', function() {
            $("#btnUpdateServFarmacia").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnUpdateServFarmacia").css('visibility', 'visible');
            }, 300000);
        });

        // -------------------------------------------------------------------------
        // Formulario Edición Imagen Banner --------------------------------------------
        $("form").on("submit", function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            var imagen = new FormData($("#formUpdateSerFarmaciaImgBanner")[0]);

            $.each(datos, function(key, input) {
                imagen.append(input.name, input.value);
            });
            $.ajax({
                    type: 'post',
                    url: 'updateSerFarmaciaImgBanner.php',
                    data: imagen,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $('#formUpdateSerFarmaciaImgBanner')[0].reset();
                        } else {
                            $("#fracaso").delay(500).fadeIn("slow");
                        }
                    }
                })
                .done(function(res) {
                    $('#respuestaUpdateSerFarmaciaImgBanner').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnUpdateSerFarmaciaImgBanner").on('click', function() {
            $("#btnUpdateSerFarmaciaImgBanner").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnUpdateSerFarmaciaImgBanner").css('visibility', 'visible');
            }, 300000);
        });

        // -------------------------------------------------------------------------
        // Formulario Edición Imagen Principal --------------------------------------------
        $("form").on("submit", function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            var imagen = new FormData($("#formUpdateSerFarmaciaImgPrinc")[0]);

            $.each(datos, function(key, input) {
                imagen.append(input.name, input.value);
            });
            $.ajax({
                    type: 'post',
                    url: 'updateSerFarmaciaImgPrinc.php',
                    data: imagen,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $('#formUpdateSerFarmaciaImgPrinc')[0].reset();
                        } else {
                            $("#fracaso").delay(500).fadeIn("slow");
                        }
                    }
                })
                .done(function(res) {
                    $('#respuestaUpdateSerFarmaciaImgPrinc').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnUpdateSerFarmaciaImgPrinc").on('click', function() {
            $("#btnUpdateSerFarmaciaImgPrinc").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnUpdateSerFarmaciaImgPrinc").css('visibility', 'visible');
            }, 300000);
        });
    </script>
</body>

</html>