<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu');
    }


    public function iradministracion()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_administracion');
    }


    public function irsecretaria()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_secretaria');
    }

    public function irenfermeria()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_enfermeria');
    }

    public function irmedicos()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_medicos');
    }


    public function ircargos()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_cargos');
    }

    public function ircontabilidad()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_contabilidad');
    }


    public function ircobros()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_cobros');
    }



    public function ircaja()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu_caja');
    }




}
