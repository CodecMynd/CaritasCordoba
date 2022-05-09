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

$nombrecompleto =  $_POST['nombres'];
$email =  $_POST['email'];
$subject =  $_POST['asunto'];
$message =  $_POST['mensaje'];
$tel = $_POST['tel'];

if ($nombrecompleto == '' || $email == '' || $subject == '' || $message == '' || $tel == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, todos los campos son requeridos</strong></p>
    </div>";
    exit;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de email invalido </p>
    </div>";
    exit;
} else if ($tel == 14) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de telefono es de 10 dígitos</p>
    </div>";
    exit;
} else {
    $query = "INSERT INTO contacto(nombreCompleto, correoElectronico, asunto, mensaje, tel, id_CapC, fecha_creacion) 
    VALUES ('$nombrecompleto', '$email', '$subject', '$message', '$tel', $id, '$date')";
   $resultado = mysqli_query($conexion, $query);
    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                <p><strong>¡Se registro su respuesta exitosamente!</strong></p>
                </div>";
    } else {
        echo "<div class='alert alert-danger' role='role'>
            <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
            </div>";
    }
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