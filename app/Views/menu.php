<nav class="navbar navbar-expand-lg  bg-dark" data-bs-theme="dark">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src='../public/assets/images/logo_usac.png' height="28" alt="">&nbsp;Hospital Esperanza </a>
    </div>
    <?=base_url('modificar_region')?>

    <ul class="nav nav-tabs" bg-dark data-bs-theme='dark'>




        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Aministracion</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verUsuarios')?>">Usuarios</a></li>
            </ul>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Secretaria</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Pacientes</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Medicos</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Egreso de Pacientes</a></li>
            </ul>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Enfermeria</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Pacientes</a></li>
            </ul>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">contabilidad</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Cargos</a></li>
            </ul>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Cobros</a></li>
            </ul>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Caja</a></li>
            </ul>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Bodega</a></li>
            </ul>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Inventarios</a></li>
            </ul>
        </li>










    </ul>

</nav>