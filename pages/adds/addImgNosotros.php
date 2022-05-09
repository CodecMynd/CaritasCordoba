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

$titulo =  '--';
$subtitulo = '--';
$modulo =  (!empty($_POST['modulo'])) ? $_POST['modulo'] : '';
$descripcion =  '--';

if ($modulo == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Selecciona una opción de la lista desplegable</strong></p>
    </div>";
    exit;
}else if( $_FILES["ruta"]["type"] == ''){
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Selecciona una Imagen</strong></p>
    </div>";
    exit;
}

try {
    $conexion->autocommit(FALSE);

    ($_FILES["ruta"]["type"] == "image/jpg")
        || ($_FILES["ruta"]["type"] == "image/jpeg")
        || ($_FILES["ruta"]["type"] == "image/png")
        || ($_FILES["ruta"]["type"] == "image/gif");

    move_uploaded_file($_FILES["ruta"]["tmp_name"], "../../src/img/imgModuloNosotros/" . $_FILES['ruta']['name']);
    //more code here...
    //  echo '../src/img/inicio/'.$_FILES['ruta']['name'];

    $file = $_FILES['ruta']['name'];
    $directorio = 'src/img/banner';
    $ruta = $directorio . "/" . $file;

    $ruta1 = 'nosotros';

    $query = "INSERT INTO recursos(file, ruta, titulo, subtitulo, descripcion, modulo, fecha_creacion, id_capC) VALUES ('$file', '$ruta1', '$titulo', '$subtitulo', '$descripcion', '$modulo', '$date', $id)";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    $conexion->commit(TRUE);
    echo "<div class='alert alert-success' role='alert'>
        <p><strong>Imagen ingresada correctamente!</strong></p>
     </div>";
} catch (Exception $e) {
    $conexion->rollback();
    echo 'Error detectado: ',  $e->getMessage(), "\n";
    echo "<div class='alert alert-danger' role='role'>
             <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
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
        }, 5000);
    });
</script>