<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_recurso = $_POST['id'];
$query = ("DELETE FROM recursos WHERE id_recurso = $id_recurso");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
