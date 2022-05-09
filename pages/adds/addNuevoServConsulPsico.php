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
$subtitulo = $_POST['subtitulo'];
$descripcion = $_POST['descripcion'];
$ruta1 = 'Servicio Consulta Psicológica';
$modulo = 'Servicio Consulta Psicológica';

if ($titulo == '' || $subtitulo == '' || $descripcion == '') {
    echo "<div class='alert alert-danger' role='role'>
     <p><strong>Error, todos los campos son requeridos</strong></p>
     </div>";
    exit;
}

($_FILES["ruta"]["type"] == "image/jpg")
    || ($_FILES["ruta"]["type"] == "image/jpeg")
    || ($_FILES["ruta"]["type"] == "image/png")
    || ($_FILES["ruta"]["type"] == "image/gif");

move_uploaded_file($_FILES["ruta"]["tmp_name"], "../../src/img/servicios/consultapsicologica/" . $_FILES['ruta']['name']);
//more code here...
//  echo '../src/img/inicio/'.$_FILES['ruta']['name'];

$file = $_FILES['ruta']['name'];
$directorio = 'src/img/banner';
$ruta = $directorio . "/" . $file;



($_FILES["ruta2"]["type"] == "image/jpg")
    || ($_FILES["ruta2"]["type"] == "image/jpeg")
    || ($_FILES["ruta2"]["type"] == "image/png")
    || ($_FILES["ruta2"]["type"] == "image/gif");

move_uploaded_file($_FILES["ruta2"]["tmp_name"], "../../src/img/servicios/consultapsicologica/" . $_FILES['ruta2']['name']);
//more code here...
//  echo '../src/img/inicio/'.$_FILES['ruta']['name'];

$file2 = $_FILES['ruta2']['name'];
$directorio = 'src/img/banner';
$ruta = $directorio . "/" . $file2;

$query = "INSERT INTO servicios(titulo, subtitulo, descripcion, modulo, imgBanner, imgPrincipal, fechaRegistro, id_capC) VALUES ('$titulo', '$subtitulo', '$descripcion', '$modulo', '$file', '$file2', '$date', '$id')";
$resultado = mysqli_query($conexion, $query);
// var_dump($query);

 if ($resultado) {
     echo "<div class='alert alert-success' role='alert'>
           <p><strong>Registro Servicio Consulta Psicológica ingresado correctamente!</strong></p>
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