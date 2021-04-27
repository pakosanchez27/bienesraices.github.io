<?php
require 'app.php';

function incluirTemplete( $nombre, $inicio = false) {
    include TEMPLETES_URL. "/${nombre}.php";
}