<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Ejercicio 03-2</title>
</head>
<body>
    <div class="m-0">
        <nav class="navbar navbar-expand-lg navbar-success bg-success">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Laboratorio #5</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="Ejercicio01.html" class="nav-item nav-link">Ejercicio #1</a>
                        <a href="Ejercicio02.html" class="nav-item nav-link">Ejercicio #2</a>
                        <a href="Ejercicio03.html" class="nav-item nav-link">Ejercicio #3</a>
                        <a href="Ejercicio04.html" class="nav-item nav-link">Ejercicio #4</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>    
    <?php
            $precio = $_POST["tarifa"];
            $cant = $_POST["cant"];

            $importeBruto=$precio*$cant;
            $desc=$importeBruto*0.15;
            $obseq=$cant*3;
            
            $importeNeto=$importeBruto-$desc;
    ?>
    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-12">
                <div class="card text-bg-success">
                    <h5 class="card-header text-center">Bonificaciones y Comisiones</h5>
                    <div class="card-body">
                        <p>Importe Bruto: S/.<?php echo $importeBruto; ?></p>
                        <p>Importe del descuento: S/.<?php echo $desc; ?></p>
                        <p>Importe Neto: S/.<?php echo $importeNeto; ?></p>
                        <p>Lapiceros de obsequio: <?php echo $obseq; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>
