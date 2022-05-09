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
$descripcion =  '--';
$ruta1 = 'contacto';
$modulo = 'contacto';

if ($_FILES["img"]["type"] == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Selecciona una Imagen</strong></p>
    </div>";
    exit;
}
try {
    $conexion->autocommit(FALSE);

    ($_FILES["img"]["type"] == "image/jpg")
        || ($_FILES["img"]["type"] == "image/jpeg")
        || ($_FILES["img"]["type"] == "image/png")
        || ($_FILES["img"]["type"] == "image/gif");

    move_uploaded_file($_FILES["img"]["tmp_name"], "../../src/img/imgModuloContacto/" . $_FILES['img']['name']);
    //more code here...
    //  echo '../src/img/inicio/'.$_FILES['ruta']['name'];

    $file = $_FILES['img']['name'];
    $directorio = 'src/img/banner';
    $ruta = $directorio . "/" . $file;

    $query = "INSERT INTO recursos(file, ruta, titulo, subtitulo, descripcion, modulo, fecha_creacion, id_capC) VALUES ('$file', '$ruta1', '$titulo', '$subtitulo', '$descripcion', '$modulo', '$date', $id)";
    $resultado = mysqli_query($conexion, $query);

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