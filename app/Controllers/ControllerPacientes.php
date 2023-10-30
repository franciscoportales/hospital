<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Paciente;
use App\Models\Paises;
use App\Models\EstadoCivil;
use App\Models\Profesiones;


class ControllerPacientes extends Controller{
    
    public function cargarPacientes(){
        //echo 'llego';
        $paciente = new Paciente();
        $resultadopacientes=$paciente->orderBy('cod_paciente')->findAll();     

        $paises = new Paises();
        $resultadopaises= $paises->orderBy('pais')->findAll();

        
       $estadocivil=new EstadoCivil();
       $resultadoestadocivil= $estadocivil->orderBy('estado_civil')->findAll();   


       $profesiones=new Profesiones();
       $resultadoprofesiones= $profesiones->orderBy('profesion')->findAll();   

        $resultado = array(
            'resultadopacientes' => $resultadopacientes,
            'resultadopaises' => $resultadopaises,
            'resultadoestadocivil' =>$resultadoestadocivil,
            'resultadoprofesiones'=>$resultadoprofesiones
            
        );        
        
        return view('vista_pacientes',$resultado); 
    }


    public function localizarPaciente($codigo=null){   
    
        $paciente=new Paciente();
        $resultadoPaciente=$paciente ->where('cod_paciente',$codigo)->first();

        $paises = new Paises();
        $resultadopaises= $paises->orderBy('pais')->findAll();    
        
       $estadocivil=new EstadoCivil();
       $resultadoestadocivil= $estadocivil->orderBy('estado_civil')->findAll();   


       $profesiones=new Profesiones();
       $resultadoprofesiones= $profesiones->orderBy('profesion')->findAll();          

       

        $resultado = array(
            'resultadoPaciente' => $resultadoPaciente,
            'resultadopaises' => $resultadopaises ,
            'resultadoestadocivil' =>$resultadoestadocivil,
            'resultadoprofesiones'=>$resultadoprofesiones
   );


        return view('frm_actualizar_paciente',$resultado);
        
    }

    public function guardarPaciente(){
        // recibe datos del formulario

        $nombre1=$this->request->getVar('txtnombre1');
        $nombre2=$this->request->getVar('txtnombre2');    
        $nombre3=$this->request->getVar('txtnombre3');    
        $apellido1=$this->request->getVar('txtapellido1');    
        $apellido2=$this->request->getVar('txtapellido2');    
        $dpi=$this->request->getVar('txtdpi');    
        $telefono=$this->request->getVar('txttelefono');          
        $fechanacimiento=$this->request->getVar('txtfechanacimiento');          
      
                         
        $paciente=new Paciente();
        $datos=[          
            'nombre1'=>$nombre1,
            'nombre2'=>$nombre2,
            'nombre3'=>$nombre3,
            'apellido1'=>$apellido1,
            'apellido2'=>$apellido2,
            'cui'=>$dpi,
            'telefono'=>$telefono,
            'fecha_nacimiento'=> $fechanacimiento
                
       ];
       
        $paciente->insert($datos);
        return $this->cargarPacientes();
    
    }
    

    //modificar

    



    public function modificarPaciente($codigo=null){   
    
        $cod_paciente=$this->request->getVar('txtcodpaciente');
        $nombre1=$this->request->getVar('txtnombre1');
        $nombre2=$this->request->getVar('txtnombre2');
        $nombre3=$this->request->getVar('txtnombre3');
        $apellido1=$this->request->getVar('txtapellido1');
        
        $apellido2=$this->request->getVar('txtapellido2');
        $dpi=$this->request->getVar('txtdpi');
        $telefono=$this->request->getVar('txttelefono');
        $fecha_nacimiento=$this->request->getVar('txtfechanacimiento');        
        $direccion=$this->request->getVar('txtdireccion');      
        $email=$this->request->getVar('txtemail');

        $sexo=$this->request->getVar('lst_sexo');     

        $pueblo=$this->request->getVar('lst_pueblo');        
        $cod_pais=$this->request->getVar('lst_pais');
        $estado_civil=$this->request->getVar('lst_estado');
        $profesion=$this->request->getVar('lst_profesion');
        $lugar_nacimiento=$this->request->getVar('txtlugar_nacimiento');
        
        $padre=$this->request->getVar('txtpadre');
        $cuip=$this->request->getVar('txtcuip');        
        $madre=$this->request->getVar('txtmadre');
        $cuim=$this->request->getVar('txtcuim');
        $conyuge=$this->request->getVar('txtconyuge');
        
        $cuic=$this->request->getVar('txtcuic');        
        $nombre_factura=$this->request->getVar('txtnombre_factura');
        $nitactura=$this->request->getVar('txtnitfactura');   
              
        
        
        
        $paciente=new Paciente();
        $datos=[      
            'nombre1'=>$nombre1,
            'nombre2'=> $nombre2,
            'nombre3'=> $nombre3,
            'apellido1'=> $apellido1,       
           'apellido2'=>  $apellido2,           
           'cui'=> $dpi,
           'direccion'=> $direccion,     
            'telefono'=> $telefono,
            'email'=>$email,
            'fecha_nacimiento'=>$fecha_nacimiento,      
            'cod_genero'=> $sexo,
            'nombre'=> $pueblo,
            'cod_pais'=>$cod_pais,
            'cod_estado_civil'=>$estado_civil,
            'cod_profesion'=>$profesion,
            'lugar_nacimiento'=>$lugar_nacimiento,             
            'padre'=> $padre,
            'cuip'=> $cuip,
            'madre'=> $madre,
            'cuim'=> $cuim,
            'conyuge'=> $conyuge,       
            'cuic'=> $cuic,
             'nombre_factura'=>$nombre_factura,
            'nit_actura'=> $nitactura           
       ];
    
       $paciente->update($cod_paciente,$datos);      
      
       
    
       return $this->cargarPacientes();
    
    
    }

    

    public function eliminarPaciente($codigo=null){
        $paciente=new Paciente();
        $paciente->delete($codigo);     
        return $this->cargarPacientes();
    
    
    }
    

 


}