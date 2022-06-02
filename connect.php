<?php
/* Conectar a una Base de Datos */
$server = 'localhost';
$database = 'vet';
$dsn = "mysql:host=$server;dbname=$database";
$usuario = 'root';
$contraseña = '';

try {
    $dbh = new PDO($dsn, $usuario, $contraseña);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}