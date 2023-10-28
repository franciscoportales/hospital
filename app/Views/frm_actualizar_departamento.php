<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Departamento</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <?php include ("MENU.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-1">


                <h1>Modificar Departamento</h1>

                    <form action="<?=base_url('modificar_departamento')?>" method='post'>

                        <div class="mb-3">
                            <label for="txtcodigo" class="form-label">Código</label>
                            <input type="text" class="form-control" id="txtcodigo" name="txtcodigo"
                                placeholder="Código de departamento" value="<?=$resultadoDepartamento['cod_depto'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="txtnombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre departamento"
                                value="<?=$resultadoDepartamento['nombre_depto'] ?>">
                        </div>



                        <div class="mb-3">
                            <label for="lst_region" class="form-label">Región:</label>
                            <select class="form-select" name="lst_nivel_aca">
                                <?php
                               foreach ($resultadoregiones as $regiones) {
                                   $selected = ($regiones['cod_region'] == $resultadoDepartamento['cod_region']) ? 'selected' : '';
                             ?>
                                <option value="<?= $regiones['cod_region'] ?>" <?= $selected ?>> <?= $regiones['nombre'] ?>
                                </option>
                                <?php
                                  }
                               ?>
                            </select>
                        </div>


                        <div class="mb-3">

                            <input type="submit" class="form-control btn btn-primary" id="btn_guardar"     name='btn_guardar' value='guardar'>
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