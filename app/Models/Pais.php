<?php 
namespace App\Models;

use CodeIgniter\Model;

    class Pais extends Model{
    protected $table      = 'paises';    
    protected $primaryKey = 'pais_id';
    protected $allowedFields = ['pais_id','descripcion'];
}   

