<?php 
namespace App\Models;

use CodeIgniter\Model;
class Ciudadanoup extends Model{
    protected $table      = 'ciudadanos';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'dpi';
    protected $allowedFields=['dpi','nombre','apellido','direccion','tel_casa','tel_movil','email','fechanac','cod_nivel_acad','cod_muni'];

}

