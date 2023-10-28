<style>
    .custom-link {
        color: white; /* Cambia el color al que desees */
    }
</style>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="http://meganerura.site/hospital/public/" class="nav-link align-middle px-0 custom-link">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-link">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                     
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url('irmenuadministracion')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-person-fill-gear"></i> <span class="ms-1 d-none d-sm-inline">Administración</span></a>
                    </li>

                    <li>
                        <a href="<?=base_url('irmenusecretaria')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-paperclip"></i> <span class="ms-1 d-none d-sm-inline">Secretaría</span></a>
                    </li>

                    <li>
                        <a href="<?=base_url('irmenumedicos')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-radioactive"></i> <span class="ms-1 d-none d-sm-inline">Medicos</span></a>
                    </li>

                    <li>
                        <a href="<?=base_url('irmenuenfermeria')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Enfermeria</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url('irmenucargos')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-cart-plus"></i> <span class="ms-1 d-none d-sm-inline">Cargos</span></a>
                    </li>

                    <li>
                        <a href="<?=base_url('irmenucobros')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-credit-card-2-back"></i> <span class="ms-1 d-none d-sm-inline">Cobros</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url('irmenucaja')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-currency-dollar"></i> <span class="ms-1 d-none d-sm-inline">Caja</span></a>
                    </li>

                    <li>
                        <a href="<?=base_url('irmenucontabilidad')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-journal-check"></i> <span class="ms-1 d-none d-sm-inline">Contabilidad</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url('irsalir')?>" class="nav-link px-0 align-middle custom-link">
                            <i class="bi bi-x-circle"></i> <span class="ms-1 d-none d-sm-inline">Salir</span></a>
                    </li>




                  
              
                </ul>
                <hr>
        
            </div>
        </div>
       
    </div>
</div>