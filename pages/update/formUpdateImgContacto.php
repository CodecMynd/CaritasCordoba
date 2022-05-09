<?php
require '../componentsAdmin/head-main.php';

// consulta sql 
$id_recurso = $_GET['id'];
$query = "SELECT * FROM recursos WHERE id_recurso = $id_recurso";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$m = $row['modulo'];
?>

<title>Edición Imagen Módulo Contacto | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">Edición Imagen Módulo Contacto </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Edición Imagenes Contacto</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Todos los campos son obligatorios</h3>
                                </div>
                                <form id="formUpdateImgContacto" enctype="multipart/form-data">
                                    <input type="hidden" name="id_recurso" id="id_recurso" value="<?php echo $id_recurso ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 my-2">
                                                <label for="image" class="form-label">*Imagen a Modificar: <strong><?php echo $row['file'] ?></strong></label>
                                                <input name="image" id="image" type="file" class="form-control" placeholder="subtitulo " required>
                                                <small id="helpId" class="text-muted">Forzosamente, si quieres modificar, deberás volver a ingresar imagen </small>
                                                <a href="../../src/img/imgModuloContacto/<?php echo  $row['file'] ?>" class="btn btn-secondary" download="Img<?php echo  $row['file']  ?>" title="Descargar"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha<small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista<small> *El que registra</small></label>
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
                                                <button type="submit" id="btnUpdateImgContacto" class="btn btn-secondary btn-block"><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateImgContacto"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        // Modificar formulario Modulo Inicio ----------------------------------------------------
        $("form").on("submit", function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            var imagen = new FormData($("#formUpdateImgContacto")[0]);

            $.each(datos, function(key, input) {
                imagen.append(input.name, input.value);
            });
            $.ajax({
                    type: 'post',
                    url: 'updateImgContacto.php',
                    data: imagen,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $('#formUpdateImgContacto')[0].reset();
                        } else {
                            $("#fracaso").delay(500).fadeIn("slow");
                        }
                    }
                })
                .done(function(res) {
                    $('#respuestaUpdateImgContacto').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnUpdateImgContacto").on('click', function() {
            $("#btnUpdateImgContacto").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnUpdateImgContacto").css('visibility', 'visible');
            }, 300000);
        });
    </script>
</body>

</html>