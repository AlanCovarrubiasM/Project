<?php

require('config.php');

$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$rol = $_POST['rol'];

echo $nombre;

if (isset($username) && isset($password) && isset($email)) {
 $connection = new mysqli($database_host, $database_user, $database_password, $database_name);
 
 if ($connection->connect_error) {
   die("Connection failure: " . $connection->connection_error);
 }

 $hashed_password = hash('sha256', $password);

 $statement = "insert into User (nombre, apellidoPaterno, apellidoMaterno, email, username, password, rol) values ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$email', '$username', '$hashed_password', '$rol')";

 if ($connection->query($statement) === TRUE) {
   echo "Registro creado. <a href='index.php'>Inicia sesi&oacute;n</a>";
 } else {
   echo "Error al crear el registro: $connection->error";
 }

 mysqli_close($connection);
}