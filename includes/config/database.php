<?php  

    function conectarDB() : mysqli {
        $db = mysqli_connect('localhost', 'u745111728_root', 'Root1234', 'u745111728_bienes_raices');

        if(!$db) {
            echo "Error no se pudo conectar a la base de datos";
            exit;
        }

        return $db;
    }