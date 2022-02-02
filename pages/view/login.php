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
        <div class="container" >
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
                                <div class="signup-form" >
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom01">Usuario</label>
                                                <input type="text" class="form-control" id="validationCustom01"required placeholder="Nombre de usuario">
                                                <div class="valid-feedback">
                                                    Correcto!
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom02">Contraseña</label>
                                                <input type="pass" class="form-control" id="validationCustom02" required placeholder="Contraseña">
                                                <div class="valid-feedback">
                                                    Correcto!
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Acceder</button>
                                        <a class="btn btn-primary text-white" href="../../index.php"> Salir</a>
                                    </form>

                                    <script>
                                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                                        (function() {
                                            'use strict';
                                            window.addEventListener('load', function() {
                                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                var forms = document.getElementsByClassName('needs-validation');
                                                // Loop over them and prevent submission
                                                var validation = Array.prototype.filter.call(forms, function(form) {
                                                    form.addEventListener('submit', function(event) {
                                                        if (form.checkValidity() === false) {
                                                            event.preventDefault();
                                                            event.stopPropagation();
                                                        }
                                                        form.classList.add('was-validated');
                                                    }, false);
                                                });
                                            }, false);
                                        })();
                                    </script>
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