<?php 
namespace App\Models;

use CodeIgniter\Model;

class ISP extends Model{
    protected $table = 'data_control';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields  = [
        'sucursal_id',
        'proveedor_id',
        'fecha_corte',
        'fecha_resuelto',
        'observacion'
    ];
}
