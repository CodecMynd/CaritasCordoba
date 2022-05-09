<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php'
?>
<title>Panel Imagenes Directorio | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0 bienvenido" style="font-size:2vw">Tabla <strong>Imagenes Directorio</strong></h1>

                        </div>
                        <!-- migas de pan -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Imagenes Directorio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Imagenes del Módulo Directorio</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 OR $regImgNosotrosDirectorio == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddImgNosotrosDirectorio.php" data-toggle="tooltip" data-placement="left" title="Registrar Imagen Directorio">
                                                <i class="fa-solid fa-image"></i></i>&nbsp;&nbsp; Registrar Imagen Directorio</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regImgDirectorio" data-toggle="tooltip" data-placement="left" title="Registrar Imagen Directorio">
                                                <i class="fa-solid fa-image"></i></i>&nbsp;&nbsp; Registrar Imagen Directorio</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1 OR $verTablaImgDirectorio == 1) {
                                    $query = "SELECT * FROM directivos";
                                } else {
                                    $query = "SELECT * FROM directivos WHERE idDirectivo = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaImgNosotrosDirectorio == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableVarios" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Nombre(s)</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Puesto</th>
                                                <th>Función puesto</th>
                                                <th>Telefono</th>
                                                <th>Correo Electronico</th>
                                                <th>Imagen</th>
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
                                                        <?php echo $row['nombreDirec'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['aPatDirec'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['aMatDirec'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['puesto'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['funcionPuesto'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['tel'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['correoElect'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['archivo'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Editar Imagen Directorio">
                                                                                <?php if ($super == 1 OR $editarImgNosotrosDirectorio == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateImgNosotrosDirectorio.php?id=<?php echo $row['idDirectivo'] ?>"><i class="fas fa-edit"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="editarImgNosotrosDirectorio"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Eliminar Imagen del Directorio">
                                                                                <?php if ($super == 1 OR $eliImgNosotrosDirectorio  == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#eliminarImgDirectorio<?php echo $row['idDirectivo'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliImgDirectorio"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    require '../componentsAdmin/modal-eliminarImgDirectorio.php';
                                                    ?>
                                                </tr>
                                            <?php
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>#</th>
                                                <th>Nombre(s)</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Puesto</th>
                                                <th>Función puesto</th>
                                                <th>Telefono</th>
                                                <th>Correo Electronico</th>
                                                <th>Imagen</th>
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
    require '../componentsAdmin/modal-ImgDirectorio.php';
    ?>
</body>
<!-- Ajax Jquery -->
<script src="../src/js/ajax.js"></script>
<script>
    $(document).ready(function() {
        $('#btnDeleteImgDirectorio').click(function() {
            $.ajax({
                    url: '../delete/deleteImgDirectorio.php',
                    type: 'POST',
                    data: $('#formDeleteImgDirectorio').serialize(),
                })
                .done(function(res) {
                    $('#respuestaDeleteImgDirectorio').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnDeleteImgDirectorio").on('click', function() {
        $("#btnDeleteImgDirectorio").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnDeleteImgDirectorio").css('visibility', 'visible');
        }, 300000);
    });
</script>

</html>