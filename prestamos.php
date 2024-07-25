<!DOCTYPE html>
<html lang="es">
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
                            <li><a class="dropdown-item" href="./prestamos.html">Prestamos</a></li>
                            <li><a class="dropdown-item" href="./cuentas_pagadas.html">Cuentas Pagadas</a></li>
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Cargar Solicitud</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Solicitud de Prestamo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Ingrese su Nombre">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellido</label>
                        <input type="text" name="surname" class="form-control" id="recipient-name" placeholder="Ingrese su Nombre">
                    </div

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>



        <section>
            <div class="container-tables">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Tlf</th>
                            <th scope="col">Solicitud</th>
                            <th scope="col">Renta</th>
                            <th scope="col">Renta</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>