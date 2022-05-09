<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$idServicio = $_POST['idServicio'];
$titulo =  $_POST['titulo'];
$subtitulo =  $_POST['subtitulo'];
$modulo =  $_POST['modulo'];
$descripcion =  $_POST['descripcion'];


$conexion->autocommit(FALSE);
try {

    // Insertamos tabla proyectos
    $query = "UPDATE servicios SET titulo = '$titulo', subtitulo = '$subtitulo', modulo = '$modulo', descripcion = '$descripcion' WHERE idServicio = '$idServicio' ";
    $resultado = mysqli_query($conexion, $query);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
    <p><strong>Edición Servicio Farmacia actualizado correctamente!</strong></p>
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