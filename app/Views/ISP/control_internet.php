<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control-ISP</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="icon" href="<?= base_url('assets/icon/control-logo.ico')?>">
</head>

<body>
    <div class="container-lg w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100 d-flex justify-content-center flex-column align-items-center">
            <form action="<?= base_url('registrar') ?>" method="POST" class="p-5 w-75 vh-50 border border-dark bg-dark roudend">
                <h1 class="text-center text-warning fst-italic">Control de ISP</h1>
                <?php if (session('menssage')) { ?>
                    <p class="text-center text-white"><?= session('menssage'); ?></p>
                <?php } ?>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label text-white">Proveedor:</label>
                        <select name="proveedor" id="" class="form-select" required="true">
                            <option value="0">Seleccionar</option>
                            <?php foreach ($proveedores as $proveedor) { ?>
                                <option value="<?php echo $proveedor['id'] ?>"><?php echo ucfirst($proveedor['proveedor']) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                        <label for="exampleInputEmail1" class="form-label text-white">Sucursal: </label>
                        <select name="sucursal" id="" class="form-select" required="true">
                            <option value="0">Seleccionar</option>
                            <?php foreach ($sucursales as $sucursal) { ?>
                                <option value="<?php echo $sucursal['id'] ?>"><?php echo ucfirst($sucursal['sucursal']) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="exampleInputEmail1" class="form-label text-white">Fecha Corte: </label>
                        <input type="datetime-local" name="fechaCorte" id="" class="form-control" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="exampleInputEmail1" class="form-label text-white">Fecha Resulto: </label>
                        <input type="datetime-local" name="fechaResuelto" id="" class="form-control" required>
                    </div>

                    <div class="col-md-12 mt-2">
                        <label for="exampleInputEmail1" class="form-label text-white">Observación: </label>
                        <textarea name="observacion" id="" cols="1" rows="1" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12 mt-4 text-center">
                        <input type="checkbox" class="btn-check" name="verificar" id="btn-check-2-outlined" autocomplete="off">
                        <label class="btn btn-outline-success" for="btn-check-2-outlined">Verificar</label><br>
                    </div>

                    <div class="col-md-12 mt-4">
                        <input type="submit" value="Registrar" class="btn btn-warning btn-block w-100 text-white">
                    </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>