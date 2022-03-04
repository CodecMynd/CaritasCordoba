<?php
require '../componentsAdmin/head-main.php';
?>
<title>Panel <?php if ($admin == 1) {
                    echo 'Admin';
                } else {
                    echo 'Usuario';
                } ?> | <?php echo $nomComp ?></title>

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
                        <div class="col-sm-12">
                            <h1 class="m-0 bienvenido" style="font-size:2vw">Bienvenido <?php if ($admin == 1) {
                                                                                            echo 'Admin';
                                                                                        } else {
                                                                                            echo 'Usuario';
                                                                                        } ?>: <strong><?php echo $nomComp ?></strong></h1>

                        </div>
                    </div>
                </div>
            </div>

            <!-- small box-->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>4</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>4</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>4</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>4</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>4</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>4</h3>
                                    <p>Usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- /small box-->
        </div>
        <?php
        require '../componentsAdmin/footer.php';
        ?>
    </div>
    <?php
    require '../componentsAdmin/scripts-main.php';
    ?>
</body>

</html>