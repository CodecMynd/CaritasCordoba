<?php

require '../componentsAdmin/head-main.php';
?>
<title>Asignar Permisos | <?php echo $nomComp ?></title>

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
                            <h1 class="float-left m-0">Asignar Permisos</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $id_usuario = $_GET['id'];
            $query = "SELECT * FROM permisos WHERE id_usuario = $id_usuario";
            $respuesta = mysqli_query($conexion, $query);
            $rowPer = $respuesta->fetch_assoc();


            $queryU = "SELECT * FROM usuarios WHERE  id_usuario =  $id_usuario";
            $resultado = mysqli_query($conexion, $queryU);
            while ($row = $resultado->fetch_assoc()) {
                $user = $row['id_usuario'];
                $nombres = $row['nombres'];
                $aPaterno = $row['aPaterno'];
                $aMaterno = $row['aMaterno'];
                $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
            }
            ?>

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h2 class="card-title">*Asignar permisos a: <strong><?php echo $nombreComp ?></strong> </h2>
                                </div>

                                <form id="formAsigPermUsuario" method="POST">
                                    <div class="seleccionarTodo" id="seleccionarTodo">
                                        <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario ?>">
                                        <div class="card-body">
                                            <section class="content">
                                                <div class="container-fluid">
                                                    <h5 class="mb-2">Habilita los check para asignar los Permisos</h5>
                                                    <div class="row">
                                                        <!-- Usuarios -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>Usuarios</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Editar Usuarios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarUsu" id="editarUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-key"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Asignar Contraseña</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="asignarCon" id="asignarCon" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['asignarCon'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Eliminar Usuario</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliminarUsu" id="eliminarUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliminarUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Asignar Permisos</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="asignarPer" id="asignarPer" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['asignarPer'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-user-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Registrar Usuario</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="nuevoUsu" id="nuevoUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['nuevoUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Ver Tabla Usuarios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaUsuario" id="verTablaUsuario" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaUsuario'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Imagenes Módulo Inicio -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>Imagenes Módulo Inicio</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-circle-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Registrar Imagen Inicio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regImgInicio" id="regImgInicio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regImgInicio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Editar Imagen Inicio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarImgInicio" id="editarImgInicio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarImgInicio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Eliminar Imagen Inicio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliImgInicio" id="eliImgInicio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliImgInicio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Ver Tabla Módulo Página Inicio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaImgInicio" id="verTablaImgInicio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaImgInicio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Imagenes Módulo Nosotros -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>Imagenes Módulo Nosotros</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-circle-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Registrar Imagen Nosotros</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regImgNosotros" id="regImgNosotros" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regImgNosotros'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Editar Imagen Nosotros</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarImgNosotros" id="editarImgNosotros" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarImgNosotros'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Eliminar Imagen Nosotros</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliImgNosotros" id="eliImgNosotros" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliImgNosotros'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Ver Tabla Módulo Nosotros</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaImgNosotros" id="verTablaImgNosotros" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaImgNosotros'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Imagenes Módulo Servicios -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>Imagenes Módulo Servicios</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-circle-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Registrar Imagen Servicios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regImgServicios" id="regImgServicios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regImgServicios'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Editar Imagen Servicios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarImgServicios" id="editarImgServicios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarImgServicios'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Eliminar Imagen Servicios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliImgServicios" id="eliImgServicios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliImgServicios'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Ver Tabla Módulo Servicios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaImgServicios" id="verTablaImgServicios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaImgServicios'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Imagenes Módulo Quiero Ayudar -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>Imagenes Módulo Quiero Ayudar</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-circle-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Registrar Imagen Quiero Ayudar</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regImgQayudar" id="regImgQayudar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regImgQayudar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Editar Imagen Quiero Ayudar</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarImgQayudar" id="editarImgQayudar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarImgQayudar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Eliminar Imagen Quiero Ayudar</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliImgQayudar" id="eliImgQayudar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliImgQayudar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Ver Tabla Módulo Servicios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaImgQayudar" id="verTablaImgQayudar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaImgQayudar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Imagenes Módulo Reportes -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>Imagenes Módulo Reportes</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-circle-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Registrar Imagen Reportes</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regImgReportes" id="regImgReportes" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regImgReportes'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Editar Imagen Reportes</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarImgReportes" id="editarImgReportes" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarImgReportes'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Eliminar Imagen Reportes</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliImgReportes" id="eliImgReportes" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliImgReportes'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Ver Tabla Módulo Servicios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaImgReportes" id="verTablaImgReportes" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaImgReportes'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--******************************************* Separador de Módulos *******************************************-->
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <!--******************************************* Separador de Módulos *******************************************-->
                                                        <!-- Módulo Nosotros Directorio -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>Módulo Nosotros (Directorio)</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-circle-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Registrar Imagen Directorio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regImgNosotrosDirectorio" id="regImgNosotrosDirectorio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regImgNosotrosDirectorio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Editar Imagen Directorio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarImgNosotrosDirectorio" id="editarImgNosotrosDirectorio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarImgNosotrosDirectorio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Eliminar Imagen Directorio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliImgNosotrosDirectorio" id="eliImgNosotrosDirectorio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliImgNosotrosDirectorio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">Ver Tabla Módulo Directorio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaImgNosotrosDirectorio" id="verTablaImgNosotrosDirectorio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaImgNosotrosDirectorio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="card-footer border-footer">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12 align-self-center">
                                                    <buttom type="submit" id="btnUpdatePermisoUsuario" name="save" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                                </div>
                                                <div class="col-md-2 col-sm-12 align-self-center">
                                                    <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                </div>
                                                <br>
                                                <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                    <div id="respuestaUpdatePermisoUsuario"></div>
                                                </div>
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

</body>

</html>