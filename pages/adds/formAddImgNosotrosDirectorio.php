<?php
require '../componentsAdmin/head-main.php';
?>
<title>Registrar Imagen Módulo Directorio | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">Registrar Personal a Directorio </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Registrar Personal</li>
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
                                <form id="formAddImgDirectorio" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-12 my-1 nombre(s)">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                    </div>
                                                    <input autofocus name="nombre" id="nombre" type="text" class="form-control" placeholder="nombre(s)" maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">*Nombre(s)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1 apellidopaterno">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                    </div>
                                                    <input name="apellidopaterno" id="apellidopaterno" type="text" class="form-control" placeholder="apellidopaterno " maxlength="25" data-toggle="tooltip" data-placement="bottom" title="Max. 25 caracteres">
                                                    <label for="floatingInput" class="pl-5">*Apellido Paterno</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1 apellidomaterno">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                    </div>
                                                    <input name="apellidomaterno" id="apellidomaterno" type="text" class="form-control" placeholder="apellidopaterno " maxlength="25" data-toggle="tooltip" data-placement="bottom" title="Max. 25 caracteres">
                                                    <label for="floatingInput" class="pl-5">*Apellido Materno</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1 puesto">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                    </div>
                                                    <input name="puesto" id="puesto" type="text" class="form-control" placeholder="puesto " maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">*Puesto</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1 email">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                                    </div>
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="Correo" data-inputmask="'alias': 'email'" />
                                                    <label for="floatingInput" class="pl-5">Email <small> *Ej. prueba@prueba.com</small> </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1 tel">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                                    </div>
                                                    <input name="tel" id="tel" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">*Teléfono <small>* 10 dígitos</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1 descripcion">
                                                <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                    <label class="ml-5 mb-2">*Descripción de las funciones del puesto</label>
                                                    <span data-toggle="tooltip" title="max. 200 caracteres">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                            </div>
                                                            <textarea name="descripcion" id="descripcion" class="form-control" rows="2" placeholder="Agrega alguna breve Descripción de sus actividades en Caritas Cordoba" maxlength="200"></textarea>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-2 file">
                                                <label for="image" class="form-label">*Agregar imagen </label>
                                                <input name="ruta" id="ruta" type="file" class="form-control" placeholder="subtitulo ">
                                                <small id="helpId" class="text-muted">Solo formatos .png .jpg .jpge</small>
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
                                                <button type="submit" id="btnAddDirectorio" class="btn btn-secondary btn-block btnDirectorio"><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaDirectorio"></div>
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
    require '../componentsAdmin/modal-ImgDirectorio.php';
    ?>
    <script>
        // Mostrar modal automatico al abrir el formulario
        $(document).ready(function() {
            $('#modal-ImgDirectorio').modal('toggle')
        });
        // Capturar formulario Modulo Inicio
        $("form").on("submit", function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            var imagen = new FormData($("#formAddImgDirectorio")[0]);

            $.each(datos, function(key, input) {
                imagen.append(input.name, input.value);
            });
            $.ajax({
                    type: 'post',
                    url: 'addImgDirectorio.php',
                    data: imagen,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $('#formAddImgDirectorio')[0].reset();
                        } else {
                            $("#fracaso").delay(500).fadeIn("slow");
                        }
                    }
                })
                .done(function(res) {
                    $('#respuestaDirectorio').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnAddDirectorio").on('click', function() {
            $("#btnAddDirectorio").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnAddDirectorio").css('visibility', 'visible');
            }, 300000);
        });
    </script>
</body>

</html>