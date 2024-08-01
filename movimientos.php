<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>

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
                            <li><a class="dropdown-item" href="./prestamos.php">Solicitudes</a></li>
                            <li><a class="dropdown-item" href="./movimientos.php">Movimientos</a></li>
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