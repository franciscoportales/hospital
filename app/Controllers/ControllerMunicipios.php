<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Municipio;
use App\Models\Municipioup;
use App\Models\Departamento;

class ControllerMunicipios extends Controller{

    public function cargarMunicipios(){
        //crear un objeto de tipo Municipios
        $municipios = new Municipio();
        //realizar busqueda 
        $resultadoMunicipios=$municipios->findAll();

        $departamento=new Departamento();
        $resultadoDepartamento=$departamento ->orderBy('cod_depto')->findAll();   

        $resultado = array(
            'resultadoMunicipios' => $resultadoMunicipios,
            'resultadoDepartamento'=>$resultadoDepartamento
        );

        return view('vista_municipios',$resultado);

  
    }
        

    public function guardarMunicipio(){
        // recibe datos del formulario

        $codigo=$this->request->getVar('txtcodigo');
        $nombre=$this->request->getVar('txtnombre');
        $depto=$this->request->getVar('lst_nivel_depto');          
                         
        $Municipio=new Municipioup();
        $datos=[
            'cod_muni'=> $codigo,
            'nombre_municipio'=>$nombre,
            'cod_depto'=>$depto            
       ];
       
        $Municipio->insert($datos);
        return $this->cargarMunicipios();
    
    }


    public function localizarMunicipio($codigo=null){
  
        $municipioup = new Municipioup();
        $resultadoMunicipios=$municipioup->where('cod_muni',$codigo)->first();


        $departamento=new Departamento();
        $resultadoDepartamento=$departamento ->orderBy('cod_depto')->findAll();  

        $resultado = array(
            'resultadoMunicipios' => $resultadoMunicipios,
            'resultadoDepartamento'=>$resultadoDepartamento
        );

        return view('frm_actualizar_municipio',$resultado);
    }




    public function modificarMunicipio(){
   
        $codigo=$this->request->getVar('txtcodigo');
        $nombre=$this->request->getVar('txtnombre');
        $depto=$this->request->getVar('lst_nivel_depto');       
        
        $municipioup = new Municipioup();
        $datos=['nombre_municipio'=>$nombre,
              'cod_depto'=>$depto     
        ];

        $municipioup->update($codigo,$datos);
        return $this->cargarMunicipios();
    }



    public function eliminarMunicipio($codigo=null){
        // echo "se eliminara el registro".$codigo;
 
          //mensaje de advertencia
     
         //instancial del modelo
         $municipioup = new Municipioup();
         $municipioup->delete($codigo);
        //cargar datos el form
     
     return $this->cargarMunicipios();
     
     
     }
  



}