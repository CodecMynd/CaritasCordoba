<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php'
?>
<title>Panel Imagenes Pagina Inicio | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0 bienvenido" style="font-size:2vw">Tabla <strong>Imagenes Pagina Inicio</strong></h1>

                        </div>
                        <!-- migas de pan -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Imagenes Inico</li>
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
                                    <h3 class="card-title">Imagenes del Módulo Inicio</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddImgInicio.php" data-toggle="tooltip" data-placement="left" title="1.1.5 Nuevo Usuario">
                                                <i class="fa-solid fa-image"></i></i>&nbsp;&nbsp; Registrar Imagen Módulo Inicio</a>
                                        <?php } else if ($nuevoImgInicio == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddImgInicio.php" data-toggle="tooltip" data-placement="left" title="1.1.5 Nuevo Usuario">
                                                <i class="fa-solid fa-image"></i></i>&nbsp;&nbsp; Registrar Imagen Módulo Inicio</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="nuevoImgInicio" data-toggle="tooltip" data-placement="left" title="1.1.5 Nuevo Usuario">
                                                <i class="fa-solid fa-image"></i></i>&nbsp;&nbsp; Registrar Imagen Módulo Inicio</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT * FROM imagenes ORDER BY modulo DESC";
                                } else if ($verTablaImgInicio == 1) {
                                    $query = "SELECT * FROM imagenes ORDER BY modulo DESC";
                                } else {
                                    $query = "SELECT * FROM imagenes WHERE id_imagen = 0";
                                }
                                $query = "SELECT * FROM imagenes ORDER BY modulo DESC";
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaImgInicio == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableVarios" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre Imagen</th>
                                                <th>Titulo</th>
                                                <th>Subtitulo</th>
                                                <th>Descripción</th>
                                                <th>Identificador</th>
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
                                                        <?php echo $row['file'] ?>
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
                                                        <?php echo $row['modulo'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Editar Imagen Módulo Inicio">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateImgInicio.php?id=<?php echo $row['id_imagen'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php  } else if ($editarImgInicio == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateImgInicio.php?id=<?php echo $row['id_imagen'] ?>"><i class="fas fa-edit"></i> </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="editarImgInicio"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Eliminar Imagen Módulo inicio">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#eliminarImgInico<?php echo $row['id_imagen'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($eliImgInicio   == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#eliminarImgInico<?php echo $row['id_imagen'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliImgInicio"><i class="fas fa-trash-alt"></i>
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
                                                    require '../componentsAdmin/modal-eliminarImgInicio.php';
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
                                                <th>Ruta</th>
                                                <th>Titulo</th>
                                                <th>Subtitulo</th>
                                                <th>Descripción</th>
                                                <th>Módulo</th>
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
    require '../componentsAdmin/scripts-dataTables.php'
    ?>
</body>
<!-- Ajax Jquery -->
<script src="../src/js/ajax.js"></script>
<script>
    $('.btnBorrarImgInicio').click(function(e) {
        e.preventDefault();
        if (confirm("¿Estás seguro de eliminar esta Imagen? Una vez borrado ya no se podrá recuperar la información.")) {
            var id = $(this).attr("id_imagen");

            var dataString = 'id=' + id;
            url = "../delete/deleteImgInicio.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data) {
                    window.location.href = "crudImgInicio.php";
                    $('#respuesta').html(data);
                }
            });
        }
        return false;
    });
</script>

</html>