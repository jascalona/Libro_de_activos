<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <!-- STYLE & FRAMEWORKS CSS -->
    <link rel="stylesheet" href="http://localhost/libro_de_compras/Controller/prestamos/edit.css">

    <!-- STYLE & FRAMEWORKS CSS -->

    <!-- BoxIcons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BoxIcons -->

    <!-- BoxIcons -->
     <script src="./JS/Framewrok.js"></script>
     <script src="./JS/calculo_p.js"></script>
    <!-- BoxIcons -->


</head>
<body style="background-image: url(https://images.unsplash.com/photo-1555993539-1732b0258235?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);" >


                                <div class="container-form">

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
                                        <input type="text" name="tlf" class="form-control" id="tlf" placeholder="Ingrese numero de Telefono">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Solicitud</label>
                                        <input type="number" name="solicitud" class="form-control" id="v_p_solicitud" oninput="calculo_total_porcentaje()" placeholder="Ingrese el monto solicitado">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Fecha de Solicitud</label>
                                        <input type="date" name="date" class="form-control" id="date">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Porcentaje (%)</label>
                                        <input type="number" name="porcentaje" class="form-control" id="v_p_renta" value="12" oninput="calculo_total_porcentaje()" placeholder="Ingrese su el % sobre renta">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Comision</label>
                                        <input type="number" name="comision" class="form-control" id="v_total_renta" placeholder="Se calcula automaticamente..." readonly>
                                        <input type="hidden" name="" class="form-control" id="v_total_renta" oninput="calculo_total" readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Total a Pagar</label>
                                        <input type="number" name="total_a_p" class="form-control" id="total_general" placeholder="Se calcula automaticamente..." readonly>
                                        <input type="hidden" name="" class="form-control" id="total_general" oninput="calculo_total_porcentaje()" value="" readonly>

                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Prima</label>
                                        <input type="number" name="prima" class="form-control" id="v_c_prima" oninput="calculo_total_porcentaje()" placeholder="Indique su prima base...">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Cuotas</label>
                                        <input type="number" name="cuotas" class="form-control" id="total_cuotas" placeholder="Se calcula automaticamente..." readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Comentarios</label>
                                        <input type="text" name="message" class="form-control" id="" placeholder="Escriba aqui...">
                                    </div>

                                
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="btn-p" class="btn btn-primary" value="submit">Cargar Solicitud</button>
                            </div>

                        </div>




</body>
</html>