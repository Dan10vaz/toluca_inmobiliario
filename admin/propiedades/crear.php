<?php

// base de datos 

require '../../includes/config/database.php';
$db = conectarDB();

//Arreglo con mensajes de errores
$errores = [];

//Ejecutar el codigo despues de que el usuario envia el formulario

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>"; */


    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];

    if(!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }

    if(!$precio) {
        $errores[] = "El precio es obligatorio";
    }

    if(strlen(!$descripcion) < 50 ) {
        $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
    }

    if(!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }

    if(!$wc) {
        $errores[] = "El numero de baños es obligatorio";
    }

    if(!$estacionamiento) {
        $errores[] = "El numero de lugares de estacionamiento es obligatorio";
    }

    if(!$vendedorId) {
        $errores[] = "Elige un vendedor";
    }
    
    /* echo "<pre>";
    var_dump($errores);
    echo "</pre>"; */
    

    //Insertar en la base de datos 
    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId ) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";
    
    //Almacenar en la base de datos
    $resultado = mysqli_query($db, $query);

    if($resultado) {
        echo "Insertado Correctamente";
    }
}


require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Alta de Inmuebles</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <form action="/admin/propiedades/crear.php" class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagenes:</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png" multiple>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <option value="1">Daniel</option>
                <option value="2">Estefany</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>