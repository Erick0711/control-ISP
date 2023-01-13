<?php

namespace App\Controllers\ISP;

use CodeIgniter\Controller;
use App\Models\ISP\ISP;
use App\Models\ISP\Proveedor;
use App\Models\ISP\Sucursal;
use DateTime;
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
        // $dataSucursal['sucursales'] = $this->instaciaSucursal()->orderBy('id','ASC')->findAll();

        $datos = array(
            'proveedores' => $this->instaciaProvee()->orderBy('id','ASC')->findAll(),
            'sucursales' => $this->instaciaSucursal()->orderBy('id','ASC')->findAll()
        );

        echo view('ISP/control_internet', $datos);
    }

    function agregar()
    {   
        $fecha1 = new DateTime($_POST['fechaCorte']);//fecha inicial
        $fecha2 = new DateTime($_POST['fechaResuelto']);//fecha de cierre
        
        $intervalo = $fecha1->diff($fecha2);
        
        $tiempo =  $intervalo->format('%d dia / %m mes / %Y año,  %Hh-%imin-%ss');
        if(isset($_POST['verificar'])){
            if($_POST['verificar'] == "on"){
                $data = [
                    'sucursal_id' => $_POST['sucursal'],
                    'proveedor_id' => $_POST['proveedor'],
                    'fecha_corte' => $_POST['fechaCorte'],
                    'fecha_resuelto' => $_POST['fechaResuelto'],
                    'observacion' => $_POST['observacion'],
                    'tiempo_control' =>  $tiempo
                ];
                $this->instaciaISP()->insert($data);
                $correcto = '<div class="alert alert-success" role="alert"> Guardado correctamente </div>';
                return redirect()->to('/')->with('menssage', $correcto);
            }
        }else{
            $incorrecto = '<div class="alert alert-danger" role="alert"> Verificar el boton (verificar) </div>';
            return redirect()->to('/')->with('menssage', $incorrecto);
        }
    }
}
