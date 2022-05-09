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

$descripcion = $_POST['descripcion'];
$modulo = $_POST['modulo'];
$mes_anio = $_POST['mes_anio'];

if ($descripcion == '' || $modulo == '' || $mes_anio == '') {
    echo "<div class='alert alert-danger' role='role'>
     <p><strong>Error, todos los campos son requeridos</strong></p>
     </div>";
    exit;
}

($_FILES["ruta"]["type"] == "image/jpg")
    || ($_FILES["ruta"]["type"] == "image/jpeg")
    || ($_FILES["ruta"]["type"] == "image/png")
    || ($_FILES["ruta"]["type"] == "image/gif");

move_uploaded_file($_FILES["ruta"]["tmp_name"], "../../src/img/servicios/escuchaCasos/galeria/" . $_FILES['ruta']['name']);
//more code here...
//  echo '../src/img/inicio/'.$_FILES['ruta']['name'];

$file = $_FILES['ruta']['name'];
$directorio = 'src/img/banner';
$ruta = $directorio . "/" . $file;

$query = "INSERT INTO galeriaservicios(file, descripcion, mes_anio, modulo, fechaRegistro, id_capC) VALUES ('$file', '$descripcion', '$mes_anio', '$modulo','$date', '$id')";
$resultado = mysqli_query($conexion, $query);
// var_dump($query);

 if ($resultado) {
     echo "<div class='alert alert-success' role='alert'>
           <p><strong>Registro Imagenes a Galerias de Servicios ingresado correctamente!</strong></p>
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