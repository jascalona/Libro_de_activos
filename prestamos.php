<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamos</title>

    <!-- STYLE & FRAMEWORKS CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/responsive.css">
    <link rel="stylesheet" href="./CSS/Framework/Bootstrap.css">
    <!-- STYLE & FRAMEWORKS CSS -->

    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- BoxIcons -->

    <!-- BoxIcons -->
     <script src="./JS/Framewrok.js"></script>
     <script src="./JS/calculo_p.js"></script>
    <!-- BoxIcons -->


</head>
<body>
    
        <header class="header">
            <div class="logo">
                <a href="./index.html"><p>LDA</p></a>
            </div>

            

            <div class="responsive">
                
                <div class="setting">
                    <a href=""><i class='bx bx-cog'></i></a>
                </div>

                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class='bx bx-home-smile'></i>
                </a>
        
                <div class="menu">
                
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <i style="color: #cacaca;" class='bx bx-book-reader'></i>
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Libro de Ingresos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <div class="text">
                        <i style="color: rgb(4, 4, 85);">Menu Consulta de Ingresos Diarios</i>
                    </div>

                        <ul class="nav-links">

                            <p>Control de Cuentas</p>
                            <li><a class="dropdown-item" href="./prestamos.php">Prestamos</a></li>
                            <li><a class="dropdown-item" href="./cuentas_pagadas.php">Cuentas Pagadas</a></li>
                            <li><a class="dropdown-item" href="./pendientes_p_pagar.html">Pendientes por Pagar</a></li>
                            <div class="linear"></div>

                            <p>Status</p>
                            <li><a class="dropdown-item" href="./movimientos_diarios.html">Movimientos Diarios</a></li>
                            <li><a class="dropdown-item" href="./movimientos_mensuales.html">Movimientos Mensuales</a></li>
                            <div class="linear"></div>

                            <p>Activos</p>    
                            <li><a class="dropdown-item" href="./corriente.html">Corriente</a></li>
                            <li><a class="dropdown-item" href="./no_corriente.html">NO Corriente</a></li>

                        </ul>
                    </div>
                    </div>
                </div>                
                </div>

                </div>
        </header>


        <div class="header-public">
            <div class="text-public">
                <p>Solicitud & Generador de Prestamos</p>
                <small><i>Libro de Ingresos</i></small>
            </div>
            <img src="https://images.pexels.com/photos/2387793/pexels-photo-2387793.jpeg" alt="">
        </div>


        <div class="container-solicitud">

            <div class="search">
                <input type="text" placeholder="Escribe aqui...">
            </div>


        

            <div class="container-modal">

            <?php
                include './Controller/conexion.php';
                include './Controller/prestamos/uload.php';
                include './Controller/prestamos/Drop.php';

            ?>

            <form action="" method="POST">

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Registro de Personal</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Registro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese su Nombre" >
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Apellido</label>
                                        <input type="text" name="surname" class="form-control" id="surname" placeholder="Ingrese su Apellido" >
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Telefono</label>
                                        <input type="text" name="tlf" class="form-control" id="customer" placeholder="Ingrese numero de Telefono">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Solicitud</label>
                                        <input type="number" name="solicitud" class="form-control" value="" id="v_solicitud" oninput="calculo()" placeholder="Ingrese el monto solicitado">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Fecha de Solicitud</label>
                                        <input type="date" name="date" class="form-control" id="date">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Renta</label>
                                        <input type="number" name="renta" class="form-control" id="v_renta" value="12" oninput="calculo()" placeholder="Ingrese su el % sobre renta">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Total a Pagar</label>
                                        <input type="number" name="total_a_p" class="form-control" id="v_total_a_p" value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Prima</label>
                                        <input type="number" name="prima" class="form-control" id="prima" placeholder="Indique su prima base...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Cuotas</label>
                                        <input type="number" name="cuotas" class="form-control" id="cuotas" placeholder="Indique el numero de cuotas...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Comentarios</label>
                                        <input type="text" name="message" class="form-control" id="location" placeholder="Escriba aqui...">
                                    </div>

                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="btn-p" class="btn btn-primary" value="submit">Cargar Solicitud</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>
        

        </div>
        </div>



        <section>
            <div class="container-tables">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Tlf</th>
                            <th scope="col">Solicitud</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Renta</th>
                            <th scope="col">Total a Pagar</th>
                            <th scope="col">Prima</th>
                            <th scope="col">Cuotas</th>
                            <th scope="col">Comentarios</th>
                            <th scope="col"><i class='bx bx-trash-alt'></i></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                            include './Controller/conexion.php';

                            $sql=$conexion->query( "SELECT *FROM prest");
                            while($datos = $sql->fetch_object()){
                                ?>
                            

                        <tr class="text-center">
                            <td><?= $datos->name?></td>
                            <td><?= $datos->surname?></td>
                            <td><?= $datos->tlf?></td>
                            <td><?= $datos->solicitud?></td>
                            <td><?= $datos->date?></td>
                            <td><?= $datos->renta?></td>
                            <td><?= $datos->total_a_p?></td>
                            <td><?= $datos->prima?></td>
                            <td><?= $datos->cuotas?></td>


                            <td style="display: flex; justify-content: center;">
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class='bx bxs-message-dots' style='color:#cacaca'></i>
                                </a>
                                <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <?= $datos->message?>
                                </div>
                                </div>
                            </td>

                            <td>
                                <a href="prestamos.php?id=<?= $datos->id?>"><i class='bx bx-trash-alt'></i></a>
                            </td>

                        <?php
                        }
                        ?>


                        </tr>
                    </tbody>
                </table>
            </div>
        </section>