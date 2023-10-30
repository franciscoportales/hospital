<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Paciente;
class ControllerPacientes extends Controller{
    
    public function cargarPacientes(){


        
        $paciente = new Paciente();
        $resultado['resutado'] = $paciente->findAll();
        return view('vista_pacientes',$resultado);
    }



}