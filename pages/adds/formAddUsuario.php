<?php
require '../componentsAdmin/head-main.php';
?>
<title>Nuevo Usuario | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">Nuevo Usuario</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <!-- Form editar usuario -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Todos los campos son obligatorios</h3>
                                </div>
                                <!-- <form id="formNuevoUsuario" action="addNuevoUsuario.php" method="POST"> -->
                                <form id="formNuevoUsuario" autocomplete="off">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-12 my-1 form-group">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input autofocus name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                                    <label for="floatingInput" class="pl-5">Nombre(s)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aPaterno" id="aPaterno" type="text" class="form-control" placeholder="Apellido Paterno " required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">Apellido Paterno </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aMaterno" id="aMaterno" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">Apellido Materno</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                                    </div>
                                                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" onkeyup="javascript:this.value=this.value.toLowerCase();">
                                                    <label for="floatingInput" class="pl-5">Usuario </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                                    </div>
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="Correo" data-inputmask="'alias': 'email'" />
                                                    <label for="floatingInput" class="pl-5">Email <small> *Ej. prueba@prueba.com</small> </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                                    </div>
                                                    <input name="tel" id="tel" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">Tel??fono <small>* 10 d??gitos</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 tipo-usuario">
                                                <div class="input-group">
                                                    <input type="checkbox" data-toggle="toggle" data-on="Admin" data-off="Usuario" data-size="mini" data-onstyle="success" data-offstyle="danger" name="admin" id="admin" value="1" >
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha<small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista<small> *El que registra</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nomComp ?>" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnNuevoUsuario" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar p??gina anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar p??gina"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoUsuario"></div>
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
<script>
    //  iniciar inputMask 
    $(document).ready(function() {
        $(":input").inputmask();
    });
</script>

</html>