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
$imgPrincipal = $_POST['imgPrincipal'];

    if (($_FILES["ruta"]["type"] == "image/jpg")
        || ($_FILES["ruta"]["type"] == "image/jpeg")
        || ($_FILES["ruta"]["type"] == "image/png")
        || ($_FILES["ruta"]["type"] == "image/gif")
    ) {
        if (move_uploaded_file($_FILES["ruta"]["tmp_name"], "../../src/img/servicios/farmacia/" . $_FILES['ruta']['name'])) {
            //more code here...
            //  echo '../src/img/inicio/'.$_FILES['ruta']['name'];

            $file = $_FILES['ruta']['name'];
            $directorio = 'src/img/banner';
            $ruta = $directorio . "/" . $file;

            $ruta1 = '../../src/img/servicios/farmacia/' . $imgPrincipal;       
            unlink($ruta1);

            $query = "UPDATE servicios SET imgPrincipal = '$file' WHERE idServicio = $idServicio";
            // var_dump($query);
            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                echo "<div class='alert alert-success' role='alert'>
          <p><strong>Imagen Principal actualizada correctamente!</strong></p>
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