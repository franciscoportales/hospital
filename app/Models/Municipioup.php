<?php 
namespace App\Models;

use CodeIgniter\Model;
class Municipioup extends Model{
    protected $table      = 'municipios';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
   protected $primaryKey = 'cod_muni';
    protected $allowedFields=['cod_muni','nombre_municipio','cod_depto'];
}



