<?php
$host = 'mysqlserver';
$db = 'testdb';
$user = 'root';
$pass = 'rootpass';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM productos");
if (!$result) {
    die("Error en consulta: " . $mysqli->error);
}


echo "<h1>Lista de productos</h1><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['nombre']} - \$ {$row['precio']}</li>";
}
echo "</ul>";

$mysqli->close();
?>
