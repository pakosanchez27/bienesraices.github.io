<?php


require 'includes/funciones.php'; 


incluirTemplete('header');

?>

    
        <section class="seccion contenedor">
            <h2>Casas y Depas en Venta</h2>
    
            
            <?php 
            $limite = 10;
            include 'includes/templetes/anuncios.php';
        ?>


            </div> <!-- contenedor-anuncios -->
    </section>

            <?php incluirTemplete('footer'); ?>