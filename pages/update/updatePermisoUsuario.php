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

$verTablaUsuario = (!empty($_POST['verTablaUsuario'])) ? $_POST['verTablaUsuario'] : 0;
$editarUsu = (!empty($_POST['editarUsu'])) ? $_POST['editarUsu'] : 0;
$asignarCon = (!empty($_POST['asignarCon'])) ? $_POST['asignarCon'] : 0;
$eliminarUsu = (!empty($_POST['eliminarUsu'])) ? $_POST['eliminarUsu'] : 0;
$asignarPer = (!empty($_POST['asignarPer'])) ? $_POST['asignarPer'] : 0;
$nuevoUsu = (!empty($_POST['nuevoUsu'])) ? $_POST['nuevoUsu'] : 0;
$verTablaImgInicio = (!empty($_POST['verTablaImgInicio'])) ? $_POST['verTablaImgInicio'] : 0;
$nuevoImgInicio = (!empty($_POST['nuevoImgInicio'])) ? $_POST['nuevoImgInicio'] : 0;
$editarImgInicio = (!empty($_POST['editarImgInicio'])) ? $_POST['editarImgInicio'] : 0;
$eliImgInicio = (!empty($_POST['eliImgInicio'])) ? $_POST['eliImgInicio'] : 0;

$query = "UPDATE permisos SET verTablaUsuario = '$verTablaUsuario', editarUsu = '$editarUsu', asignarCon = '$asignarCon', eliminarUsu = '$eliminarUsu', asignarPer = '$asignarPer', nuevoUsu = '$nuevoUsu', verTablaImgInicio = '$verTablaImgInicio', nuevoImgInicio = '$nuevoImgInicio', editarImgInicio = '$editarImgInicio', eliImgInicio = '$eliImgInicio' WHERE id_usuario = $id_usuario";
var_dump($query);


 $resultado = mysqli_query($conexion, $query);
 if ($resultado) {
     echo "<div class='alert alert-success' role='alert'>
                   <p><strong>¡Los permisos se actualizaron correctamente!</strong></p>
                   </div>";
 } else {
     echo "<div class='alert alert-danger' role='role'>
               <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
               </div>";
 }
 desconectar();
?>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut(1500);
        }, 3000)
        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 3000);
    });
</script>