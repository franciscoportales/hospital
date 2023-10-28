<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Municipio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <?php include ("MENU.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-1">


                <h1>Modificar Municipio </h1>

                <form action="<?=base_url('modificar_muni')?>" method='post'>

                    <div class="mb-3">
                        <label for="txtcodigo" class="form-label">Codigo</label>
                        <input type="number" class="form-control" id="txtcodigo" name="txtcodigo"
                            placeholder="código de municipio" value="<?=$resultadoMunicipios['cod_muni'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtnombre" class="form-label">Nombre Municipio</label>                                       
                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre"  value="<?=$resultadoMunicipios['nombre_municipio'] ?>">
                    </div>


                    <div class="mb-3">
                            <label for="lst_nivel_depto" class="form-label">Departamento:</label>
                            <select class="form-select" name="lst_nivel_depto">
                                <?php
                               foreach ($resultadoDepartamento as $deptos) {
                                   $selected = ($deptos['cod_depto'] == $resultadoMunicipios['cod_depto']) ? 'selected' : '';
                             ?>
                                <option value="<?= $deptos['cod_depto'] ?>" <?= $selected ?>> <?= $deptos['nombre_depto'] ?>
                                </option>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>