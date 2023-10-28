<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Región</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
<?php include ("MENU.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-1">


                <h1>Modificar  Región

                    <form action="<?=base_url('modificar_region')?>" method='post'>

                        <div class="mb-3">
                            <label for="txtcodigo" class="form-label">Código</label>
                            <input type="text" class="form-control" id="txtcodigo" name="txtcodigo"
                                placeholder="Código de region" value="<?=$datosderegion['cod_region'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="txtnombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre"
                                value="<?=$datosderegion['nombre'] ?>"   >
                        </div>


                        <div class="mb-3">
                            <label for="txtdescripcion" class="form-label">Región</label>
                            <input type="text" class="form-control" id="txtdescripcion" name="txtdescripcion"
                                placeholder="descripción" value="<?=$datosderegion['descripcion'] ?>">
                        </div>


                        <div class="mb-3">

                            <input type="submit" class="form-control btn btn-primary" id="btn_guardar_cambios"
                                name='Guardar Cambios' value='btn_guardar_cambios'>
                        </div>




                    </form>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>