<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

//localizar_modificar_paciente

$routes->get('verPacientes','ControllerPacientes::cargarPacientes');
$routes->get('localizar_modificar_paciente/(:num)','ControllerPacientes::localizarPaciente/$1');// para modificar abre forma con datos para actualizar
$routes->get('eliminar_paciente/(:num)','ControllerPacientes::eliminarPaciente/$1');
$routes->post('modificar_paciente','ControllerPacientes::modificarPaciente');
$routes->post('guardar_paciente','ControllerPacientes::guardarPaciente');



$routes->get('irmenuadministracion', 'home::iradministracion');
$routes->get('irmenusecretaria', 'home::irsecretaria');
$routes->get('irmenumedicos', 'home::irmedicos');
$routes->get('irmenucargos', 'home::ircargos');
$routes->get('irmenucontabilidad', 'home::ircontabilidad');
$routes->get('irmenuenfermeria', 'home::irenfermeria');
$routes->get('irmenucobros', 'home::ircobros');
$routes->get('irmenucaja', 'home::ircaja');



$routes->get('verNiveles', 'ControllerNivelesAcademicos::cargarNiveles');
$routes->get('verDeptos','ControllerDepartamentos::cargarDepartamentos');
$routes->get('verCiudadanos','ControllerCiudadano::cargarCiudadanos');
$routes->get('verMunicipios','ControllerMunicipios::cargarMunicipios');
$routes->get('verRegiones','ControllerRegiones::cargarRegiones');



$routes->post('guardar_region','ControllerRegiones::guardarRegion');
$routes->get('eliminar_region/(:num)','ControllerRegiones::eliminarRegion/$1');
$routes->get('localizar_modificar_region/(:num)','ControllerRegiones::localizarRegion/$1');
$routes->post('modificar_region','ControllerRegiones::modificarRegion');


$routes->post('guardar_nivel_acad','ControllerNivelesAcademicos::guardarNivelAcademico');
$routes->get('eliminar_nivel_acad/(:num)','ControllerNivelesAcademicos::eliminarNivelAcad/$1');
$routes->get('localizar_modificar_nivel/(:num)','ControllerNivelesAcademicos::localizarNivelAcad/$1');
$routes->post('modificar_nivel_acad','ControllerNivelesAcademicos::modificarNivel');


$routes->post('guardar_ciudadano','ControllerCiudadano::guardarCiudadano');
$routes->get('eliminar_ciudadano/(:num)','ControllerCiudadano::eliminarCiudadano/$1');
$routes->get('localizar_modificar_ciudadano/(:num)','ControllerCiudadano::localizarCiudadano/$1');
$routes->post('modificar_ciudadano','ControllerCiudadano::modificarCiudadano');
$routes->get('cargafrmciuda','ControllerCiudadano::cargarCiudadanoNuevo');



$routes->post('guardar_departamento','ControllerDepartamentos::guardarDepartamento');
$routes->get('eliminar_departamento/(:num)','ControllerDepartamentos::eliminarDepartamento/$1');
$routes->get('localizar_modificar_departamento/(:num)','ControllerDepartamentos::localizarDepartamento/$1');
$routes->post('modificar_departamento','ControllerDepartamentos::modificarDepartamento');


$routes->post('guardar_muni','ControllerMunicipios::guardarMunicipio');
$routes->get('eliminar_muni/(:num)','ControllerMunicipios::eliminarMunicipio/$1');
$routes->get('localizar_modificar_muni/(:num)','ControllerMunicipios::localizarMunicipio/$1');
$routes->post('modificar_muni','ControllerMunicipios::modificarMunicipio');