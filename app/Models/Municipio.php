<?php 
namespace App\Models;

use CodeIgniter\Model;
class Municipio extends Model{
    protected $table      = 'vmunicipios';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
   protected $primaryKey = 'cod_muni';
    protected $allowedFields=['cod_muni','nombre_municipio','departamento'];
}



