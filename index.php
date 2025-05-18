<?php
$host = 'mysqlserver';
$db = 'testdb';
$user = 'root';
$pass = 'rootpass';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM productos");

echo "<h1>Lista de productos</h1><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['nombre']} - \$ {$row['precio']}</li>";
}
echo "</ul>";

$conn->close();
?>
