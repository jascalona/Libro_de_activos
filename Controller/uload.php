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
            echo '<script>alert("Su REgistro fue Cargado con Exito!")</script>';
        } else {
            echo '<script>alert("Ha Ocurrido un error de Conexion, comuniquese con el administrador de sistemas!")</script>';
        }
    
    } else {
        echo '<script>alert("Asegurese de llenar todos los campos!")</script>';

    }
}

mysqli_close($conexion)

?>