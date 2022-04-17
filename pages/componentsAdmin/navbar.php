<nav class="main-header navbar navbar-expand-lg navbar-light navbar-white border-nav">
    <div class="container-fluid">
        <a href="../admin/panelAdmin.php" class="navbar-brand">
            <img src="../../src/img/logo/logoCaritas.png" alt="Cáritas Córdoba Logo" class="brand-image  elevation-5" style="opacity: .8; height:4rem">
            <span style="font-size: 1.5vw" class="title-nav">Cáritas Córdoba &reg;</span> </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../admin/panelAdmin.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Ir al Inicio">| <i class="fa-solid fa-house-user"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Expandir pantalla completa">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa-solid fa-user " data-toggle="tooltip" data-placement="bottom" title="Ir a mi perfil"></i> |</a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header text-dark"><?php echo $nomComp ?></span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target=".modalMiPass<?php echo $id ?>">
                            <i class="fa-solid fa-user-gear"></i> Mi Perfil
                            <span class="float-right text-muted text-sm"></span>
                        </a>
                        <a href="../../config/cerrar-sesion.php" class="dropdown-item">
                            <i class="fa-solid fa-xmark"></i> Cerrar Sesión
                            <span class="float-right text-muted text-sm"><i class="fa-solid fa-hand-wave"></i></span>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-dark">Catálogos</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="../admin/crudUsuarios.php" class="dropdown-item">Usuarios </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-dark">Inicio</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="../admin/crudImgInicio.php" class="dropdown-item">Módulo Página Inicio</a></li>
                        <li><a href="../admin/crudImgNosotros.php" class="dropdown-item">Módulo Página Nosotros</a></li>
                        <li><a href="../admin/crudImgServicios.php" class="dropdown-item">Módulo Página Servicios </a></li>
                        <li><a href="../admin/crudImgQayudar.php" class="dropdown-item">Módulo Página Quiero Ayudar</a></li>
                        <li><a href="../admin/crudImgReportes.php" class="dropdown-item">Módulo Página Reportes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle  text-dark">Directorio</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="../admin/crudImgNosotrosDirectorio.php" class="dropdown-item">Módulo nosotros(Directorio)</a></li>
                        <li><a href="#" class="dropdown-item">3.2 item </a></li>
                        <li><a href="#" class="dropdown-item">3.3 item </a></li>
                        <li><a href="#" class="dropdown-item">3.4 item </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle  disabled">4.0 Menú</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">4.1 item </a></li>
                        <li><a href="#" class="dropdown-item">4.2 item </a></li>
                        <li><a href="#" class="dropdown-item">4.3 item </a></li>
                        <li><a href="#" class="dropdown-item">4.4 item </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->

    </ul>
</nav>