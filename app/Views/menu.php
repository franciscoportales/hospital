<nav class="navbar navbar-expand-lg  bg-dark" data-bs-theme="dark">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><?php echo session('usuario')?>
            <img src='../public/assets/images/logo_usac.png' height="28" alt="">Hospital Esperanza </a>
    </div>
    <?=base_url('modificar_region')?>

    <ul class="nav nav-tabs" bg-dark data-bs-theme='dark'>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?=base_url('/salir')?>" role="button"
                aria-expanded="false">Salir</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('/salir')?>">salir</a></li>
            </ul>
        </li>


        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            <?php if (session('type') == 1): ?>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Administracion</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Usuarios</a></li>
            </ul>
        </li>
        <?php endif; ?>






        <?php if (session('type') == 2): ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Secretaria</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Pacientes</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li><a class="dropdown-item" href="<?=base_url('verEmpleados')?>">Empleados</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>


        </li>
        <?php endif; ?>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Medicos</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Egreso de Pacientes</a></li>
            </ul>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Enfermeria</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Pacientes</a></li>
            </ul>
        </li>





        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">contabilidad</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cargos</a></li>
            </ul>


            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cobros</a></li>
            </ul>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Caja</a></li>
            </ul>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Bodega</a></li>
            </ul>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Inventarios</a></li>
            </ul>
        </li>










    </ul>

</nav>