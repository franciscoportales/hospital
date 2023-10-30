<?php 
namespace App\Models;

use CodeIgniter\Model;

class Empleado extends Model{
    protected $table      = 'empleados';
    protected $primaryKey = 'idempleado';
    protected $allowedFields = ['idempleado','nombre','apellido','fecha_nacimiento','dpi','direccion','estado_civil','telefono','nacionalidad','hijos','codigo','codigopuesto','status'];

}