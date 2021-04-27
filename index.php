<?php

require 'includes/funciones.php'; 


incluirTemplete('header', $inicio = true);

?>

    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                </picture>
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img loading=lazy src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con exelente vista, acabados de lujo a un exelente precio</p>
                    <p class="precio">13,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img  class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>

                        <li>
                            <img  class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono Estacionamiento">
                            <p>4</p>
                        </li>

                    </ul>

                    <a href="anuncio.php" class="boton boton-amarillo-block">
                        Ver Propiedad
                    </a>                    
                </div><!-- contenido-anuncio -->
            </div><!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                </picture>
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img loading=lazy src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa Terminados de lujo</h3>
                    <p>Casa con diseños modernos, asi como tecnologia inteligente y amueblada</p>
                    <p class="precio">2,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img  class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>

                        <li>
                            <img  class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>

                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono Estacionamiento">
                            <p>4</p>
                        </li>

                    </ul>

                    <a href="anuncio.php" class="boton boton-amarillo-block">
                        Ver Propiedad
                    </a>                    
                </div><!-- contenido-anuncio -->
            </div><!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                </picture>
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img loading=lazy src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">3,000,000</p>

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

                    <a href="anuncio.php" class="boton boton-amarillo-block">
                        Ver Propiedad
                    </a>                    
                </div><!-- contenido-anuncio -->
            </div><!-- anuncio -->

        </div> <!-- contenedor-anuncios -->
        <div class="aliniar-derecha">
            <a href="anuncios.php" class="boton-verde ">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>llena el formularios de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactános</a>
    </section>
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="imagen/webp">
                        <source srcset="build/img/blog1.jpg" type="imagen/jpg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>
                            Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
    
                    </a>
                </div>

            </article>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="imagen/webp">
                        <source srcset="build/img/blog2.jpg" type="imagen/jpg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la Decoracion de tu Hogar</h4>
                        <p class="informacion-meta" >Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebnles y colores para derle a tu espacio
                        </p>
    
                    </a>
                </div>

            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una exelente forma, muy buena atencion y la casa que me ofrecioeron cumple con todas mis expectativas
                </blockquote>
                <p>- Francisco Sánchez</p>
            </div>
        </section>
    </div>


 
    <?php incluirTemplete('footer'); ?>


