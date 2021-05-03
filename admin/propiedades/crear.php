<?php
//base de datos 

require '../../includes/config/databases.php';

$db = conectarDB();

$consulta = "SELECT * FROM vendedores";
$resultado1 = mysqli_query($db, $consulta);
   

// arreglo con mensjes de errores
    $errores = [];
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';
    $creado = date('Y,m,d');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //  echo "<pre>";
    //  var_dump($_POST);
    //  echo "</pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];
    

    if(!$titulo){
        $errores[] = "Debes Añadir Titulo";
    }

    if(!$precio){
        $errores[] = "Debes Añadir precio";
    }
    if($descripcion < 50){
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

} 
//revisar qie el arreglo este vacio

if(empty($errores)){
    // insertar en la base de datos 
$query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";


$resultado = mysqli_query($db, $query);

if($resultado){
    header('Location: /admin ');
}

}


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

        <form  class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la propiedad" value="<?php echo $titulo ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="imagen/jpg, imagen/png" >
                
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