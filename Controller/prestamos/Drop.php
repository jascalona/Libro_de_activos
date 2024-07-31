<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql=$conexion->query(" DELETE FROM prest WHERE $id=id ");
    if ($sql==1) {
        echo '<script>alert("Registro Eliminado!")</script>';
    }
} else {
    echo '<script>alert("Ha Ocurrido un Error")</script>';

}
