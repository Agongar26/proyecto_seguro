<?php
$host = 'db';
$user = 'root';

//Se obtiene la contraseña de la variable de entorno
$pass = getenv('ROOT_PASSWORD');
$dbname  ='mysql';

try {
	$dsn = 'mysql:host=$host;dbname=$dbname;charset=utf8mb4';
	$pdo = new PDO($dsn, $user, $pass);

	//Mensaje de éxito requerido
	echo "<h1>Conexión exitosa a la base de datos</h1>";
	echo "<p>El despliegue automatizado y seguro funciona correctamente.</p>";
} catch (PDOException $e) {
	//MEnsaje de error requerido
	echo "<h1>Error de conexión a la base de datos</h1>";
	echo "<p>Detalle: " . $e->getMessage() . "</p>";
}
?>
