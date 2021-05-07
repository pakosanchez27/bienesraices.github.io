<?php echo
// importar la conexicion 
require 'includes/config/databases.php';

$db = conectarDB();

// Crear un email y password
$email = "cinthyapc27@gmail.com";
$password = "CinthyaPC27";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// query para crear el usuario

$query = "INSERT INTO usuarios (email, password) VALUES ( '${email}' , '${passwordHash}' )";

echo $query;

mysqli_query($db, $query);


?>