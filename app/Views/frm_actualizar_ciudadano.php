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


                <h1>Modificar Ciudadano</h1>

                <form action="<?=base_url('modificar_ciudadano')?>" method='post'>



                    <div class="mb-3">
                        <label for="txtdpi" class="form-label">Dpi</label>
                        <input type="number" class="form-control" id="txtdpi" name="txtdpi" placeholder="dpi"
                            value="<?=$resultadoCiudadano['dpi'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtnombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre"
                            value="<?=$resultadoCiudadano['nombre'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtapellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="txtapellido" name="txtapellido"
                            placeholder="apellido" value="<?=$resultadoCiudadano['apellido'] ?>">
                    </div>


                    <div class="mb-3">
                        <label for="txtdireccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="txtdireccion" name="txtdireccion"
                            placeholder="direccion" value="<?=$resultadoCiudadano['direccion'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txttelcasa" class="form-label">Teléfono de Casa</label>
                        <input type="number" class="form-control" id="txttelcasa" name="txttelcasa"
                            placeholder="telefono de casa" value="<?=$resultadoCiudadano['tel_casa'] ?>">
                    </div>


                    <div class="mb-3">
                        <label for="txtmovil" class="form-label">Teléfono Movil</label>
                        <input type="number" class="form-control" id="txtmovil" name="txtmovil"
                            placeholder="telefono movil" value="<?=$resultadoCiudadano['tel_movil'] ?>">
                    </div>



                    <div class="mb-3">
                        <label for="txtemail" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="correo"
                            value="<?=$resultadoCiudadano['email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtfechanacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="txtfechanacimiento" name="txtfechanacimiento"
                            placeholder="fecha de nacimiento" value="<?=$resultadoCiudadano['fechanac'] ?>">
                    </div>


                  

                    <div class="mb-3">
                        <label for="lst_nivel_aca" class="form-label">Nivel Academico:</label>
                        <select class="form-select" name="lst_nivel_aca">
                            <?php
            foreach ($resultadoniveles as $niveles) {
                $selected = ($niveles['cod_nivel_acad'] == $resultadoCiudadano['cod_nivel_acad']) ? 'selected' : '';
            ?>
                            <option value="<?= $niveles['cod_nivel_acad'] ?>" <?= $selected ?>>
                                <?= $niveles['nombre'] ?>
                            </option>
                            <?php
            }
            ?>
                        </select>
                    </div>



                    
                    <div class="mb-3">
                        <label for="lst_municipio" class="form-label">Municipio:</label>
                        <select class="form-select" name="lst_municipio">
                            <?php
            foreach ($resultadomuniscipios as $munis) {
                $selected = ($munis['cod_muni'] == $resultadoCiudadano['cod_muni']) ? 'selected' : '';
            ?>
                            <option value="<?= $munis['cod_muni'] ?>" <?= $selected ?>>
                                <?= $munis['nombre_municipio'] ?>
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