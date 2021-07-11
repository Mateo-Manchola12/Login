<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'usuarios';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOExeption $e){
	die('Conexion failed: '.$e->getMessage());
}

?>