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

$titulo =  $_POST['titulo'];
$subtitulo =  $_POST['subtitulo'];
$modulo =  (!empty($_POST['modulo'])) ? $_POST['modulo'] : 0;
$descripcion =  $_POST['descripcion'];

if ($modulo == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Selecciona una opción de la lista desplegable</strong></p>
    </div>";
    exit;
}

if (($_FILES["ruta"]["type"] == "image/pjpeg")
    || ($_FILES["ruta"]["type"] == "image/jpeg")
    || ($_FILES["ruta"]["type"] == "image/png")
    || ($_FILES["ruta"]["type"] == "image/gif")
) {
    if (move_uploaded_file($_FILES["ruta"]["tmp_name"], "../../src/img/imgModuloInicio/" . $_FILES['ruta']['name'])) {
        //more code here...
        //  echo '../src/img/inicio/'.$_FILES['ruta']['name'];

        $file = $_FILES['ruta']['name'];
        $directorio = 'src/img/banner';
        $ruta = $directorio . "/" . $file;

        $query = "INSERT INTO imagenes(file, ruta, titulo, subtitulo, descripcion, modulo, fecha_creacion, id_capC) VALUES ('$file', '$ruta', '$titulo', '$subtitulo', '$descripcion', '$modulo', '$date', $id)";
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
    } else {
        echo "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error no se encontro la carpeta especificada!</strong></p>
        </div>";
    }
} else {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>¡Error no es el formato especificado!</strong></p>
    </div>";
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