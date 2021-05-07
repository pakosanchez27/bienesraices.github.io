<?php

require 'includes/funciones.php'; 


incluirTemplete('header');

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Para la decoracion de tu hogar</h1>

        

        <picture>
            <source srcset="build/img/destacada2.webp" type="imagen/webp">
            <source srcset="build/img/destacada2.jpg" type="imagen/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt=" imagen de la propiedad">
        </picture>
        <p class="informacion-meta ">Escrito el : <span>20/10/2021</span> por: <span>Admin</span> </p>
        <div class="resumen-propiedad">

           

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate soluta magnam animi quas maiores iusto minima omnis. Quod ipsum vero eveniet tempore, itaque officia quam cum laudantium quibusdam placeat modi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia illo magnam rerum magni, molestias nisi expedita eaque laudantium ea maxime hic quasi recusandae. Vitae vel, doloribus porro ex nihil reiciendis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque iusto laboriosam illo adipisci voluptatibus, quasi consequatur, veniam et ratione repellendus magnam, quia at eum voluptatem voluptates incidunt quam aspernatur maiores!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quia vel omnis. Culpa aliquid asperiores, porro iusto odit sunt pariatur praesentium libero laudantium officia fuga animi perferendis tenetur doloribus maxime! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis soluta praesentium fugit voluptates culpa, earum, quam illum saepe nobis numquam deserunt suscipit similique maiores sequi velit adipisci cumque tempora ipsa!</p>
        </div>

    </main>


    <?php incluirTemplete('footer'); ?>