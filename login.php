<?php

 require 'includes/config/databases.php'; 
 $db = conectarDB();


 $errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = mysqli_real_escape_string( $db,  filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) );
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El Email es obligatorio o no es valido";
    }
    if (!$password) {
        $errores[] = "El password es obligatorio";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    if(empty($errores)){

        // Revisar si el usaurio existe

        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query); 

        if ( $resultado->num_rows ) {
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
            //  El usuario esta autenticado 

            session_start();

            $_SESSION['usuario'] = $usuario['email']; 
            $_SESSION['login'] = true;

            header('Location: /admin');

            }else{
                $errores[] = "El Password es incorrecto";
            }
 
        }else{
            $errores[] = "El Usuario no existe";
        }

    }
}




// incluye el  header
require 'includes/funciones.php';


incluirTemplete('header');

?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>  
        <div class="alerta error">
            <?php echo $error ?>
        </div>
        
        <?php endforeach; ?>

        <form method="POST" class="formulario ">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Tu email" >

                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Tu password">

                <input type="submit" value="Entrar" class="boton boton-verde">


            </fieldset>

        </formu>


    </main>

    <?php incluirTemplete('footer'); ?>