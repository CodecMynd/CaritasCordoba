<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php';

$query = "SELECT modulo FROM servicios WHERE modulo = 'Servicio Escucha de Casos' ";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();

?>
<title>Tabla Servicio Escucha de Casos | <?php echo $nomComp ?></title>
<!-- Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO -->
<script>
    function abrirModal1(idServicio, imgBanner, imgPrincipal, modulo) {
        $("#btnModal-eliminarServEscCasos").click();
        $("#idServicio").val(idServicio);
        $("#imgBanner").val(imgBanner);
        $("#imgPrincipal").val(imgPrincipal);
        $("#imgBannerText").html(imgBanner);
        $("#imgPrincipalText").html(imgPrincipal);
        $("#moduloText").html(modulo);
    }
</script>
<!-- Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO -->
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
                            <h1 class="m-0">Tabla Servicio Escucha de Casos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-hand-holding-hand"></i> Registrar Escucha de Casos</li>
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
                                    <h3 class="card-title">Servicio Escucha de Casos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php
                                        if (empty($row['modulo'])) {

                                            if ($super == 1 or $nuevoEscuchaCasos == 1) {
                                                echo '<a type="button" class="btn btn-secondary" href="../adds/formAddServEscuchaCasos.php" data-toggle="tooltip" data-placement="left" title="Registrar Servicio Escucha de Casos"><i class="fa-solid fa-hands-holding-child"></i>&nbsp;&nbsp; Registrar Servicio Escucha de Casos</a>';
                                            } else {
                                                echo '<a type="button" class="btn btn-outline-danger" id="nuevoEscuchaCasos" data-toggle="tooltip" data-placement="left" title="Registrar Servicio Escucha de Casos
                                            "><i class="fa-solid fa-hands-holding-child"></i>&nbsp;&nbsp; Registrar Servicio Escucha de Casos</a>';
                                            }
                                        } else {
                                            echo '<a type="button" class="btn btn-outline-danger" id="YaRegistrado" data-toggle="tooltip" data-placement="left" title="No puedes agregar otro registro"><i class="fa-solid fa-hands-holding-child"></i>&nbsp;&nbsp; Registrar Servicio Escucha de Casos</a>';
                                        }
                                        ?>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar p??gina"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1 or $verTablaEscuchaCasos == 1) {
                                    $query = "SELECT S.idServicio, S.titulo, S.subtitulo, 
                                    S.descripcion, S.imgBanner, S.imgPrincipal, S.fechaRegistro, S.modulo,
                                    U.nombres, U.aPaterno, U.aMaterno
                                    FROM servicios S
                                    INNER JOIN usuarios U ON S.id_capC = U.id_usuario
                                    WHERE modulo = 'Servicio Escucha de Casos' ";
                                } else {
                                    $query = "SELECT super FROM usuarios WHERE super = 10";
                                }

                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaEscuchaCasos == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <div id="table_refresh">
                                        <table id="tableCrudUsuarios" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Titulo</th>
                                                    <th>Subtitulo</th>
                                                    <th>Descripci??n</th>
                                                    <th>Imagen Banner</th>
                                                    <th>Imagen Principal</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Capturista</th>
                                                    <th>Acciones</th>
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
                                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Bot??nes de administraci??n tabla Usuarios"> Acciones</span>
                                                                    </button>
                                                                    <ul class='dropdown-menu text-center' style='min-width:2em;'>
                                                                        <div class="btn-group">
                                                                            <li class="dropdown-item">
                                                                                <span data-toggle="tooltip" title="Editar Servicio Escucha de Casos">
                                                                                    <?php if ($super == 1 or $editarSerEscuCasos == 1) { ?>
                                                                                        <a class="btn btn-secondary" href="../update/formUpdateSerEscuCasos.php?id=<?php echo $row['idServicio'] ?>"><i class="fas fa-edit"></i></a>
                                                                                    <?php } else { ?>
                                                                                        <a class="btn btn-outline-danger" id="editarUsu"><i class="fas fa-edit"></i></a>
                                                                                    <?php } ?>
                                                                                </span>
                                                                            </li>
                                                                            <li class="dropdown-item">
                                                                                <!-- Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO -->
                                                                                <span data-toggle="tooltip" title="Eliminar Servicio Escucha de Casos">
                                                                                    <?php if ($super == 1 or $eliminarSerEscuCasos   == 1) {
                                                                                        echo  "<a href='#' onclick='abrirModal1(\"" . $row['idServicio'] . "\", \"" . $row['imgBanner'] . "\",\"" . $row['imgPrincipal'] . "\",\"" . $row['modulo'] . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
                                                                                    } else {
                                                                                        echo  "<a class='btn btn-outline-danger' id='eliminarUsu'><i class='fas fa-trash-alt'></i></a>";
                                                                                    } ?>
                                                                                </span>
                                                                                <!-- Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO -->
                                                                            </li>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    desconectar();
                                                    ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Titulo</th>
                                                    <th>Subtitulo</th>
                                                    <th>Descripci??n</th>
                                                    <th>Imagen Banner</th>
                                                    <th>Imagen Principal</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Capturista</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO -->
                                    <button id="btnModal-eliminarServEscCasos" class="btn btn-white" data-toggle="modal" data-target='.eliminarServEscCasos'></button>
                                <?php
                                    require '../componentsAdmin/modal-eliminarServEscCasos.php';
                                    }
                                ?>
                                <!-- Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO -->
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
        // Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO
        $('#btnEliminarServEscCasos').click(function() {
            var param = $('#formEliminarServEscCasos').serialize();
            $.ajax({
                    url: '../delete/deleteServEscCasos.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formEliminarServEscCasos')[0].reset();
                        $("#table_refresh").load(" #table_refresh");
                    }
                })
                .done(function(res) {
                    $('#respuestaEliminarServEscCasos').html(res)
                })
        });

        //Ocultar boton por 10 Segundos para evitar el doble submit
        $("#btnEliminarServEscCasos").on('click', function() {
            $("#btnEliminarServEscCasos").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnEliminarServEscCasos").css('visibility', 'visible');
            }, 10000);
        });
        // Boton eliminar ------------------------------------------------- ZEN ESTE JQUERY ES NUEVO
        // avisos ----------------------------------------
        $(document).ready(function() {
            $("#nuevoEscuchaCasos").click(function() {
                toastr["error"]("??No tienes acceso a: Registrar Nuevo Escucha de Casos, consulta al administrador!")

                tostadas.opciones = {
                    "bot??ncerrar": falso,
                    "depuraci??n": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuraci??n": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilaci??n",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })

            $("#YaRegistrado").click(function() {
                toastr["error"]("??No puedes generar dos registros a la vez, en dado caso que quieres ingresar toda la informaci??n nuevamente deber??s eliminar este registro!")

                tostadas.opciones = {
                    "bot??ncerrar": falso,
                    "depuraci??n": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuraci??n": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilaci??n",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });
    </script>

</body>

</html>