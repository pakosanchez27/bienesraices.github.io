<?php

// importar la conexion 
require '../includes/config/databases.php';

$db = conectarDB();

// Escribir el Query 
$query = "SELECT * FROM propiedades";

//Consultar db 
$resultadoConsulta = mysqli_query($db, $query);


$resultado = $_GET['resultado'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id =$_POST['id']; 
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){

        // Eliminar archivos
        $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db, $query); 
        $proiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $proiedad['imagen']);

        $query = "DELETE FROM propiedades WHERE id = ${id}";
        $resultado = mysqli_query($db, $query); 

        if($resultado){
            header('Location: /admin?resultado=3');
        }
    }

}

require '../includes/funciones.php'; 

incluirTemplete('header');

?>
    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval( $resultado) === 1): ?>
            <p  class="alerta exito ">Anuncio Registrado Correctamente</p>
        <?php endif ?>
        <?php if(intval( $resultado) === 2): ?>
            <p  class="alerta exito ">Anuncio Actualizado Correctamente</p>
        <?php endif ?>
        <?php if(intval( $resultado) === 3): ?>
            <p  class="alerta exito ">Anuncio Eliminado Correctamente</p>
        <?php endif ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while( $proiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $proiedad['id']; ?></td>
                    <td><?php echo $proiedad['titulo']; ?></td>
                    <td> <img src="/imagenes/<?php echo $proiedad['imagen']; ?>" alt=" imagen x" class="imagen-tabla"> </td>
                    <td>$<?php echo $proiedad['precio']; ?></td>
                    <td>
                        <form method="POST" class=".w-100">
                            <input type="hidden" name="id" value="<?php echo $proiedad['id'] ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $proiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
             <?php endwhile; ?> 
            </tbody>
        </table>

    </main>

    <?php 
        mysqli_close($db);
    ?>

    <?php incluirTemplete('footer'); ?>