<?php

if (!empty($_POST['btn-p'])) {
    if (!empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['tlf']) and !empty($_POST['solicitud']) and !empty($_POST['date'])
    and !empty($_POST['porcentaje']) and !empty($_POST['comision']) and !empty($_POST['total_a_p']) and !empty($_POST['prima']) and !empty($_POST['cuotas']) and !empty($_POST['message'])) {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $tlf = $_POST['tlf'];
        $solicitud = $_POST['solicitud'];
        $date = $_POST['date'];
        $porcentaje = $_POST['porcentaje'];
        $comision = $_POST['comision'];
        $total_a_p = $_POST['total_a_p'];
        $prima = $_POST['prima'];
        $cuotas = $_POST['cuotas'];
        $message = $_POST['message'];

        $sql = $conexion->query(" INSERT INTO prest (name,surname,tlf,solicitud,date,porcentaje,comision,total_a_p,prima,cuotas,message)VALUES('$name','$surname','$tlf','$solicitud','$date','$porcentaje','$comision','$total_a_p','$prima','$cuotas','$message') ");
        if ($sql==1) {
            echo '<script>alert("Su Registro fue Cargado con Exito!")</script>';
        } else {
            echo '<script>alert("Ha Ocurrido un error de Conexion, comuniquese con el administrador de sistemas!")</script>';
        }
    
    } else {
        echo '<script>alert("Asegurese de llenar todos los campos!")</script>';

    }
}

