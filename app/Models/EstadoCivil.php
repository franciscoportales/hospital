<?php 
namespace App\Models;

use CodeIgniter\Model;
class EstadoCivil extends Model{
    protected $table      = 'estado_civil';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'cod_estado_civil';
    protected $allowedFields=['cod_estado_civil','estado_civil'];

}