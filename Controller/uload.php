<?php

if (!empty($_POST['btn-p'])) {
    if (!empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['tlf']) and !empty($_POST['solicitud']) 
    and !empty($_POST['renta']) and !empty($_POST['message'])) {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $tlf = $_POST['tlf'];
        $solicitud = $_POST['solicitud'];
        $renta = $_POST['renta'];
        $message = $_POST['message'];

    $sql = $conexion->query("  INSERT INTO prest (name,surname,tlf,solicitud,renta,message,)VALUES('$name','$surname','$tlf','$solicitud','$renta','$message') ");
        if ($sql==1) {
            echo '<div class="alert alert-success" role="alert">Su Asistencia fue Cargada con Exito!</div>';
        } else {
            echo '<div class="alert alert-danger" role="danger">Error de Conexion, Comuniquese con el Administrador de Sistema!</div>';
        }
    
    } else {
        echo '<div class="alert alert-warning" role="warning">Debe llenar los Campos Vacios</div>';
    }
}

mysqli_close($conexion)

?>