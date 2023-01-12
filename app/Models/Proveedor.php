<?php 
namespace App\Models;

use CodeIgniter\Model;

class Proveedor extends Model{
    protected $table = 'proveedor';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields  = [
        'proveedor'
    ];
}