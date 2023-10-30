<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Empleado;


class ControllerEmpleados extends Controller{
    public function cargarEmpleados(){
        $empleado = new Empleado();
        $resultadoEmpleado = $empleado->orderby('idempleado')->findAll();
        $resultado = array(
            'resultadoEmpleado' => $resultadoEmpleado           
        );
        return view('vista_empleados',$resultado);
    }

    public function guardarEmpleados()    
    {        
        $idempleado = $this->request->getvar("txt_idempleado");
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');   
        $fechaingreso = $this->request->getVar('txt_fechaingreso');
        $dpi = $this->request->getVar('txt_dpi');
        $direccion = $this->request->getVar('txt_direccion');          
        $estado_civil = $this->request->getVar('txt_estado_civil');        
        $codigo = $this->request->getVar('txt_codigo');
        $codigopuesto = $this->request->getVar('txt_codigopuesto');
        $status = $this->request->getVar('txt_status');
       

        $empleado = new Empleado();
        $datos = [
            'idempledo' => $idempleado,
            'nombre' => $nombre,
            'apellido' => $apellido,            
            'fecha_ingreso'=>$fechaingreso,
            'dpi'=>$dpi,
            'direccion' => $direccion,            
            'estado_civil' => $estado_civil,            
            'codigo' => $codigo,
            'codigopuesto' => $codigopuesto,
            'status' => $status
            ];

        $empleado->insert($datos);
        $response['message'] = 'Datos grabados con éxito.';       
        return $this->cargarEmpleados();
    }

    public function eliminarEmpleados($idempleado=null)
    {        
        $empleado = new Empleado();
        $empleado->delete($idempleado);                
        return $this->cargarEmpleados();
        $response['message'] = 'Eliminado'; 
    }   

    public function localizarEmpleado($idempleado=null){  
        echo 'entro aqui';    
        $response['message'] = 'entro a localizar';   
        $empleado = new Empleado();
        $datosEmpleado['datosEmpleado']=$empleado->where('idempleado',$idempleado)->first();        
        return view('frm_actualizar_empleado',$datosEmpleado);
    }

    public function modificarEmpleado($idempleado=null)
    {      
        $idempleado = $this->request->getVar('txt_idempleado');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');   
        $fechaingreso = $this->request->getVar('txt_fechaingreso');
        $dpi = $this->request->getVar('txt_dpi');
        $direccion = $this->request->getVar('txt_direccion');          
        $estado_civil = $this->request->getVar('txt_estado_civil');        
        $codigo = $this->request->getVar('txt_codigo');
        $codigopuesto = $this->request->getVar('txt_codigopuesto');
        $status = $this->request->getVar('txt_status');
    
        $empleado = new Empleado();
        $datos=['idempledo' => $idempleado,
        'nombre' => $nombre,
        'apellido' => $apellido,            
        'fecha_ingreso'=>$fechaingreso,
        'dpi'=>$dpi,
        'direccion' => $direccion,            
        'estado_civil' => $estado_civil,            
        'codigo' => $codigo,
        'codigopuesto' => $codigopuesto,
        'status' => $status
        ];
    
        $empleado->update($idempleado,$datos);
        return $this->cargarEmpleados();                
    }

    
  
}   
