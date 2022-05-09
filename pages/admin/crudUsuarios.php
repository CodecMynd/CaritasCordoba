<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php'
?>
<title>Tabla Usuarios | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">Tabla Usuarios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-user-plus"></i> Registrar Usuario</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuarios dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddUsuario.php" data-toggle="tooltip" data-placement="left" title="Registrar Usuario">
                                                <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp; Registrar Usuario</a>
                                        <?php } else if ($nuevoUsu == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddUsuario.php" data-toggle="tooltip" data-placement="left" title="Registrar Usuario">
                                                <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp; Registrar Usuario</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="nuevoUsu" data-toggle="tooltip" data-placement="left" title="Registrar Usuario">
                                                <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp; Registrar Usuario</a>
                                        <?php } ?> 
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                 if ($super == 1 OR $verTablaUsuario == 1) {
                                     $query = "SELECT * FROM usuarios WHERE super <> 1 AND admin <> 1 ORDER BY id_usuario DESC";
                                 } else {
                                     $query = "SELECT super FROM usuarios WHERE super = 10";
                                 }
                          
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaUsuario == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?> 
                                    <table id="tableCrudUsuarios" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Usuario</th>
                                                <th>Contraseña</th>
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
                                                        <?php
                                                        $nombres = $row['nombres'];
                                                        $aPaterno = $row['aPaterno'];
                                                        $aMaterno = $row['aMaterno'];
                                                        echo $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['usuario'] ?>
                                                    </td>
                                                    <td>
                                                    <?php $pass = $row['pass'];
                                                        if ($pass == 'SIN_PASSWORD') {
                                                            echo '<span class="badge badge-pill badge-danger">Sin Asignar</span>';
                                                        } else {
                                                            echo '<span class="badge badge-pill badge-success">Asignada</span>';
                                                        }
                                                        ?>
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
                                                                                <?php if ($super == 1 OR $editarUsu == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateUsuario.php?id=<?php echo $row['id_usuario'] ?>"><i class="fas fa-edit"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="editarUsu"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Asignar Contraseña">
                                                                                <?php if ($super == 1 OR $asignarCon  == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdatePass.php?id=<?php echo $row['id_usuario'] ?>"> <i class="fa-solid fa-lock"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="asignarCon"> <i class="fa-solid fa-lock"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Eliminar Usuario">
                                                                                <?php if ($super == 1 OR $eliminarUsu   == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $row['id_usuario'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliminarUsu"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Asignar Permiso">
                                                                                <?php if ($super == 1 OR $asignarPer == 1) { ?>
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
                                                <th>Nombre</th>
                                                <th>Usuario</th>
                                                <th>Contraseña</th>
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
    <script src="../src/js/toastr.js"></script>
    <script>
            $(document).ready(function() {
        $('#btnDeleteUsuario').click(function() {
            $.ajax({
                    url: '../delete/deleteUsuario.php',
                    type: 'POST',
                    data: $('#formDeleteUsuario').serialize(),
                })
                .done(function(res) {
                    $('#respuestaDeleteUsuario').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnDeleteUsuario").on('click', function() {
        $("#btnDeleteUsuario").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnDeleteUsuario").css('visibility', 'visible');
        }, 300000);
    });
    </script>

</body>

</html>