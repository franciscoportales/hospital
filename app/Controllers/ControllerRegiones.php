<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Regiones;
class ControllerRegiones extends Controller{

    public function cargarRegiones(){
        //crear un objeto de tipo Municipios
        $regiones = new Regiones();
        //realizar busqueda 
        $resultado['resultado']=$regiones->findAll();
        //cargar la vista y enviarle el resultado de la busqueda
        return view('vista_regiones',$resultado);
    }



    public function guardarRegion(){
        // recibe datos del formulario
        $codigo=$this->request->getVar('txtcodigo');
        $nombre=$this->request->getVar('txtnombre');
        $descripcion=$this->request->getVar('txtdescripcion');    
      
        
        $region=new Regiones();
        $datos=[
            'cod_region'=> $codigo,
            'nombre'=>$nombre,
            'descripcion'=>$descripcion      
       ];

       
        $region->insert($datos);


   
        return $this->cargarRegiones();
    
    }

    public function eliminarRegion($codigo=null){
        // echo "se eliminara el registro".$codigo;
 
          //mensaje de advertencia
     
         //instancial del modelo
         $regionesdel =new Regiones();
         $regionesdel->delete($codigo);
     //cargar datos el form
     
     return $this->cargarRegiones();
     
     
     }

     public function localizarRegion($codigo=null){   
    
        $regionesactualizar =new Regiones();
        $datosderegion['datosderegion']=$regionesactualizar ->where('cod_region',$codigo)->first();
        return view('frm_actualizar_region',$datosderegion);
        
    }

    public function modificarRegion($codigo=null){   
    
        $codigo=$this->request->getVar('txtcodigo');
        $nombre=$this->request->getVar('txtnombre');
        $descripcion=$this->request->getVar('txtdescripcion');    
      
        
        $region=new Regiones();
        $datos=['nombre'=>$nombre,
            'descripcion'=>$descripcion      
       ];

       $region->update($codigo, $datos);

       return $this->cargarRegiones();       

    
    }

}