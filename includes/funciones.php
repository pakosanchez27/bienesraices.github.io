<?php
require 'app.php';

function incluirTemplete( $nombre, $inicio = false) {
    include TEMPLETES_URL. "/${nombre}.php";
}

function estaAutenticado() : bool {
    session_start();

 $auth = $_SESSION['login'];
 if ($auth) {
    return true; 

}
return false;

}