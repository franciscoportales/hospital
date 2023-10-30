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
                aria-expanded="false">Ciudadanos</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verPacientes')?>">Ver Pacientes</a></li>




            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Niveles Cademicos</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verNiveles')?>">Ver Niveles Académicos</a></li>



            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Regiones</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verRegiones')?>">Ver Regiones</a></li>


            </ul>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Departamento</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verDeptos')?>">Ver Departamentos</a></li>

            </ul>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Municipios</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('verMunicipios')?>">Ver Municipios</a></li>



            </ul>
        </li>




        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Administracion</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">ver usuarios</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Eliminar usuario</a></li>


                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"></a></li>
            </ul>
        </li>




    </ul>

</nav>