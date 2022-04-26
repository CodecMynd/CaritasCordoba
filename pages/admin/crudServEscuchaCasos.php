<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php'
?>
<title>Tabla Servicio Escucha de Casos | <?php echo $nomComp ?></title>
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
                                        if ($super == 1 or $nuevoEscuchaCasos == 1) {
                                            echo '<a type="button" class="btn btn-secondary" href="../adds/formAddServEscuchaCasos.php" data-toggle="tooltip" data-placement="left" title="Registrar Servicio Escucha de Casos"><i class="fa-solid fa-hands-holding-child"></i>&nbsp;&nbsp; Registrar Servicio Escucha de Casos</a>';
                                        } else {
                                            echo '<a type="button" class="btn btn-outline-danger" id="nuevoEscuchaCasos" data-toggle="tooltip" data-placement="left" title="Registrar Servicio Escucha de Casos
                                            "><i class="fa-solid fa-hands-holding-child"></i>&nbsp;&nbsp; Registrar Servicio Escucha de Casos</a>';
                                        } ?>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1 or $verTablaEscuchaCasos == 1) {
                                    $query = "SELECT * FROM usuarios WHERE super <> 1 AND admin <> 1 ORDER BY id_usuario DESC";
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
                                    <table id="tableCrudUsuarios" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Titulo</th>
                                                <th>Subtitulo</th>
                                                <th>Descripción</th>
                                                <th>Imagen</th>
                                                <th>Fecha de Registro</th>
                                                <th>Capturista</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) { ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Editar Usuario">
                                                                                <?php if ($super == 1 or $editarUsu == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateUsuario.php?id=<?php echo $row['id_usuario'] ?>"><i class="fas fa-edit"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="editarUsu"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Asignar Contraseña">
                                                                                <?php if ($super == 1 or $asignarCon  == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdatePass.php?id=<?php echo $row['id_usuario'] ?>"> <i class="fa-solid fa-lock"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="asignarCon"> <i class="fa-solid fa-lock"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Eliminar Usuario">
                                                                                <?php if ($super == 1 or $eliminarUsu   == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $row['id_usuario'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliminarUsu"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Asignar Permiso">
                                                                                <?php if ($super == 1 or $asignarPer == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdatePermiso.php?id=<?php echo $row['id_usuario'] ?>"><i class="fa-solid fa-key"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="asignarPer"><i class="fa-solid fa-key"></i></a>
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
                                                require '../componentsAdmin/modal-eliminarUsuario.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Titulo</th>
                                                <th>Subtitulo</th>
                                                <th>Descripción</th>
                                                <th>Imagen</th>
                                                <th>Fecha de Registro</th>
                                                <th>Capturista</th>
                                                <th>Acciones</th>
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
    <!-- avisos -->
    <script>
        $(document).ready(function() {
            $("#nuevoEscuchaCasos").click(function() {
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
        });
    </script>

</body>

</html>