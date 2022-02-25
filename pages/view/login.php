<!DOCTYPE html>
<html lang="es">

<head>
    <!-- meta, link, CSS, plugins, querys -->
    <?php
    include '../components/querys.php';
    include '../components/head.php';
    ?>
    <!-- Titulo de la pagina -->
    <title>Log in | Cáritas Córdoba A.C.</title>

</head>

<body>
    <div class="preloader">
        <img src="../../src/img/preloader/preloader.gif" alt="">
    </div>
    <div id="particles-js"></div>

    <section class="d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="signup">
                        <div class="row">
                            <div class="col-md-5 signup-greeting overlay" style="background-image: url(../../src/img/login/login.jpg);">
                                <img src="images/logo-signup.png" alt="logo">
                                <h4>Bienvenido!</h4>
                                <p>Acceso al control de la Aplicación Web para la gestión de programas y beneficiarios de los servicios de asistencia social de Cáritas de Córdoba A.C.</p>
                            </div>
                            <div class="col-md-7" style="background-color: rgba(0, 0, 0, .2);">
                                <div class="signup-form">
                                <form action="../../config/check-login.php" method="POST">
                                        <div class="form-row">
                                            <div class="col-md-12 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="20" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu nombre de usuario" required pattern="[A-Za-z0-9 _-]{1,20}">
                                                    <label for="floatingInput" class="pl-5">Usuario</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-unlock"></i></span>
                                                    </div>
                                                    <input name="pass" id="pass" type="password" class="form-control" placeholder="Apellido Materno" required maxlength="12" data-toggle="tooltip" data-placement="bottom" title="Ingresa tu contraseña"  required pattern="[A-Za-z0-9_-]{1,12}">
                                                    <label for="floatingInput" class="pl-5">Contraseña</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Acceder</button>
                                            <a class="btn btn-primary text-white" href="../../index.php"> Salir</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    /* scripts */
    include '../components/scripts.php';
    ?>
</body>

</html>