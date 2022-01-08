<?php 

    require 'funciones.php';
    require 'config/database.php';
    require  __DIR__ . '/../vendor/autoload.php';

    use App\Propieda;
    $propiedad = new Propieda;
    var_dump($propiedad);
