<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control-ISP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container-lg w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="row  d-flex justify-content-center flex-column align-items-center">
            <form action="<?= base_url('registrar') ?>" method="POST" class="p-5 w-75 vh-50 border border-dark bg-dark roudend">
                <h1 class="text-center text-warning">Control de ISP</h1>
                <div class="row">
                    <div class="col-md-12">
                        <label for="exampleInputEmail1" class="form-label text-white">Proveedor:</label>
                        <select name="proveedor" id="" class="form-select">
                            <?php foreach ($proveedores as $proveedor) { ?>
                                <option value="<?php echo $proveedor['id']?>"><?php echo ucfirst($proveedor['proveedor'])?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="exampleInputEmail1" class="form-label text-white">Fecha Corte: </label>
                        <input type="datetime-local" name="fechaCorte" id="" class="form-control">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="exampleInputEmail1" class="form-label text-white">Fecha Resulto: </label>
                        <input type="datetime-local" name="fechaResuelto" id="" class="form-control">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="exampleInputEmail1" class="form-label text-white">Sucursal: </label>
                        <select name="sucursal" id="" class="form-select">
                            <?php foreach ($sucursales as $sucursal) { ?>
                                <option value="<?php echo $sucursal['id']?>"><?php echo ucfirst($sucursal['sucursal'])?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="exampleInputEmail1" class="form-label text-white">Observación: </label>
                        <textarea name="observacion" id="" cols="1" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mt-4">
                        <input type="submit" value="Registrar" class="btn btn-warning btn-block w-100">
                    </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>