<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$file = $_POST['file'];
$id_recurso = $_POST['id_recurso'];
$ruta = '../../src/img/imgModuloNosotros/'.$file;

$conexion->autocommit(FALSE);
try {

$query = ("DELETE FROM recursos WHERE id_recurso = $id_recurso");
$resultado = mysqli_query($conexion, $query);

unlink($ruta);

$conexion->commit();

echo '<script>
       alert("¡Registro eliminado correctamente")
       location.href = "../admin/crudImgNosotros.php";
        </script>';
} catch (Exception $e) {
$conexion->rollback();

echo '<script>
       alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: ' . $e->getMessage() . ' )
       location.href = "../admin/crudImgNosotros.php";
       </script>';
}

desconectar();
