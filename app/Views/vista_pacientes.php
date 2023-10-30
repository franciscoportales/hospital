<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
</head>

<body>
    <?php include ("MENU.php"); ?>
    <div class="container">

        <div class="col-12 offset-1">
            <h1>Pacientes</h1>
            <!-- Button trigger modal -->

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#regionModal"> <i
                    class="fa fa-plus"></i>
                Agregar Nuevo Paciente
            </button>
            <!-- Modal -->
            <div class="modal fade" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Paciente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">



                            <form action="<?=base_url('guardar_paciente')?>" method='post'>

                                <h4>Datos Personales</h4>


                                <!-- Nombre y Apellidos -->

                                <div class="mb-3" style="display: flex;">

                                    <div style="margin-right: 10px;">
                                        <label for="txtnombre1" class="form-label">Nombre1</label>
                                        <input type="text" class="form-control" id="txtnombre1" name="txtnombre1"
                                            placeholder="nombre1" required>
                                    </div>

                                    <div style="margin-right: 10px;">
                                        <label for="txtnombre2" class="form-label">Nombre2</label>
                                        <input type="text" class="form-control" id="txtnombre2" name="txtnombre2"
                                            placeholder="nombre2">
                                    </div>

                                    <div style="margin-right: 10px;">
                                        <label for="txtnombre3" class="form-label">Nombre3</label>
                                        <input type="text" class="form-control" id="txtnombre3" name="txtnombre3"
                                            placeholder="nombre3">
                                    </div>

                                </div>
                                <div class="mb-3" style="display: flex;">

                                    <div style="margin-right: 10px;">
                                        <label for="txtapellido1" class="form-label">Apellido1</label>
                                        <input type="text" class="form-control" id="txtapellido1" name="txtapellido1"
                                            placeholder="apellido1" required>
                                    </div>
                                    <div style="margin-right: 10px;">
                                        <label for="txtapellido2" class="form-label">Apellido2</label>
                                        <input type="text" class="form-control" id="txtapellido2" name="txtapellido2"
                                            placeholder="apellido2">
                                    </div>
                                </div>




                        </div>

                        <div class="mb-3" style="display: flex;">

                            <div style="margin-right: 10px;">
                                <label for="txtdpi" class="form-label">Dpi</label>
                                <input type="number" class="form-control" id="txtdpi" name="txtdpi" placeholder="dpi">
                            </div>
                            <div style="margin-right: 10px;">
                                <label for="txttelefono" class="form-label">Teléfono</label>
                                <input type="number" class="form-control" id="txttelefono" name="txttelefono"
                                    placeholder="telefono de casa" required>
                            </div>


                            <div style="margin-right: 10px;">
                                <label for="txtfechanacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="txtfechanacimiento"
                                    name="txtfechanacimiento" placeholder="fecha de nacimiento" required>
                            </div>

                        </div>
                        <div class="mb-3">

                            <input type="submit" class="form-control btn btn-success" id="btn_guardar"
                                name='btn_guardar' value='Guardar'>

                        </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

        <!-- Button trigger fin -->


        <table id="tablax1" class="table table-hover table-striped" id="dataTable">
            <thead class="table-dark">
                <tr>
                    <th>cod_paciente</th>
                    <th>Nombre</th>
                    <th>Cui</th>
                    <th>Nit</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($resultadopacientes as $datos){
            ?>
                <tr>
                    <td><?=$datos['cod_paciente']?></td>
                    <td><?=$datos['nombre1'].' '.$datos['nombre2'].' '.$datos['apellido1'] .' '.$datos['apellido2']?>
                    </td>
                    <td><?=$datos['cui']?></td>
                    <td><?=$datos['nit']?></td>
                    <td><?=$datos['telefono']?></td>

                    <td><a href="<?=base_url("localizar_modificar_paciente/".$datos['cod_paciente'])?>"><button
                                type="button" class="btn btn-warning">Actualizar <i class="bi bi-pencil-square"></i>
                            </button></a>

                        <a href="<?=base_url("eliminar_paciente/".$datos['cod_paciente'])?>"><button type="button"
                                class="btn btn-danger">Eliminar <i class="bi bi-trash3"></i></button></a>
                    </td>
                </tr>

                <?php
            
            }
            
            ?>
            </tbody>
        </table>

    </div>

    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('js/configuracionDataTables.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin = "anonymous" >
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-P/qgm9jm8DfoO1Uc5Us30Ryj00Bcxbdp3vOHrLPIBZAtykl4Sp4zGz+wLmfaF6i3lqtrWc9QJQlw3iVZuUoT8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>


    <script>
    $(document).ready(function() {
        $('#tablax1').DataTable({
            language: {
                processing: "Tratamiento en curso...",
                search: "Buscar&nbsp;:",
                lengthMenu: "Agrupar de _MENU_ items",
                info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                infoEmpty: "No existen datos.",
                infoFiltered: "(filtrado de _MAX_ elementos en total)",
                infoPostFix: "",
                loadingRecords: "Cargando...",
                zeroRecords: "No se encontraron datos con tu busqueda",
                emptyTable: "No hay datos disponibles en la tabla.",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "Ultimo"
                },
                aria: {
                    sortAscending: ": active para ordenar la columna en orden ascendente",
                    sortDescending: ": active para ordenar la columna en orden descendente"
                }
            },
            order: [
                [1, 'desc']
            ],
            scrollY: 400,
            lengthMenu: [
                [10, 15, -1],
                [10, 15, "All"]
            ],
        });
    });
    </script>

</body>

</html>