<?php
require '../componentsAdmin/head-main.php';
require '../componentsAdmin/head-dataTables.php'
?>
<title>Panel mensajes de usuario | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0 bienvenido" style="font-size:2vw">Tabla <strong>Mensajes de usuarios</strong></h1>

                        </div>
                        <!-- migas de pan -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../admin/panelAdmin.php"><i class="fa-solid fa-house-user"></i> Home</a></li>
                                <li class="breadcrumb-item active"><i class="fa-solid fa-image"></i> Mensajes de usuarios</li>
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
                                    <h3 class="card-title">Mensajes de usuarios</h3>

                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1 or $verTablaMensajesUsuarios == 1) {
                                    $query = "SELECT idContacto, nombreCompleto, correoElectronico, asunto, mensaje, tel FROM contacto";
                                } else {
                                    $query = "SELECT * FROM contacto WHERE idContacto = 0";
                                }
                                $resultadoUsu = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaMensajesUsuarios == 0) { ?>
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
                                                <th>Nombre completo</th>
                                                <th>Correo electronico</th>
                                                <th>Asunto</th>
                                                <th>Mensaje</th>
                                                <th>Telefono</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultadoUsu->fetch_assoc()) { ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <span class='badge badge-dark badge-pill'><?php echo $row['idContacto'] ?></span>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombreCompleto'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['correoElectronico'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['asunto'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['mensaje'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['tel'] ?>
                                                    </td>
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
                                                <th>Nombre completo</th>
                                                <th>Correo electronico</th>
                                                <th>Asunto</th>
                                                <th>Mensaje</th>
                                                <th>Telefono</th>
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
</html>