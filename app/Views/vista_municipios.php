<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
  
    <title>Municipios</title> 
</head>
  <body>
  <?php include ("MENU.php"); ?>

  <div class="container">
        <div class="row">
            <div class="col-12 offset-1">
  <h1>Lista de Municipios</h1>
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
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Municipio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="<?=base_url('guardar_muni')?>" method='post'>

                            <div class="mb-3">
                                <label for="txtcodigo" class="form-label">Codigo</label>
                                <input type="number" class="form-control" id="txtcodigo" name="txtcodigo" placeholder="código de municipio" required>
                            </div>

                            <div class="mb-3">
                                <label for="txtnombre" class="form-label">Nombre Municipio</label>
                                <input type="text" class="form-control" id="txtnombre" name="txtnombre"
                                    placeholder="nombre municipio" required>
                            </div>

                          


                            <div class="mb-3">
                                <label for="lst_nivel_aca" class="form-label">Departamento:</label>
                                <select class="form-select" aria-label="Default select example" name="lst_nivel_depto" required>
                                    <?php
                                      foreach ($resultadoDepartamento as $deptos) {
                                     ?>
                                    <option value="<?= $deptos['cod_depto'] ?>"><?= $deptos['nombre_depto'] ?></option>
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
    <table id="tablax1" class="table table-hover table-striped"  id="dataTable"> 
        <thead class="table-dark">
            <tr>
                <th>Código Municipio</th>
                <th>Municipio</th>
                <th>Departamento</th>
                <th>Procesos</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($resultadoMunicipios as $datos){
            ?>
            <tr>
                <td><?=$datos['cod_muni']?></td>
                <td><?=$datos['nombre_municipio']?></td>
                <td><?=$datos['departamento']?></td>

                <td><a
                                    href="<?=base_url("localizar_modificar_muni/".$datos['cod_muni'])?>"><button type="button" class="btn btn-warning">Actualizar <i class="bi bi-pencil-square"></i> </button></a>
                                
                                <a href="<?=base_url("eliminar_muni/".$datos['cod_muni'])?>"><button type="button" class="btn btn-danger">Eliminar <i class="bi bi-trash3"></i></button></a>
                            </td>
            </tr>

            <?php            
            }            
            ?>
        </tbody>
    </table>
    </div>
        </div>
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