<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadano;
use App\Models\Ciudadanoup;
use App\Models\NivelesAcademicos;
use App\Models\Municipio;
class ControllerCiudadano extends Controller{





    public function cargarCiudadanos(){
        //crear un objeto de tipo Ciudadano
        $ciudadanos = new Ciudadano();
        //realizar busqueda 
        $resultadoCiudadano=$ciudadanos->findAll();
        //cargar la vista y enviarle el resultado de la busqueda

        $niveles = new NivelesAcademicos();
        //realizar busqueda 
        $resultadoniveles= $niveles->orderBy('cod_nivel_acad')->findAll();

       $municipio = new Municipio();
        $resultadomuniscipios= $municipio->orderBy('cod_muni')->findAll();

        $resultado = array(
            'resultadoniveles' => $resultadoniveles,
            'resultadomuniscipios' => $resultadomuniscipios,
            'resultadoCiudadano'=>$resultadoCiudadano

   );

        return view('vista_ciudadanos',$resultado);
    }



    public function guardarCiudadano(){
        // recibe datos del formulario

        $dpi=$this->request->getVar('txtdpi');
        $nombre=$this->request->getVar('txtnombre');
        $apellido=$this->request->getVar('txtapellido');    
        $direccion=$this->request->getVar('txtdireccion');    
        $telcasa=$this->request->getVar('txttelcasa');    
        $telmovil=$this->request->getVar('txtmovil');    
        $email=$this->request->getVar('txtemail');    
        $fechanacimiento=$this->request->getVar('txtfechanacimiento');    
        $nivelaca=$this->request->getVar('lst_nivel_aca');    
        $municipio=$this->request->getVar('lst_municipio');    
      
                         
        $ciudadanoup=new Ciudadanoup();
        $datos=[
            'dpi'=> $dpi,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'direccion'=> $direccion,
            'tel_casa'=>$telcasa,
            'tel_movil'=>$telmovil,    
            'email'=> $email,
            'fechanac'=>$fechanacimiento,
            'cod_nivel_acad'=>$nivelaca,
            'cod_muni'=>$municipio
       ];
       
        $ciudadanoup->insert($datos);
        return $this->cargarCiudadanos();
    
    }

    public function eliminarCiudadano($codigo=null){
        // echo "se eliminara el registro".$codigo;
 
          //mensaje de advertencia
     
         //instancial del modelo
         $ciudadanosdel =new Ciudadanoup();
         $ciudadanosdel->delete($codigo);
     //cargar datos el form
     
     return $this->cargarCiudadanos();
     
     
     }

     public function localizarCiudadano($codigo=null){   
    
        $ciudadanoup=new Ciudadanoup();
        $resultadoCiudadano=$ciudadanoup ->where('dpi',$codigo)->first();


        $niveles = new NivelesAcademicos();
        //realizar busqueda 
        $resultadoniveles= $niveles->orderBy('cod_nivel_acad')->findAll();

       $municipio = new Municipio();
        $resultadomuniscipios= $municipio->orderBy('cod_muni')->findAll();

        $resultado = array(
            'resultadoniveles' => $resultadoniveles,
            'resultadomuniscipios' => $resultadomuniscipios,
            'resultadoCiudadano'=>$resultadoCiudadano

   );


        return view('frm_actualizar_ciudadano',$resultado);
        
    }

//forma independiente


public function cargarCiudadanoNuevo(){

    $ciudadanos = new Ciudadanoup();

    $niveles = new NivelesAcademicos();
    $resultadoniveles= $niveles->orderBy('cod_nivel_acad')->findAll();

    $municipio = new Municipio();
    $resultadomuniscipios= $municipio->orderBy('cod_muni')->findAll();

    $resultado = array(
        'resultadoniveles' => $resultadoniveles,
        'resultadomuniscipios' => $resultadomuniscipios     

);
    return view('frm_agregar_ciudadano',$resultado);  
       

    
}



    public function modificarCiudadano($codigo=null){   
    
        $dpi=$this->request->getVar('txtdpi');
        $nombre=$this->request->getVar('txtnombre');
        $apellido=$this->request->getVar('txtapellido');    
        $direccion=$this->request->getVar('txtdireccion');    
        $telcasa=$this->request->getVar('txttelcasa');    
        $telmovil=$this->request->getVar('txtmovil');    
        $email=$this->request->getVar('txtemail');    
        $fechanacimiento=$this->request->getVar('txtfechanacimiento');    
        $nivelaca=$this->request->getVar('lst_nivel_aca');    
        $municipio=$this->request->getVar('lst_municipio');    
      
        
        $ciudadanoup=new Ciudadanoup();
        $datos=[
          
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'direccion'=> $direccion,
            'tel_casa'=>$telcasa,
            'tel_movil'=>$telmovil,    
            'email'=> $email,
            'fechanac'=>$fechanacimiento,
            'cod_nivel_acad'=>$nivelaca,
            'cod_muni'=>$municipio
       ];

       $ciudadanoup->update($codigo, $datos);

       return $this->cargarCiudadanos();

       

    
    }





}