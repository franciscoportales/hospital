<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Paciente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <?php include ("MENU.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-1">


                <h1>Modificar Paciente</h1>

                <form action="<?=base_url('modificar_paciente')?>" method='post'>

                    <div class="mb-3">
                        <label for="txtdpi" class="form-label">cod_paciente </label>
                        <input type="number" class="form-control" id="txtdpi" name="txtdpi" placeholder="cod_paciente"
                            value="<?=$resultadoPaciente['cod_paciente']?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtdpi" class="form-label">Dpi</label>
                        <input type="number" class="form-control" id="txtdpi" name="txtdpi" placeholder="dpi"
                            value="<?=$resultadoPaciente['cui']?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtnombre" class="form-label">Nombre1</label>
                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre1"
                            value="<?=$resultadoPaciente['nombre1']?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtnombre" class="form-label">Nombre2</label>
                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre2"
                            value="<?=$resultadoPaciente['nombre2'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtnombre" class="form-label">Nombre3</label>
                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre3"
                            value="<?=$resultadoPaciente['nombre3']?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtapellido" class="form-label">Apellido1</label>
                        <input type="text" class="form-control" id="txtapellido" name="txtapellido"
                            placeholder="apellido1" value="<?=$resultadoPaciente['apellido1']?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtapellido" class="form-label">Apellido2</label>
                        <input type="text" class="form-control" id="txtapellido" name="txtapellido"
                            placeholder="apellido2" value="<?=$resultadoPaciente['apellido2']?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtdireccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="txtdireccion" name="txtdireccion"
                            placeholder="direccion" value="<?=$resultadoPaciente['direccion']?>">
                    </div>

                    <div class="mb-3">
                        <label for="txttelcasa" class="form-label">Teléfono</label>
                        <input type="number" class="form-control" id="txttelcasa" name="txttelcasa"
                            placeholder="telefono de casa" value="<?=$resultadoPaciente['telefono'] ?>">
                    </div>


                    <div class="mb-3">
                        <label for="txtemail" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="correo"
                            value="<?=$resultadoPaciente['email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtfechanacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="txtfechanacimiento" name="txtfechanacimiento"
                            placeholder="fecha de nacimiento" value="<?=$resultadoPaciente['fecha_nacimiento']?>">
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