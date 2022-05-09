<?php
require '../componentsAdmin/head-main.php';
$query = "SELECT modulo FROM servicios";
$resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

ini_set('date.timezone', 'America/Mexico_City');
$fecha_actual = date('Y-m');
?>
<title>Registrar Imagenes a Galerias de Servicios | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">Registrar Imagenes a Galerias de Servicios </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fas fa-image"></i> Registrar Imagenes a Galerias de Servicios</li>
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
                                <form id="formAddGalServicios" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12 my-1 descripcion">
                                                <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                    <label class="ml-5 mb-2">*Descripción del Servicio <small>(mas. 100 caracteres)</small></label>
                                                    <span data-toggle="tooltip" title="max. 100 caracteres">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                            </div>
                                                            <textarea name="descripcion" id="descripcion" class="form-control" rows="2" placeholder="Agrega alguna breve Descripción de la Imagen" maxlength="100"></textarea>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12 my-2 file ">
                                                <h5 class="parpadea">El formato de nombre de tu Imagen no debe tener separaciones</h5>
                                            </div>
                                            <div class="col-md-5 col-sm-12 my-2 file">
                                                <label for="image" class="form-label">*Agregar imagen Banner</label>
                                                <input name="ruta" id="ruta" type="file" class="form-control" placeholder="imagen Banner ">
                                                <small id="helpId" class="text-muted">Solo formatos .png .jpg .jpge</small>
                                            </div>
                                            <div class='col-md-4 col-sm-12 my-2'>
                                                <div class='input-group'>
                                                    <label for='color' class='pl-5'>Modulo</label>
                                                    <select name='modulo' id='modulo' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Modulo de la lista' style='width: 100%;' required>
                                                        <option selected disabled>Selecciona un Modulo</option>
                                                        <?php
                                                        while ($row = $resultado->fetch_assoc()) { 
                                                                $modulo = $row['modulo'];
                                                                ?>
                                                        <option value="<?php echo $row['modulo'] ?>"><?php echo $row['modulo'] ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-2 form-group">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-calendar-plus"></i></span>
                                                    </div>
                                                    <input type="month" name="mes_anio" id="mes_anio" class="form-control" value="<?php echo $fecha_actual?>">
                                                    <label for="floatingInput" class="pl-5">Mes</label>
                                                </div>
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
                                                <button type="submit" id="btnAddGalServicios" class="btn btn-secondary btn-block btnNuevoUsuario"><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaAddGalServicios"></div>
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
    <script>
        // Capturar formulario Modulo Inicio
        $("form").on("submit", function(e) {
            e.preventDefault();
            var datos = $(this).serializeArray();
            var imagen = new FormData($("#formAddGalServicios")[0]);

            $.each(datos, function(key, input) {
                imagen.append(input.name, input.value);
            });
            $.ajax({
                    type: 'post',
                    url: 'addNuevoGalServicios.php',
                    data: imagen,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            $('#formAddGalServicios')[0].reset();
                        } else {
                            $("#fracaso").delay(500).fadeIn("slow");
                        }
                    }
                })
                .done(function(res) {
                    $('#respuestaAddGalServicios').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnAddGalServicios").on('click', function() {
            $("#btnAddGalServicios").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnAddGalServicios").css('visibility', 'visible');
            }, 300000);
        });
    </script>
</body>

</html>