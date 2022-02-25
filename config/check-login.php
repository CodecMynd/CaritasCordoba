<?php
require 'functions.php';
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

conectar();

//validar tus datos mediante la funcion validarLogin
if(validarLogin($usuario, $pass)){
    $id = $_SESSION['id_usuario'];

    //acedemos al sistemas
    if(esAdmin())
    header('Location: ../pages/admin/panelAdmin.php');
    else header('Location: ../pages/admin/panelAdmin.php');
}else{
    //si no es verdadero regresamos al formulario inicial
?>

<script>
    alert('Los datos ingresados son incorrectos.')
    location.href = '../index.php';
</script>

<?php
desconectar();
}
?>