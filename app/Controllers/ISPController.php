<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ISP;
use App\Models\Proveedor;
use App\Models\Sucursal;
class ISPController extends Controller
{
    function instaciaISP()
    {
        $instancia = new ISP;
        return $instancia;
    }
    function instaciaProvee()
    {
        $instancia = new Proveedor;
        return $instancia;
    }
    function instaciaSucursal()
    {
        $instancia = new Sucursal;
        return $instancia;
    }
    function index()
    {
        $dataSucursal['sucursales'] = $this->instaciaSucursal()->orderBy('id','ASC')->findAll();
        $datos['proveedores'] = $this->instaciaProvee()->orderBy('id','ASC')->findAll();
        $array = array($dataSucursal, $datos);
        echo view('control_internet', $dataSucursal);
    }

    // function agregar()
    // {   
    //     $data = [
    //         'sucursal_id' => $_POST['sucursal'],
    //         'proveedor_id' => $_POST['proveedor'],
    //         'fecha_corte' => $_POST['fechaCorte'],
    //         'fecha_resuelto' => $_POST['fechaResuelto'],
    //         'observacion' => $_POST['observacion']
    //     ];
    //     $this->instaciaISP()->insert($data);
    // }
}
