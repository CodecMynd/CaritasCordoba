<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
       header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$idServicio = $_POST['idServicio'];
$imgBanner = $_POST['imgBanner'];
$imgPrincipal = $_POST['imgPrincipal'];

$ruta = '../../src/img/servicios/farmacia/' . $imgBanner;      
$ruta2 = '../../src/img/servicios/farmacia/' . $imgPrincipal;

try {
       $conexion->autocommit(FALSE);

       $query = ("DELETE FROM servicios WHERE idServicio = $idServicio");
       $resultado = mysqli_query($conexion, $query);

       unlink($ruta);
       unlink($ruta2);

       $conexion->commit();

       echo "<div class='alert alert-success' role='alert'>
              <p><strong>¡Registro Eliminado correctamente!</strong></p>
           </div>";
       echo '<script>
       alert("¡Registro eliminado correctamente")
       location.href = "../admin/crudServFarmacia.php";
        </script>';
} catch (Exception $e) {
       $conexion->rollback();

       echo '<script>
       alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: ' . $e->getMessage() . ' )
       location.href = "../admin/crudServFarmacia.php";
       </script>';
}

desconectar();
