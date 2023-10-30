<?php 
namespace App\Models;

use CodeIgniter\Model;
class Paciente extends Model{
    protected $table      = 'pacientes';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'cod_paciente';
    protected $allowedFields=['cod_paciente','cod_estado_civil','cod_profesion','cod_pais','cod_departamento','cod_municipio','cod_genero','fecha_alta','fecha_nacimiento','lugar_nacimiento','telefono','cui','nit','nombre1','nombre2','nombre3','apellido1','apellido2','email','direccion','penicilina','polvo','moho','abeja','observaciones','padre','madre','conyuge','cuim','cuip','cuic','nombre_factura','nit_factura'];

}