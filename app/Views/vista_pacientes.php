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
    <div class="container-fluid">


        <h1>Ciudadanos</h1>
        <!-- Button trigger modal -->

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#regionModal"> <i
                class="fa fa-plus"></i>
            Agregar Nuevo Ciudadano
        </button>

        <!-- Modal -->
        <div class="modal fade" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Ciudadano</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="<?=base_url('guardar_ciudadano')?>" method='post'>

                            <div class="mb-3">
                                <label for="txtdpi" class="form-label">Dpi</label>
                                <input type="number" class="form-control" id="txtdpi" name="txtdpi" placeholder="dpi" required>
                            </div>

                            <div class="mb-3">
                                <label for="txtnombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="txtnombre" name="txtnombre"
                                    placeholder="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="txtapellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="txtapellido" name="txtapellido"
                                    placeholder="apellido" required>
                            </div>


                            <div class="mb-3">
                                <label for="txtdireccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="txtdireccion" name="txtdireccion"
                                    placeholder="direccion" required>
                            </div>

                            <div class="mb-3">
                                <label for="txttelcasa" class="form-label">Teléfono de Casa</label>
                                <input type="number" class="form-control" id="txttelcasa" name="txttelcasa"
                                    placeholder="telefono de casa">
                            </div>


                            <div class="mb-3">
                                <label for="txtmovil" class="form-label">Teléfono Movil</label>
                                <input type="number" class="form-control" id="txtmovil" name="txtmovil"
                                    placeholder="telefono movil" >
                            </div>

                    

                            <div class="mb-3">
                                <label for="txtemail" class="form-label">E-mail</label>
                                <input type="text" class="form-control" id="txtemail" name="txtemail"
                                    placeholder="correo">
                            </div>

                            <div class="mb-3">
                                <label for="txtfechanacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="txtfechanacimiento"
                                    name="txtfechanacimiento" placeholder="fecha de nacimiento" required>
                            </div>

                            <div class="mb-3">
                                <label for="lst_nivel_aca" class="form-label">Nivel Academico:</label>
                                <select class="form-select" aria-label="Default select example" name="lst_nivel_aca">
                                    <?php
                                      foreach ($resultadoniveles as $niveles) {
                                     ?>
                                    <option value="<?= $niveles['cod_nivel_acad'] ?>"><?= $niveles['nombre'] ?></option>
                                    <?php
                                                                }
                                        ?>

                                  </select>
                             </div>


                             <div class="mb-3">
                                <label for="lst_municipio" class="form-label">Municipio:</label>
                                <select class="form-select" aria-label="Default select example" name="lst_municipio">
                                    <?php
                                      foreach ($resultadomuniscipios as $munis) {
                                     ?>
                                    <option value="<?= $munis['cod_muni'] ?>"><?= $munis['nombre_municipio'] ?></option>
                                    <?php
                                                                }
                                        ?>

                                  </select>
                             </div>




                            <div class="mb-3">

                                <input type="submit" class="form-control btn btn-primary" id="btn_guardar"  name='btn_guardar' value='guardar'>
                            </div>




                        </form>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger fin -->

        <table id="tablax1" class="table table-hover table-striped" id="dataTable">
            <thead class="table-dark">
                <tr>
                    <th>Dpi</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>tel_casa</th>
                    <th>tel_movil</th>
                    <th>Email</th>
                    <th>Fecha_nacimiento</th>
                    <th>Edad</th>
                    <th>Nivel Academico</th>
                    <th>Municipio</th>
                    <th>Procesos</th>



                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($resultadoCiudadano as $datos){
            ?>
                <tr>
                    <td><?=$datos['dpi']?></td>
                    <td><?=$datos['nombre_ciudadano']?></td>
                    <td><?=$datos['direccion']?></td>
                    <td><?=$datos['tel_casa']?></td>
                    <td><?=$datos['tel_movil']?></td>
                    <td><?=$datos['email']?></td>
                    <td><?=$datos['fecha_nacimiento']?></td>
                    <td><?=$datos['edad']?></td>
                    <td><?=$datos['nivel_academico']?></td>
                    <td><?=$datos['nombre_municipio']?></td>
                    <td><a href="<?=base_url("localizar_modificar_ciudadano/".$datos['dpi'])?>"><button type="button"
                                class="btn btn-warning">Actualizar <i class="bi bi-pencil-square"></i> </button></a>

                        <a href="<?=base_url("eliminar_ciudadano/".$datos['dpi'])?>"><button type="button"
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