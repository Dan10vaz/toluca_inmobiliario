<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toluca Grupo Inmobiliario</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>"> 
        <div class="contenedor contenido-header">
            
            <div class="barra">
                <h1>TOLUCA GRUPO INMOBILIARIO</h1>
                    <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="icono menu responsive">
                    </div>

                    <div class="derecha">
                        <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="Imagen dark mode">
                        <nav class="navegacion">
                            <a href="nosotros.php">Nosotros</a>
                            <a href="anuncios.php">Anuncios</a>
                            <a href="blog.php">Blog</a>
                            <a href="contacto.php">Contacto</a>
                        </nav>
                    </div>
                

            </div> <!--Cierre de barra-->

            <a class="bienes" href="/">
                <img src="/build/img/logo.svg" width="75" height="75" alt="Logotipo de bienes raices">
            </a>
        </div>
    </header>