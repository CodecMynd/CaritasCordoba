<?php
require '../componentsAdmin/head-main.php';

// consulta sql 
$id_recurso = $_GET['id'];
$query = "SELECT * FROM recursos WHERE id_recurso = $id_recurso";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$m = $row['modulo'];
?>

<title>Edición Imagen Módulo Inicio | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">Eliminar Imagen Módulo Inicio </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Edición Imagenes Inico</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Archivo Seleccionado</h3>
                                </div>

                                <!-- <form id="formDeleteImgInicio" action="../delete/deleteImgInicio.php" method="POST"> -->
                                <form id="formDeleteImgInicio">
                                    <div class="card-body">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    ¿Deseas Eliminar Imagen Módulo Inicio?
                                                </h5>
                                            </div>
                                            <div class="modal-body text-center">
                                                <h4>Nombre:
                                                    <strong class="margin-auto__content">
                                                        <?php echo $row['file'] ?>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div class='row justify-content-center'>
                                                    <input type="text" name="id_recurso" id="id_recurso" value="<?php echo $row['id_recurso']; ?>">
                                                    <input type="text" name="file" id="file" value="<?php echo $row['file']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnDeleteImgInicio" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-ban"></i> Eliminar</buttom>
                                            </div>
                                            <div class="col-md-4 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaDeleteImgInicio"></div>
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
    <script src="../src/js/ajax.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnDeleteImgInicio').click(function() {
                $.ajax({
                        url: '../delete/deleteImgInicio.php',
                        type: 'POST',
                        data: $('#formDeleteImgInicio').serialize(),
                    })
                    .done(function(res) {
                        $('#respuestaDeleteImgInicio').html(res)
                    })
            });
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnDeleteImgInicio").on('click', function() {
            $("#btnDeleteImgInicio").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteImgInicio").css('visibility', 'visible');
            }, 300000);
        });
    </script>
</body>

</html>