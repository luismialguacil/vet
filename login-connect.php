<?php 

include_once('connect.php'); 

$user = $_POST['usuario'];
$pass = $_POST['pass'];

$stmt = $dbh->prepare('SELECT usuario, contrasena FROM usuarios WHERE usuario = ?');
$stmt->bindValue(1, $user);
$stmt->execute();

$filas = $stmt->fetch();

if($stmt->rowCount() == 0){

	echo "El usuario no existe";

}elseif($pass != $filas['contrasena']){

	echo "La contraseña es incorrecta";

}else{

	echo "Login Correcto";

}

?>