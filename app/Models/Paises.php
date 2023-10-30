<?php 
namespace App\Models;

use CodeIgniter\Model;
class Paises extends Model{
    protected $table      = 'pais';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'cod_pais';
    protected $allowedFields=['cod_pais','pais'];

}