<?php
require '../componentsAdmin/head-main.php';
?>
<title>Registrar Imagen Módulo Inicio | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">Registrar Imagen Módulo Inicio </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Registrar Imagenes Inico</li>
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
                                <form id="formAddImgInicio" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-3 col-sm-12 form-group">
                                                <div class="input-group">
                                                    <label for="color" class="pl-5">*Módulo</label>
                                                    <select name="modulo" id="modulo" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Selecciona un Color de la lista" style="width: 100%;" onchange="myFunction()">
                                                        <option selected disabled>Selecciona</option>
                                                        <option value="carrusel1">Carrusel Principal</option>
                                                        <option value="carrusel2">Carrusel Secundario</option>
                                                        <option value="carrusel3">Carrusel Videos</option>
                                                        <option value="carrusel4">Carrusel Benefactores</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 my-1 titulo" style="display: none;">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                    </div>
                                                    <input autofocus name="titulo" id="titulo" type="text" class="form-control" placeholder="titulo" maxlength="20" data-toggle="tooltip" data-placement="bottom" title="Max. 20 caracteres">
                                                    <label for="floatingInput" class="pl-5">*Titulo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1 subtitulo" style="display: none;">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                                                    </div>
                                                    <input name="subtitulo" id="subtitulo" type="text" class="form-control" placeholder="subtitulo " maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">*Subtitulo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1 descripcion" style="display: none;">
                                                <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                    <label class="ml-5 mb-2">*Descripción Carrusel</label>
                                                    <span data-toggle="tooltip" title="max. 200 caracteres">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                            </div>
                                                            <textarea name="descripcion" id="descripcion" class="form-control" rows="2" placeholder="Agrega alguna breve Descripción del Carrusel" maxlength="200"></textarea>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-2 file" style="display: none;">
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
                                                <button type="submit" id="btnAddImgInicio" class="btn btn-secondary btn-block btnNuevoUsuario"><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoImgInicio"></div>
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
    require '../componentsAdmin/modal-ayudaImgInicio.php';
    ?>
    <script>
        // Mostrar Modal dependiendo de un option select
        function myFunction() {
            var option_value = document.getElementById("modulo").value;
            if (option_value == "carrusel1") {
                //  alert("Hai !");
                $("#modal-carrusel1").modal();
            } else if (option_value == "carrusel2") {
                $("#modal-carrusel2").modal();
            } else if (option_value == "carrusel3") {
                $("#modal-carrusel3").modal();
            } else if (option_value == "carrusel4") {
                $("#modal-carrusel4").modal();
            }
        }
        //Ocultar input file al seleccionar opcion video
        $('#modulo').on('change', function() {
            var selectValor = $(this).val();
            //alert (selectValor);
            if (selectValor == 0) {
                $('.titulo').hide();
                $('.subtitulo').hide();
                $('.descripcion').hide();
                $('.file').hide();
            } else if (selectValor == 'carrusel1') {
                $('.titulo').show();
                $('.subtitulo').show();
                $('.descripcion').show();
                $('.file').show();
            } else if (selectValor == 'carrusel2') {
                $('.titulo').hide();
                $('.subtitulo').hide();
                $('.descripcion').hide();
                $('.file').show();
            } else if (selectValor == 'carrusel3') {
                $('.titulo').hide();
                $('.subtitulo').hide();
                $('.descripcion').show();
                $('.file').hide();
            } else if (selectValor == 'carrusel4') {
                $('.titulo').hide();
                $('.subtitulo').hide();
                $('.descripcion').hide();
                $('.file').show();
            }
        });

        // Capturar formulario Modulo Inicio
        $("form").on("submit", function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            var imagen = new FormData($("#formAddImgInicio")[0]);

            $.each(datos, function(key, input) {
                imagen.append(input.name, input.value);
            });
            $.ajax({
                    type: 'post',
                    url: 'addImgInicio.php',
                    data: imagen,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $('#formAddImgInicio')[0].reset();
                        } else {
                            $("#fracaso").delay(500).fadeIn("slow");
                        }
                    }
                })
                .done(function(res) {
                    $('#respuestaNuevoImgInicio').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnAddImgInicio").on('click', function() {
            $("#btnAddImgInicio").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnAddImgInicio").css('visibility', 'visible');
            }, 300000);
        });
    </script>
</body>

</html>