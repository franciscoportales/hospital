<!doctype html>
<html lang="es">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regiones</title>
    
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

                <h1>Lista de Regiones</h1>
                <!-- Button trigger modal -->
         
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#regionModal"> <i class="fa fa-plus"></i>
                    Agregar Nueva Región
                </button>

                <!-- Modal -->
                <div class="modal fade" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Región</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="<?=base_url('guardar_region')?>" method='post'>

                                    <div class="mb-3">
                                        <label for="txtcodigo" class="form-label">Código</label>
                                        <input type="text" class="form-control" id="txtcodigo" name="txtcodigo"
                                            placeholder="Código de region" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtnombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="txtnombre" name="txtnombre"
                                            placeholder="nombre" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="txtdescripcion" class="form-label">Región</label>
                                        <input type="text" class="form-control" id="txtdescripcion"
                                            name="txtdescripcion" placeholder="descripción" required>
                                    </div>


                                    <div class="mb-3">

                                        <input type="submit" class="form-control btn btn-primary" id="btn_guardar"   name='btn_guardar' value='guardar'>
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



                <table class="table table-hover table-striped" id="dataTable">
                    <thead class="table-dark">
                        <tr>
                            <th>Código Región</th>
                            <th>nombre</th>
                            <th>Descripoción</th>
                            <th>Procesos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                foreach($resultado as $datos){
            ?>
                        <tr>
                            <td><?=$datos['cod_region']?></td>
                            <td><?=$datos['nombre']?></td>
                            <td><?=$datos['descripcion']?></td>
                            <td><a
                                    href="<?=base_url("localizar_modificar_region/".$datos['cod_region'])?>"><button type="button" class="btn btn-warning">Actualizar <i class="bi bi-pencil-square"></i> </button></a>
                                
                                <a href="<?=base_url("eliminar_region/".$datos['cod_region'])?>"><button type="button" class="btn btn-danger">Eliminar <i class="bi bi-trash3"></i></button></a>
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

    <script type="text/javascript">
    function confirmarEliminacion(url) {
        Swal.fire({
            title: '¿Eliminar región?',
            text: "¿Está seguro que quiere eliminar la región? Ya no podrá usar la información una vez la elimine",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }
    $(document).ready(function() {
        $('#tableRegion').DataTable();
    });
</script>


    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('js/configuracionDataTables.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </script>
</body>

</html>