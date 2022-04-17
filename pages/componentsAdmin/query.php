<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}

conectar();
$id = $_SESSION['id_usuario'];
ini_set('date.timezone', 'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$dateFront = date('d-m-Y H:i:s');

//query usuarios ------------------------------------------------------------------------------------------
$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
    $nombres = $row['nombres'];
    $aPaterno = $row['aPaterno'];
    $aMaterno = $row['aMaterno'];
    $usuario = $row['usuario'];
    $email = $row['email'];
    $tel = $row['tel'];
    $passUser = $row['pass'];
    $admin = $row['admin'];
    $super = $row['super'];
    $tel = $row['tel'];


    $nomComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
}
// query Permisos ------------------------------------------------------------------------------------------
$query = mysqli_query($conexion, "SELECT * FROM permisos WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
    $verTablaUsuario = $row['verTablaUsuario'];
    $editarUsu = $row['editarUsu'];
    $asignarCon = $row['asignarCon'];
    $eliminarUsu = $row['eliminarUsu'];
    $asignarPer = $row['asignarPer'];
    $nuevoUsu = $row['nuevoUsu'];
    $verTablaImgInicio = $row['verTablaImgInicio'];
    $regImgInicio = $row['regImgInicio'];
    $editarImgInicio = $row['editarImgInicio'];
    $eliImgInicio = $row['eliImgInicio'];
    $regImgNosotros = $row['regImgNosotros'];
    $editarImgNosotros = $row['editarImgNosotros'];
    $eliImgNosotros = $row['eliImgNosotros'];
    $verTablaImgNosotros = $row['verTablaImgNosotros'];
    $regImgNosotrosDirectorio = $row['regImgNosotrosDirectorio']; 
    $editarImgNosotrosDirectorio = $row['editarImgNosotrosDirectorio'];
    $eliImgNosotrosDirectorio = $row['eliImgNosotrosDirectorio'];
    $verTablaImgNosotrosDirectorio = $row['verTablaImgNosotrosDirectorio'];
    $regImgQayudar = $row['regImgQayudar'];
    $editarImgQayudar = $row['editarImgQayudar'];
    $eliImgQayudar = $row['eliImgQayudar'];
    $verTablaImgQayudar = $row['verTablaImgQayudar'];
    $regImgReportes = $row['regImgReportes'];
    $editarImgReportes = $row['editarImgReportes'];
    $eliImgReportes = $row['eliImgReportes'];
    $verTablaImgReportes = $row['verTablaImgReportes'];
    $regImgServicios = $row['regImgServicios'];
    $editarImgServicios = $row['editarImgServicios'];
    $eliImgServicios = $row['eliImgServicios'];
    $verTablaImgServicios = $row['verTablaImgServicios'];
}




// Mostar Modal al recargar pagína en panelAdmin ------------------------------------------------------------------------------------------
if ($passUser === 'SIN_PASSWORD') {
    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        $(".sin_contraseña").modal("toggle")
    });
</script>';
}