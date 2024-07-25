<?php

if (!empty($_POST['btn-prestamos'])) {
    
    $name = $_POST['name_p'];
    $surname = $_POST['surname_p'];
    $tld = $_POST['tld_p'];
    $solicitud = $_POST['solicitud_p'];
    $renta = $_POST['renta_p'];
    $mesagge = $_POST['message_p'];

    $sql = $Conn->query( " INSERT INTO libro_de_ingresos (name,surname,tlf,solicitud,renta,message) VALUES ('$name_p','$surname_p','$tlf_p','$renta','$message') " );
        if ($sql == 1) {
            echo ('<script>alert("Su registro de ha Cargado Exitosamente!")</script>');

        } else {
            echo ('<script>alert("Ha Ocurrido un error, Comuniquese con el administrador de sistemas")</script>');
        } 
        
    }
        else {
            echo ('<script>alert("Error de registros, debe llenar todos los campos")</script>');
        } 
     