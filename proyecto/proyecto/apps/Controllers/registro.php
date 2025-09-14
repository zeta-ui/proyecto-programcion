<?php

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$ubicacion = $_POST['ubicacion'] ?? '';



$con = mysqli_connect("localhost", "root", "", "proyecto");
if (!$con) {
	die("Error en la conexión: " . mysqli_connect_error());
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Usar sentencia preparada para mayor seguridad
$stmt = $con->prepare("INSERT INTO usuarios (NombreCompleto, Email, Contraseña, Telefono, FotoPerfil, FechaRegistro) VALUES (?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("sssss", $nombre, $email, $password_hash, $telefono, $ubicacion);

if ($stmt->execute()) {
	echo "✅ Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
} else {
	echo "❌ Error al registrar: " . $stmt->error;
}

$stmt->close();
mysqli_close($con);
?>
