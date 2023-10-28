<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Ciudadanos</title>
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
        <div class="row">
            <div class="col-12 offset-1">
        <h1>Ciudadanos</h1>
        <!-- Button trigger modal -->



        <!-- Modal -->

        <form action="<?=base_url('guardar_ciudadano')?>" method='post'>

            <div class="mb-3">
                <label for="txtdpi" class="form-label">Dpi</label>
                <input type="number" class="form-control" id="txtdpi" name="txtdpi" placeholder="dpi" required>
            </div>

            <div class="mb-3">
                <label for="txtnombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre" required>
            </div>

            <div class="mb-3">
                <label for="txtapellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="txtapellido" name="txtapellido" placeholder="apellido" required>
            </div>


            <div class="mb-3">
                <label for="txtdireccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="txtdireccion" name="txtdireccion" placeholder="direccion">
            </div>

            <div class="mb-3">
                <label for="txttelcasa" class="form-label">Teléfono de Casa</label>
                <input type="number" class="form-control" id="txttelcasa" name="txttelcasa"
                    placeholder="telefono de casa">
            </div>


            <div class="mb-3">
                <label for="txtmovil" class="form-label">Teléfono Movil</label>
                <input type="number" class="form-control" id="txtmovil" name="txtmovil" placeholder="telefono movil">
            </div>



            <div class="mb-3">
                <label for="txtemail" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="correo">
            </div>

            <div class="mb-3">
                <label for="txtfechanacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="txtfechanacimiento" name="txtfechanacimiento"
                    placeholder="fecha de nacimiento" required>
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

                <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name='btn_guardar'
                    value='guardar'>
            </div>




        </form>





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