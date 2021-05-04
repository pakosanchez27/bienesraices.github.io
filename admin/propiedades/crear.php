<?php
//base de datos 

require '../../includes/config/databases.php';

$db = conectarDB();

$consulta = "SELECT * FROM vendedores";
$resultado1 = mysqli_query($db, $consulta);
   

  // Arreglo con mensajes de errores
  $errores = [];

  $titulo = '';
  $precio = '';
  $descripcion = '';
  $habitaciones = '';
  $wc = '';
  $estacionamiento = '';
  $vendedorId = '';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //  echo "<pre>";
    //  var_dump($_POST);
    //  echo "</pre>";

    $titulo = mysqli_real_escape_string( $db,  $_POST['titulo'] );
    $precio = mysqli_real_escape_string( $db,  $_POST['precio'] );
    $descripcion = mysqli_real_escape_string( $db,  $_POST['descripcion'] );
    $habitaciones = mysqli_real_escape_string( $db,  $_POST['habitaciones'] );
    $wc = mysqli_real_escape_string( $db,  $_POST['wc'] );
    $estacionamiento = mysqli_real_escape_string( $db,  $_POST['estacionamiento'] );
    $vendedorId = mysqli_real_escape_string( $db,  $_POST['vendedor'] );
    $creado = date('Y/m/d');

     // Asignar files hacia una variable
     $imagen = $_FILES['imagen'];



    if(!$titulo){
        $errores[] = "Debes Añadir Titulo";
    }

    if(!$precio){
        $errores[] = "Debes Añadir precio";
    }
    if($descripcion <= 50){
        $errores[] = "La descripcion debe de coneter almenos 50 caracteres";
    }
    if(!$habitaciones){
        $errores[] = "Debes Añadir habitaciones";
    }
    if(!$wc){
        $errores[] = "Debes Añadir cuantos baños ";
    }
    if(!$estacionamiento){
        $errores[] = "Debes Añadir cuantos estacionamientos";
    }
    if(!$vendedorId){
        $errores[] = "Debes Añadir el vendedor";
    }
    // echo "<pre>";
    //  var_dump($errores);
    //  echo "</pre>";

    if(!$imagen['name'] || $imagen['error'] ) {
        $errores[] = 'La Imagen es Obligatoria';
    }

    // Validar por tamaño (1mb máximo)
    $medida = 1000 * 1000;


    if($imagen['size'] > $medida ) {
        $errores[] = 'La Imagen es muy pesada';
    }



    if(empty( $errores ) ) {

        // subida de archivos 
        $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";


            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );
        
    
    
        // insertar en la base de datos 
    $query = " INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$nombreImagen','$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";
    
    
    $resultado = mysqli_query($db, $query);
    
    if($resultado){
        header('Location: /admin?resultado=1');
    }
    
    }
} 
//revisar qie el arreglo este vacio




require '../../includes/funciones.php'; 


incluirTemplete('header');

?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
            <?php echo $error;  ?>
            </div>
            
        <?php endforeach ?>        

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php echo $titulo ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen" value="<?php echo $imagen ?>">
                
                <label for="descripcion">descripcion:</label>
                <textarea  id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>

            </fieldset>
            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9" name="habitaciones" value="<?php echo $habitaciones ?>">

                <label for="wc">baños:</label>
                <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9" name="wc" value="<?php echo $wc ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max="9" name="estacionamiento" value="<?php echo $habitaciones?>">


            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc( $resultado1 )): ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id'] ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                        
                       

                        <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

    <?php incluirTemplete('footer'); ?>