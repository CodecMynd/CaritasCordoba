<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_usuario = $_POST['id_usuario'];

try {
  $conexion->autocommit(FALSE);

  $query = ("DELETE FROM usuarios WHERE id_usuario = $id_usuario");
  $resultado = mysqli_query($conexion, $query);
  // var_dump($query);

  $queryD = ("DELETE FROM permisos WHERE id_usuario = $id_usuario ");
  $resultadoD = mysqli_query($conexion, $queryD);
  // var_dump($queryD);

  $conexion->commit();

  echo "<div class='alert alert-success' role='alert'>
<p><strong>Usuario Eliminado correctamente!</strong></p>
</div>";
  echo '<script>
alert("Usuario eliminado correctamente")
location.href = "../admin/crudUsuarios.php";
</script>';
} catch (Exception $e) {
  $conexion->rollback();

  echo '<script>
 alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: ' . $e->getMessage() . ' )
 location.href = "../admin/crudUsuarios.php";
 </script>';
}

desconectar();
