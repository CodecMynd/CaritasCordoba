<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$dateH = date('H:i:s');
$id = $_SESSION['id_usuario'];

$nombre =  (!empty($_POST['nombre'])) ? $_POST['nombre'] : '--';
$apellidopaterno =  (!empty($_POST['apellidopaterno'])) ? $_POST['apellidopaterno'] : '--';
$apellidomaterno =  (!empty($_POST['apellidomaterno'])) ? $_POST['apellidomaterno'] : '--';
$puesto =  (!empty($_POST['puesto'])) ? $_POST['puesto'] : '--';
$email =  (!empty($_POST['email'])) ? $_POST['email'] : '--';
$tel =  (!empty($_POST['tel'])) ? $_POST['tel'] : '--';
$descripcion =  (!empty($_POST['descripcion'])) ? $_POST['descripcion'] : '--';
$ruta =  (!empty($_POST['ruta'])) ? $_POST['ruta'] : '--';


($_FILES["ruta"]["type"] == "image/pjpeg")
    || ($_FILES["ruta"]["type"] == "image/jpeg")
    || ($_FILES["ruta"]["type"] == "image/png")
    || ($_FILES["ruta"]["type"] == "image/gif");

    move_uploaded_file($_FILES["ruta"]["tmp_name"], "../../src/img/personal/" . $_FILES['ruta']['name']);
        

        $file = $_FILES['ruta']['name'];
        //$directorio = 'src/img/banner';
       // $ruta = $directorio . "/" . $file;

    //$ruta1 = 'inicio';

        $query = "INSERT INTO directivos(nombreDirec, aPatDirec, aMatDirec, puesto, funcionPuesto, tel, correoElect, id_capC, archivo, fecha_creacion) VALUES ('$nombre', '$apellidopaterno', '$apellidomaterno', '$puesto', '$descripcion', '$tel', '$email', $id, '$file', '$date')";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
          <p><strong>Imagen ingresada correctamente!</strong></p>
          </div>";
            exit;
        } else {
            echo "<div class='alert alert-danger' role='role'>
      <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
      </div>";
            exit;
        }

desconectar();
?>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut(1500);
        }, 3000);

        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 4000);
    });
</script>