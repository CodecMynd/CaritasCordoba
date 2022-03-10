<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];


$file = $_POST['file'];
$id_imagen = $_POST['id_imagen'];

unlink("../src/img/inicio/".$file);


$query = ("DELETE FROM imagenes WHERE id_imagen = $id_imagen");
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
  echo '<script type="text/javascript">
     window.history.go(-1);
      </script>';
} else {
  echo '<script type="text/javascript">
     alert("Error");
     window.history.go(-1);
      </script>';
}

desconectar();