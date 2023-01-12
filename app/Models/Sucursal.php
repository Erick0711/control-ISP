<?php 
namespace App\Models;

use CodeIgniter\Model;

class Sucursal extends Model{
    protected $table = 'sucursal';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields  = [
        'sucursal'
    ];
}
