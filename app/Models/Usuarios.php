<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model{

public function ObtenerUsuario($data){
$Usuario=$this->db->table('t_usuario');
$Usuario->where($data);


return $Usuario->get()->getresultArray();
    
}


    
   // protected $table      = 'regiones';
    // Uncomment below if you want add primary key
   // protected $primaryKey = 'cod_region';
   // protected $allowedFields=['cod_region','nombre','descripcion'];

}