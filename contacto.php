<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="formulario" action="enviar.php" method="POST">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre" name="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu email" id="email" name="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu teléfono" id="telefono" name="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones" name="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto" name="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contactarTel" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contactarEmail" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora </p>

                <label for="fecha ">Fecha:</label>
                <input type="date" id="fecha" name="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00" name="hora">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>

