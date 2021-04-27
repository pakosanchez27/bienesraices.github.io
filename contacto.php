<?php

require 'includes/funciones.php'; 


incluirTemplete('header');

?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="imagen/webp">
            <source srcset="build/img/destacada3.jpg" type="imagen/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">

        </picture>
        <h2>Llene el formulario de contacto</h2>

        <form  class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu nombre">

                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Tu email">

                <label for="telefono">Email</label>
                <input id="telefono" type="tel" placeholder="Tu telefono">
                <label for="mensaje">Mensaje</label>
                <textarea  id="mensaje"  ></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la pripiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select  id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="Contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="Contactar-telefono">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input id="fecha" type="date" >

                <label for="hora">Hora</label>
                <input id="hora" type="time" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>
    </main>

    <?php incluirTemplete('footer'); ?>