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
            <div class="col-12 offset-0">

                <h1>Modificar Paciente</h1>

                <form action="<?=base_url('modificar_paciente')?>" method='post'>

                    <h4>Datos Personales</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3" style="display: flex;">
                                <div style="margin-right: 10px;">
                                    <label for="txtcodpaciente" class="form-label">cod_paciente </label>
                                    <input type="number" class="form-control" id="txtcodpaciente" name="txtcodpaciente"
                                        value="<?=$resultadoPaciente['cod_paciente']?>" placeholder="cod paciente">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- Nombre y Apellidos -->



                    <div class="mb-3" style="display: flex;">

                        <div style="margin-right: 10px;">
                            <label for="txtnombre1" class="form-label">Nombre1</label>
                            <input type="text" class="form-control" id="txtnombre1" name="txtnombre1"
                                value="<?=$resultadoPaciente['nombre1']?>" placeholder="nombre1">
                        </div>


                        <div style="margin-right: 10px;">
                            <label for="txtnombre2" class="form-label">Nombre2</label>
                            <input type="text" class="form-control" id="txtnombre2" name="txtnombre2"
                                value="<?=$resultadoPaciente['nombre2']?>" placeholder="nombre2">
                        </div>



                        <div style="margin-right: 10px;">
                            <label for="txtnombre3" class="form-label">Nombre3</label>
                            <input type="text" class="form-control" id="txtnombre3" name="txtnombre3"
                                value="<?=$resultadoPaciente['nombre3']?>" placeholder="nombre3">
                        </div>




                        <div style="margin-right: 10px;">
                            <label for="txtapellido1" class="form-label">Apellido1</label>
                            <input type="text" class="form-control" id="txtapellido1" name="txtapellido1"
                                value="<?=$resultadoPaciente['apellido1']?>" placeholder="apellido1">
                        </div>
                        <div style="margin-right: 10px;">
                            <label for="txtapellido2" class="form-label">Apellido2</label>
                            <input type="text" class="form-control" id="txtapellido2" name="txtapellido2"
                                value="<?=$resultadoPaciente['apellido2']?>" placeholder="apellido2">
                        </div>

                    </div>

                    <div class="mb-3" style="display: flex;">
                        <div style="margin-right: 10px;">
                            <label for="txtdpi" class="form-label">Dpi</label>
                            <input type="number" class="form-control" id="txtdpi" name="txtdpi"
                                value="<?=$resultadoPaciente['cui']?>" placeholder="dpi">
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txtdireccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="txtdireccion" name="txtdireccion"
                                value="<?=$resultadoPaciente['direccion']?>" placeholder="direccion">
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txttelefono" class="form-label">Teléfono</label>
                            <input type="number" class="form-control" id="txttelefono" name="txttelefono"
                                value="<?=$resultadoPaciente['telefono']?>" placeholder="telefono">
                        </div>


                        <div style="margin-right: 10px;">
                            <label for="txtemail" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="txtemail" name="txtemail"
                                value="<?=$resultadoPaciente['email']?>" placeholder="correo">
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txtfechanacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="txtfechanacimiento" name="txtfechanacimiento"
                                value="<?=$resultadoPaciente['fecha_nacimiento']?>" placeholder="fecha de nacimiento">
                        </div>

                    </div>


                    <div class="mb-3" style="display: flex;">


                        <div class="mb-3">
                            <label for="lst_sexo" class="form-label">Sexo:</label>
                            <select class="form-select" name="lst_sexo">
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="lst_pueblo" class="form-label">Pueblo:</label>
                            <select class="form-select" name="lst_pueblo">
                                <option value="1">Ladino</option>
                                <option value="2">Maya</option>
                                <option value="3">Ninguna</option>
                            </select>
                        </div>



                        <div class="mb-3">
                            <label for="lst_pais" class="form-label">País:</label>
                            <select class="form-select" name="lst_pais">
                                <?php
                     foreach ($resultadopaises as $paises) {
                        $selected = ($paises['cod_pais'] == $resultadoPaciente['cod_pais']) ? 'selected' : '';
                        
                         ?>
                                <option value="<?= $paises['cod_pais'] ?>" <?= $selected ?>>
                                    <?= $paises['pais'] ?>
                                </option>

                                <?php
                         }
                             ?>
                            </select>
                        </div>



                        <div class="mb-3">
                            <label for="lst_pais" class="form-label">Estado Civil:</label>
                            <select class="form-select" name="lst_estado">
                                <?php
                     foreach ($resultadoestadocivil as $estadocivil) {
                        $selected = ($estadocivil['cod_estado_civil'] == $resultadoPaciente['cod_estado_civil']) ? 'selected' : '';
                         ?>
                                <option value="<?= $estadocivil['cod_estado_civil'] ?>" <?= $selected ?>>
                                    <?= $estadocivil['estado_civil'] ?>
                                </option>
                                <?php
                         }
                             ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="lst_profesion" class="form-label">Estado Profesion:</label>
                            <select class="form-select" name="lst_profesion">
                                <?php
                     foreach ($resultadoprofesiones as $profesion) {
                  
                         ?>
                                <option value="<?= $profesion['cod_profesion'] ?>" <?= $selected ?>>
                                    <?= $profesion['profesion'] ?>
                                </option>
                                <?php
                         }
                             ?>
                            </select>
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txtlugar_nacimiento" class="form-label">Lugar de Nacimiento:</label>
                            <input type="text" class="form-control" id="txtlugar_nacimiento" name="txtlugar_nacimiento"
                                placeholder="Lugar de Nacimiento" value="<?=$resultadoPaciente['lugar_nacimiento'] ?>">
                        </div>

                    </div>

                    <div class="mb-3" style="display: flex;">



                    </div>
                    <h4>Datos Adicionales</h4>
                    <div class="mb-3" style="display: flex;">


                        <div style="margin-right: 10px;">
                            <label for="txtpadre" class="form-label">Padre:</label>
                            <input type="text" class="form-control" id="txtpadre" name="txtpadre" placeholder="padre"
                                value="<?=$resultadoPaciente['padre'] ?>">
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txtcuip" class="form-label">Cui padre:</label>
                            <input type="text" class="form-control" id="txtcuip" name="txtcuip" placeholder="cuip"
                                value="<?=$resultadoPaciente['cuip'] ?>">
                        </div>


                        <div style="margin-right: 10px;">
                            <label for="txtmadre" class="form-label">Madre:</label>
                            <input type="text" class="form-control" id="txtmadre" name="txtmadre" placeholder="txtmadre"
                                value="<?=$resultadoPaciente['madre'] ?>">
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txtcuim" class="form-label">Cui Madre:</label>
                            <input type="text" class="form-control" id="txtcuim" name="txtcuim" placeholder="cui madre"
                                value="<?=$resultadoPaciente['cuim'] ?>">
                        </div>



                        <div style="margin-right: 10px;">
                            <label for="txtconyuge" class="form-label">Conyuge:</label>
                            <input type="text" class="form-control" id="txtconyuge" name="txtconyuge"
                                placeholder="txtconyuge" value="<?=$resultadoPaciente['conyuge'] ?>">
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txtcuic" class="form-label">Cui Conyuge:</label>
                            <input type="text" class="form-control" id="txtcuic" name="txtcuic"
                                placeholder="cui conyugue" value="<?=$resultadoPaciente['cuic'] ?>">
                        </div>

                    </div>

                    <h4>Datos facturación</h4>
                    <div class="mb-3" style="display: flex;">

                        <div style="margin-right: 10px;">
                            <label for="txtnombre_factura" class="form-label">Nombre Factura:</label>
                            <input type="text" class="form-control" id="txtnombre_factura" name="txtnombre_factura"
                                placeholder="nombre factura" value="<?=$resultadoPaciente['nombre_factura'] ?>">
                        </div>

                        <div style="margin-right: 10px;">
                            <label for="txttxtnitfacturacuic" class="form-label">Nit facturación:</label>
                            <input type="text" class="form-control" id="txtnitfactura" name="txtnitfactura"
                                placeholder="nit para facturar" value="<?=$resultadoPaciente['nit_factura'] ?>">
                        </div>


                    </div>




                    <div class="mb-3" style="display: flex;">


                    </div>



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