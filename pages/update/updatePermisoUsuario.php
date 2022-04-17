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
$regImgInicio = (!empty($_POST['regImgInicio'])) ? $_POST['regImgInicio'] : 0;
$editarImgInicio = (!empty($_POST['editarImgInicio'])) ? $_POST['editarImgInicio'] : 0;
$eliImgInicio = (!empty($_POST['eliImgInicio'])) ? $_POST['eliImgInicio'] : 0;
$regImgNosotros = (!empty($_POST['regImgNosotros'])) ? $_POST['regImgNosotros'] : 0; 
$editarImgNosotros = (!empty($_POST['editarImgNosotros'])) ? $_POST['editarImgNosotros'] : 0; 
$eliImgNosotros = (!empty($_POST['eliImgNosotros'])) ? $_POST['eliImgNosotros'] : 0; 
$verTablaImgNosotros = (!empty($_POST['verTablaImgNosotros'])) ? $_POST['verTablaImgNosotros'] : 0;
$regImgNosotrosDirectorio = (!empty($_POST['regImgNosotrosDirectorio'])) ? $_POST['regImgNosotrosDirectorio'] : 0;
$editarImgNosotrosDirectorio = (!empty($_POST['editarImgNosotrosDirectorio'])) ? $_POST['editarImgNosotrosDirectorio'] : 0;
$eliImgNosotrosDirectorio = (!empty($_POST['eliImgNosotrosDirectorio'])) ? $_POST['eliImgNosotrosDirectorio'] : 0;
$verTablaImgNosotrosDirectorio = (!empty($_POST['verTablaImgNosotrosDirectorio'])) ? $_POST['verTablaImgNosotrosDirectorio'] : 0;
$regImgQayudar = (!empty($_POST['regImgQayudar'])) ? $_POST['regImgQayudar'] : 0;
$editarImgQayudar = (!empty($_POST['editarImgQayudar'])) ? $_POST['editarImgQayudar'] : 0;
$eliImgQayudar = (!empty($_POST['eliImgQayudar'])) ? $_POST['eliImgQayudar'] : 0;
$verTablaImgQayudar = (!empty($_POST['verTablaImgQayudar'])) ? $_POST['verTablaImgQayudar'] : 0;
$regImgReportes = (!empty($_POST['regImgReportes'])) ? $_POST['regImgReportes'] : 0;
$editarImgReportes = (!empty($_POST['editarImgReportes'])) ? $_POST['editarImgReportes'] : 0;
$eliImgReportes = (!empty($_POST['eliImgReportes'])) ? $_POST['eliImgReportes'] : 0;
$verTablaImgReportes = (!empty($_POST['verTablaImgReportes'])) ? $_POST['verTablaImgReportes'] : 0;
$regImgServicios = (!empty($_POST['regImgServicios'])) ? $_POST['regImgServicios'] : 0;
$editarImgServicios = (!empty($_POST['editarImgServicios'])) ? $_POST['editarImgServicios'] : 0;
$eliImgServicios = (!empty($_POST['eliImgServicios'])) ? $_POST['eliImgServicios'] : 0;
$verTablaImgServicios = (!empty($_POST['verTablaImgServicios'])) ? $_POST['verTablaImgServicios'] : 0;

$query = "UPDATE permisos SET verTablaUsuario = '$verTablaUsuario', editarUsu = '$editarUsu', asignarCon = '$asignarCon', eliminarUsu = '$eliminarUsu', asignarPer = '$asignarPer', nuevoUsu = '$nuevoUsu', verTablaImgInicio = '$verTablaImgInicio', regImgInicio = '$regImgInicio', editarImgInicio = '$editarImgInicio', eliImgInicio = '$eliImgInicio', regImgNosotros = '$regImgNosotros', editarImgNosotros = '$editarImgNosotros', eliImgNosotros = '$eliImgNosotros', verTablaImgNosotros = '$verTablaImgNosotros', regImgNosotrosDirectorio = '$regImgNosotrosDirectorio', editarImgNosotrosDirectorio = '$editarImgNosotrosDirectorio', eliImgNosotrosDirectorio = '$eliImgNosotrosDirectorio', verTablaImgNosotrosDirectorio = '$verTablaImgNosotrosDirectorio', regImgQayudar = '$regImgQayudar', editarImgQayudar = '$editarImgQayudar', eliImgQayudar = '$eliImgQayudar', verTablaImgQayudar = '$verTablaImgQayudar', regImgReportes = '$regImgReportes', editarImgReportes = '$editarImgReportes', eliImgReportes = '$eliImgReportes', verTablaImgReportes = '$verTablaImgReportes', regImgServicios = '$regImgServicios', editarImgServicios = '$editarImgServicios', eliImgServicios = '$eliImgServicios', verTablaImgServicios = '$verTablaImgServicios' WHERE id_usuario = $id_usuario";
// var_dump($query);
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
