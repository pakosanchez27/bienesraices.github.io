<?php

require 'includes/funciones.php'; 


incluirTemplete('header');

?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
              </div>  
                <div class="texto-nosotros">
                    <blockquote>
                        25 años de experiencia
                    </blockquote>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate soluta magnam animi quas maiores iusto minima omnis. Quod ipsum vero eveniet tempore, itaque officia quam cum laudantium quibusdam placeat modi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia illo magnam rerum magni, molestias nisi expedita eaque laudantium ea maxime hic quasi recusandae. Vitae vel, doloribus porro ex nihil reiciendis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque iusto laboriosam illo adipisci voluptatibus, quasi consequatur, veniam et ratione repellendus magnam, quia at eum voluptatem voluptates incidunt quam aspernatur maiores!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quia vel omnis. Culpa aliquid asperiores, porro iusto odit sunt pariatur praesentium libero laudantium officia fuga animi perferendis tenetur doloribus maxime! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis soluta praesentium fugit voluptates culpa, earum, quam illum saepe nobis numquam deserunt suscipit similique maiores sequi velit adipisci cumque tempora ipsa!</p>
                </div>
            </div>
        </div>

    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="iconos">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Serguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci similique at amet ipsa? Nesciunt dolore voluptates expedita obcaecati, maxime atque voluptatibus incidunt voluptatem delectus! </p>
            </div>
            <div class="iconos">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci similique at amet ipsa? Nesciunt dolore voluptates expedita obcaecati, maxime atque voluptatibus incidunt voluptatem delectus! </p>
            </div>
            <div class="iconos">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci similique at amet ipsa? Nesciunt dolore voluptates expedita obcaecati, maxime atque voluptatibus incidunt voluptatem delectus! </p>
            </div>
        </div>
    </section>

    <?php incluirTemplete('footer'); ?>


