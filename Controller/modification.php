<?php

if (!empty($_POST['edit'])) {

    if (!empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['tlf']) and !empty($_POST['solicitud'])
    and !empty($_POST['date']) and !empty($_POST['porcentaje']) and !empty($_POST['comision']) and !empty($_POST['total_a_p']) and !empty($_POST['prima']) 
    and !empty($_POST['cuotas']) and !empty($_POST['abonados']) and !empty($_POST['d_pendientes'])) {
        
        //Almacen var
        $id=$_POST['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $tlf = $_POST['tlf'];
        $solicitud = $_POST['solicitud'];
        $date = $_POST['date'];
        $porcentaje = $_POST['porcentaje'];
        $comision = $_POST['comision'];
        $total_a_p = $_POST['total_a_p'];
        $prima = $_POST['prima'];
        $pagos = $_POST['pagos'];
        $cuotas = $_POST['cuotas'];
        $abonados = $_POST['abonados'];
        $d_pendientes = $_POST['d_pendientes'];

        $sql=$conexion->query(" UPDATE prest SET name='$name', surname='$surname', tlf='$tlf', solicitud=$solicitud, date='$date', porcentaje=$porcentaje, 
        comision=$comision, total_a_p=$total_a_p, prima=$prima, pagos=$pagos, cuotas=$cuotas, abonados=$abonados, d_pendientes=$d_pendientes WHERE id='$id' ");

        if ($sql==1) {
            header('location: ../movimientos.php');
        } else {
            echo '<script>alert("Ha Ocurrido un Error de Conexion!")</script>';
        }
        


    } else {}
    echo '<script>alert("Asegurece de llenar todos los Campos!!")</script>';
}
