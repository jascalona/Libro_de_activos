<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Ingresos</title>

    <!-- STYLE & FRAMEWORKS CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/Framework/Bootstrap.css">
    <!-- STYLE & FRAMEWORKS CSS -->

    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- BoxIcons -->

    <!-- BoxIcons -->
     <script src="./JS/Framewrok.js"></script>
    <!-- BoxIcons -->


</head>
<body>
    
            <header class="header">
                <div class="logo">
                    <a href=""><p>LDA</p></a>
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
                  <p>Control de Cuentas // Cuentas pagadas</p>
                  <small><i>Libro de Ingresos</i></small>
              </div>
              <img src="https://images.pexels.com/photos/2387793/pexels-photo-2387793.jpeg" alt="">
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
                            <th scope="col">Status</th>
                            <th scope="col"><i class='bx bx-trash-alt'></i></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                            include './Controller/conexion.php';

                            $sql=$conexion->query( "SELECT *FROM cut_pagadas");
                            while($datos = $sql->fetch_object()){
                                ?>
                            

                        <tr class="text-center">
                            <td><?= $datos->name?></td>
                            <td><?= $datos->surname?></td>
                            <td><?= $datos->tlf?></td>
                            <td><?= $datos->solicitud?></td>
                            <td><?= $datos->date?></td>
                            <td><?= $datos->renta?></td>
                            <td><?= $datos->total_p?></td>
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




</body>
</html>