<?php

namespace App\Controllers;
use App\Models\Usuarios;
class Home extends BaseController

{
    public function index()
    {

        $mensaje=session('mensaje');
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
       // return view('vista_menu');
return view('login',["mensaje"=>$mensaje]);
       
    }


    public function inicio(){

   return view('vista_menu');
        
    }


    public function login(){

       $usuario=$this->request->getPost('usuario');
       $password=$this->request->getPost('password');       
       $Usuario=new Usuarios();
       
       $datosUsuario=$Usuario->obtenerUsuario(['usuario'=>$usuario]);

       if (count($datosUsuario)>0 && password_verify($password,$datosUsuario[0]['password'])){

$data=[
    
    "usuario"=>$datosUsuario[0]['usuario'],
    "type"=>$datosUsuario[0]['type']
       
    ];
    
        $session=session();
        $session->set($data);
        
        return redirect()->to(base_url('/inicio'))->with('mensaje','1');
        
        
       }else{

            return redirect()->to(base_url('/'))->with('mensaje','0');
        
       }
       
             
    }
     
    public function salir(){
        $session= session();
        $session->destroy();

        return redirect()->to(base_url('/'));
        
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