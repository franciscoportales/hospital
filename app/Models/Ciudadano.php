<?php 
namespace App\Models;

use CodeIgniter\Model;
class Ciudadano extends Model{
    protected $table      = 'vciudadanos';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'dpi';
    protected $allowedFields=['dpi','nombre_ciudadano','direccion','tel_casa','tel_movil','email','fecha_nacimiento','edad','nivel_academico','nombre_municipio'];

}

