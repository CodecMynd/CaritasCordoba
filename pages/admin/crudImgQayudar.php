<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php'
?>
<title>Panel Imagenes Página Quiero Ayudar | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0 bienvenido" style="font-size:2vw">Tabla <strong>Imagenes Página Quiero Ayudar</strong></h1>

                        </div>
                        <!-- migas de pan -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Imagenes Quiero ayudar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Imagenes del Módulo Quiero Ayudar</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 or $regImgQayudar == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddImgQayudar.php" data-toggle="tooltip" data-placement="left" title="Registrar Imagen Módulo Quiero Ayudar">
                                                <i class="fa-solid fa-image"></i></i>&nbsp;&nbsp; Registrar Imagen Módulo Quiero Ayudar</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regImgQayudar" data-toggle="tooltip" data-placement="left" title="Registrar Imagen Módulo Quiero Ayudar">
                                                <i class="fa-solid fa-image"></i></i>&nbsp;&nbsp; Registrar Imagen Módulo Quiero Ayudar</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1 or $verTablaImgQayudar == 1) {
                                    $query = "SELECT id_recurso, file, modulo FROM recursos WHERE ruta = 'quieroayudar' ORDER BY modulo DESC";
                                } else {
                                    $query = "SELECT * FROM recursos WHERE id_recurso = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaImgQayudar == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableVarios" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nombre Imagen</th>
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
                                                        <span class='badge badge-dark badge-pill'><?php echo $row['id_recurso'] ?></span>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['file'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['modulo'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Quiero Ayudar"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Editar Imagen Módulo Quiero Ayudar">
                                                                                <?php if ($super == 1 or $editarImgQayudar == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateImgQayudar.php?id=<?php echo $row['id_recurso'] ?>"><i class="fas fa-edit"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="editarImgQayudar"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="Eliminar Imagen Módulo Quiero ayudar">
                                                                                <?php if ($super == 1 or $eliImgQayudar   == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#eliminarImgQayudar<?php echo $row['id_recurso'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliImgQayudar"><i class="fas fa-trash-alt"></i>
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
                                                    require '../componentsAdmin/modal-eliminarImgQayudar.php';
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
                                                <th>ID</th>
                                                <th>Nombre Imagen</th>
                                                <th>Identificador</th>
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
    $('.btnBorrarImgQayudar').click(function(e) {
        e.preventDefault();
        if (confirm("¿Estás seguro de eliminar esta Imagen? Una vez borrado ya no se podrá recuperar la información.")) {
            var id = $(this).attr("id_recurso");

            var dataString = 'id=' + id;
            url = "../delete/deleteImgQayudar.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data) {
                    window.location.href = "crudImgQayudar.php";
                    $('#respuesta').html(data);
                }
            });
        }
        return false;
    });

    $(document).ready(function() {
        $('#btnDeleteImgQayudar').click(function() {
            $.ajax({
                    url: '../delete/deleteImgQayudar.php',
                    type: 'POST',
                    data: $('#formDeleteImgQayudar').serialize(),
                })
                .done(function(res) {
                    $('#respuestaDeleteImgQayudar').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnDeleteImgQayudar").on('click', function() {
        $("#btnDeleteImgQayudar").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnDeleteImgQayudar").css('visibility', 'visible');
        }, 300000);
    });
</script>

</html>