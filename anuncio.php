<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta</h1>

        <div class="contenedor-slider">
            <div class="slider" id="slider">
                <div class="slider__section"><img src="build/img/anuncio1.jpg" alt="Primera" class="slider__img"></div>
                <div class="slider__section"><img src="build/img/anuncio2.jpg" alt="Segunda" class="slider__img"></div>
                <div class="slider__section"><img src="build/img/anuncio3.jpg" alt="Tercera" class="slider__img"></div>
                <div class="slider__section"><img src="build/img/anuncio4.jpg" alt="Cuarta" class="slider__img"></div>
            </div>
            <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
            <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
        </div>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia illum rem quia, deleniti ratione atque temporibus magni nemo quis perferendis dolorem mollitia ipsa quam voluptatem fugiat eos voluptas amet earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ex eaque aut dolor, error laboriosam! Error consequuntur libero, veniam aut tempore exercitationem animi doloremque est! Accusamus, iste sunt. Nobis, porro? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia eius vel, eveniet cum quidem distinctio inventore adipisci aperiam corrupti dolore nobis facere placeat nemo veritatis. Nostrum mollitia repellendus ipsam quod?</p>
        </div>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>

