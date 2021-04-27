<?php

require 'includes/funciones.php'; 


incluirTemplete('header');

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="imagen/webp">
            <source srcset="build/img/destacada.jpg" type="imagen/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt=" imagen de la propiedad">
        </picture>

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
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono Estacionamiento">
                    <p>4</p>
                </li>

            </ul>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate soluta magnam animi quas maiores iusto minima omnis. Quod ipsum vero eveniet tempore, itaque officia quam cum laudantium quibusdam placeat modi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia illo magnam rerum magni, molestias nisi expedita eaque laudantium ea maxime hic quasi recusandae. Vitae vel, doloribus porro ex nihil reiciendis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque iusto laboriosam illo adipisci voluptatibus, quasi consequatur, veniam et ratione repellendus magnam, quia at eum voluptatem voluptates incidunt quam aspernatur maiores!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quia vel omnis. Culpa aliquid asperiores, porro iusto odit sunt pariatur praesentium libero laudantium officia fuga animi perferendis tenetur doloribus maxime! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis soluta praesentium fugit voluptates culpa, earum, quam illum saepe nobis numquam deserunt suscipit similique maiores sequi velit adipisci cumque tempora ipsa!</p>
        </div>

    </main>


    <?php incluirTemplete('footer'); ?>


