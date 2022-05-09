<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
       header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_galServicio = $_POST['id_galServicio'];
$file = $_POST['file'];


$ruta = '../../src/img/servicios/escuchaCasos/galeria/' . $file;


try {
       $conexion->autocommit(FALSE);

       $query = ("DELETE FROM galeriaservicios WHERE id_galServicio = $id_galServicio");
       $resultado = mysqli_query($conexion, $query);

       unlink($ruta);

       $conexion->commit();

       echo "<div class='alert alert-success' role='alert'>
              <p><strong>¡Registro Eliminado correctamente!</strong></p>
           </div>";
       echo '<script>
       alert("¡Registro eliminado correctamente")
       location.href = "../admin/crudGaleriaServicios.php";
        </script>';
} catch (Exception $e) {
       $conexion->rollback();

       echo '<script>
       alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: ' . $e->getMessage() . ' )
       location.href = "../admin/crudGaleriaServicios.php";
       </script>';
}

desconectar();
