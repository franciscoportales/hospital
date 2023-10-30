<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Modificar Artistas</title>
</head>

<body>
    <body style="background-image: linear-gradient(to right, blue,white);">
    <div class="container">
        <h1>Modificar Datos de los Empleados</h1>
        <form action="<?= base_url('modificar_empleado') ?>" method="post">                        
                            <div class="mb-3">
                                <label for="txt_idempleado" class="form-label">Cógigo empleado :</label>
                                <input type="text" class="form-control" id="txt_idempleado" name="txt_idempleado" placeholder="Código Empleado" value="<?=$datosEmpleado['idempleado']?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre :</label>
                                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombres" value="<?=$datosEmpleado['nombre']?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_apellido" class="form-label">Apellido :</label>
                                <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Apellidos" value="<?=$datosEmpleado['apellido']?>">
                            </div>   
                            <div class="mb-3">
                                <label for="txt_dpi" class="form-label">DPI :</label>
                                <input type="text" class="form-control" id="txt_dpi" name="txt_dpi" placeholder="DPI" value="<?=$datosEmpleado['dpi']?>">
                            </div>             
                            <div class="mb-3">
                                <label for="txt_fechaingreso" class="form-label">Fecha Ingreso :</label>
                                <input type="date"  name="txt_fechaingreso" placeholder="Fechaingreso" value="<?=$datosEmpleado['fecha_ingreso']?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_direccion" class="form-label">direccion :</label>
                                <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" placeholder="Domicilio" value="<?=$datosEmpleado['direccion']?>">
                            </div>                                                        
                            <div class="mb-3">
                                <label for="txt_estado_civil" class="form-label">Esatdo Civil :</label>
                                <input type="text" class="form-control" id="txt_estado_civil" name="txt_estado_civil" placeholder="Estado Civil" value="<?=$datosEmpleado['estado_civil']?>">
                            </div>                             
                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label">Departamento :</label>
                                <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="codigo departamento" value="<?=$datosEmpleado['codigo']?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_codigopuesto" class="form-label">Codigo Puesto :</label>
                                <input type="text" class="form-control" id="txt_codigopuesto" name="txt_codigopuesto" placeholder="Codigo puesto" value="<?=$datosEmpleado['codigopuesto']?>">
                            </div>
                            <div class="mb-3">
                                <label for="txt_status" class="form-label">Estatus :</label>
                                <input type="text" class="form-control" id="txt_status" name="txt_status" placeholder="Status empleado" value="<?=$datosEmpleado['status']?>">
                            </div>    
                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-dark" id="btn_guardar" name="btn_guardar" value="Guardar cambios">
                            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>