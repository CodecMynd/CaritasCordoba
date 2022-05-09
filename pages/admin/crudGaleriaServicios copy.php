<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php';

?>
<title>Tabla Galeria Servicios | <?php echo $nomComp ?></title>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper" style="height: 100%;">
        <?php
        require '../componentsAdmin/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla Galeria de Servicios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fas fa-image"></i> Registrar Imagenes Galeria Servicios</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Galeria Servicios dadas de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php
                                            if ($super == 1 or $nuevoGalServicios == 1) {
                                                echo '<a type="button" class="btn btn-secondary" href="../adds/formAddGalServicios.php" data-toggle="tooltip" data-placement="left" title="Registrar Imagenes Galeria Servicios"><i class="fa-solid fa-hands-holding-child"></i>&nbsp;&nbsp; Registrar Imagenes Galeria Servicios</a>';
                                            } else {
                                                echo '<a type="button" class="btn btn-outline-danger" id="nuevoGalServicios" data-toggle="tooltip" data-placement="left" title="Registrar Imagenes Galeria Servicios"><i class="fa-solid fa-hands-holding-child"></i>&nbsp;&nbsp; Registrar Imagenes Galeria Servicios</a>';
                                            }
                                        ?>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaEscuchaCasos == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableCrudUsuarios" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Modulo</th>
                                                <th>Descripción</th>
                                                <th>Imagen</th>
                                                <th>Fecha de Registro</th>
                                                <th>Capturista</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $capturista = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['titulo'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['subtitulo'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['descripcion'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['imgBanner'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['imgPrincipal'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['fechaRegistro'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $capturista ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class='dropdown-menu text-center' style='min-width:2em;'>
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Eliminar Servicio Escucha de Casos">
                                                                                <?php if ($super == 1 or $eliminarGalServicios == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarServEscCasos<?php echo $row['idServicio'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliminarUsu"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../componentsAdmin/modal-eliminarServEscCasos.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Modulo</th>
                                                <th>Descripción</th>
                                                <th>Imagen</th>
                                                <th>Fecha de Registro</th>
                                                <th>Capturista</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /table usuario -->
        </div>
        <?php
        require '../componentsAdmin/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../componentsAdmin/scripts-main.php';
    // Scripts dataTables
    require '../componentsAdmin/scripts-dataTables.php';
    ?>

    <script>
        // avisos ----------------------------------------
        $(document).ready(function() {
            $("#nuevoGalServicios").click(function() {
                toastr["error"]("¡No tienes acceso a: Registrar Nuevo Escucha de Casos, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })

            $("#YaRegistrado").click(function() {
                toastr["error"]("¡No puedes generar dos registros a la vez, en dado caso que quieres ingresar toda la información nuevamente deberás eliminar este registro!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });
        // Boton eliminar --------------------------------------------------
        $(document).ready(function() {
            $('#btnDeleteServEscCasos').click(function() {
                $.ajax({
                        url: '../delete/deleteServEscCasos.php',
                        type: 'POST',
                        data: $('#formDeleteServEscCasos').serialize(),
                    })
                    .done(function(res) {
                        $('#respuestaDeleteServEscCasos').html(res)
                    })
            });
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnDeleteServEscCasos").on('click', function() {
            $("#btnDeleteServEscCasos").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteServEscCasos").css('visibility', 'visible');
            }, 300000);
        });
    </script>

</body>

</html>