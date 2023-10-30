<?php 
namespace App\Models;

use CodeIgniter\Model;
class Profesiones extends Model{
    protected $table      = 'profesiones';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'cod_profesion';
    protected $allowedFields=['cod_profesion','profesion'];

}