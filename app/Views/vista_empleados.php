<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--CSS datatable-->
    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">

    <title>Empleados Hospital Universitario Esperanza</title>
</head>

<body>
    <?php include ("MENU.php"); ?>

    <body style="background-image: linear-gradient(to right, blue,white);">

        <body background="fondo.gif">

            <div class="container-fluid">
                <h1>Empleados Hospital Universitario Esperanza</h1>

                <!-- Button modal para agregr registros-->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#regionModal">
                    Nuevo Empleado
                </button>
                <br>
                <br>
                <!-- Modal -->
                <div class="modal fade" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Empleado</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <body style="background-color:#FF0000;">
                                    <!--Formulario agregar Artista-->

                                    <body style="background-image: linear-gradient(to right, red, yellow,green);">
                                        <form action="<?= base_url('guardar_Empleados') ?>" method="post">
                                            <div class="mb-3">
                                                <label for="txt_idempleado" class="form-label">Cógigo empleado :</label>
                                                <input type="text" class="form-control" id="txt_idempleado"
                                                    name="txt_idempleado" placeholder="Código Empleado">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_nombre" class="form-label">Nombre :</label>
                                                <input type="text" class="form-control" id="txt_nombre"
                                                    name="txt_nombre" placeholder="Nombres">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_apellido" class="form-label">Apellido :</label>
                                                <input type="text" class="form-control" id="txt_apellido"
                                                    name="txt_apellido" placeholder="Apellidos">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_dpi" class="form-label">DPI :</label>
                                                <input type="text" class="form-control" id="txt_dpi" name="txt_dpi"
                                                    placeholder="DPI">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_fechaingreso" class="form-label">Fecha Ingreso :</label>
                                                <input type="date" name="txt_fechaingreso" placeholder="Fechaingreso">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_direccion" class="form-label">direccion :</label>
                                                <input type="text" class="form-control" id="txt_direccion"
                                                    name="txt_direccion" placeholder="Domicilio">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_estado_civil" class="form-label">Esatdo Civil :</label>
                                                <input type="text" class="form-control" id="txt_estado_civil"
                                                    name="txt_estado_civil" placeholder="Estado Civil">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_codigo" class="form-label">Departamento :</label>
                                                <input type="text" class="form-control" id="txt_codigo"
                                                    name="txt_codigo" placeholder="codigo departamento">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_codigopuesto" class="form-label">Codigo Puesto :</label>
                                                <input type="text" class="form-control" id="txt_codigopuesto"
                                                    name="txt_codigopuesto" placeholder="Codigo puesto">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txt_status" class="form-label">Estatus :</label>
                                                <input type="text" class="form-control" id="txt_status"
                                                    name="txt_status" placeholder="Status empleado">
                                            </div>





                                            </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-dark" id="btn_guardar"
                                    name="btn_guardar" value="Guardar">
                            </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>



            <table class="table table-hover pt-3 pb-3" id="dataTable">
                <thead>
                    <tr class="table-dark">
                        <th>Código Empleado</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Fecha Ingreso</th>
                        <th>DPI</th>
                        <th>Direccion</th>
                        <th>Estado Civil</th>
                        <th>Departamento</th>
                        <th>Puesto</th>
                        <th>Estatus</th>
                        <th>Procesos</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach ($resultadoEmpleado as $fila) {
                ?>
                    <tr>
                        <td><?php echo $fila['idempleado'] ?></td>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['apellido'] ?></td>
                        <td><?= $fila['fecha_ingreso'] ?></td>
                        <td><?= $fila['dpi'] ?></td>
                        <td><?= $fila['direccion'] ?></td>
                        <td><?= $fila['estado_civil'] ?></td>
                        <td><?= $fila['codigo'] ?></td>
                        <td><?= $fila['codigopuesto'] ?></td>
                        <td><?= $fila['status'] ?></td>
                        <td><a href="<?=base_url("localizar_modificar_empleado/".$fila['idempleado'])?>">Actualizar <i
                                    class="material-icons">attachment </i></a>
                            /
                            <a href="<?=base_url("eliminar_empleado/".$fila['idempleado'])?>">Eliminar <i
                                    class="material-icons">cloud</i> </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>

            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                crossorigin="anonymous"></script>
            <!--JS datatable-->
            <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
            <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
            <script src="<?= base_url('js/configuracionDataTables.js') ?>"></script>

        </body>

</html>