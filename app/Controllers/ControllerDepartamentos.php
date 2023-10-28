<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Departamento;
use App\Models\VwDepartamentos;
use App\Models\Regiones;

class ControllerDepartamentos extends Controller{
    public function cargarDepartamentos(){
       
       // $deptos = new VwDepartamentos();     
       // $resultado['resultado']=$deptos->orderBy('cod_depto')->findAll();       
     
       $departamento=new VwDepartamentos();
       $resultadoDepartamento=$departamento ->orderBy('cod_depto')->findAll();   


       $regiones = new Regiones();
       //realizar busqueda 
       $resultadoregiones= $regiones->orderBy('cod_region')->findAll();

       $resultado = array(
           'resultadoDepartamento' => $resultadoDepartamento,
           'resultadoregiones'=>$resultadoregiones

  );         
     
       return view('vista_departamentos',$resultado);
    }


    public function guardarDepartamento(){
        // recibe datos del formulario

        $codigo=$this->request->getVar('txtcodigo');
        $nombre=$this->request->getVar('txtnombre');
        $region=$this->request->getVar('lst_region');          
                         
        $departamento=new Departamento();
        $datos=[
            'cod_depto'=> $codigo,
            'nombre_depto'=>$nombre,
            'cod_region'=>$region            
       ];
       
        $departamento->insert($datos);
        return $this->cargarDepartamentos();
    
    }
               
    


    public function modificarDepartamento($codigo=null){   
    
        $codigo=$this->request->getVar('txtcodigo');
        $nombre=$this->request->getVar('txtnombre');
        $region=$this->request->getVar('lst_region');      
      
        
        $departamento=new Departamento();
        $datos=[
          
            'cod_depto'=> $codigo,
            'nombre_depto'=>$nombre,
            'cod_region'=>$region         
       ];

       $departamento->update($codigo, $datos);

       return $this->cargarDepartamentos();

       

    
    }


    public function eliminarDepartamento($codigo=null){
        // echo "se eliminara el registro".$codigo;
 
          //mensaje de advertencia
     
         //instancial del modelo
         $departamento =new Departamento();
         $departamento->delete($codigo);
        //cargar datos el form
     
     return $this->cargarDepartamentos();
     
     
     }
  

     public function localizarDepartamento($codigo=null){   
    
        $departamento=new Departamento();
        $resultadoDepartamento=$departamento ->where('cod_depto',$codigo)->first();


        $regiones = new Regiones();
        //realizar busqueda 
        $resultadoregiones= $regiones->orderBy('cod_region')->findAll();

        $resultado = array(
            'resultadoDepartamento' => $resultadoDepartamento,
            'resultadoregiones'=>$resultadoregiones

   );


        return view('frm_actualizar_departamento',$resultado);
        
    }




}