<?php
require_once '../../Conexion+BD/ClaseConexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $tipo = $_POST['tipoRegistro'] ?? '';

    if ($nombre && $apellido && $email && $password && $tipo) {
        $conn = new ClaseConexion();
        $db = $conn->getConexion();
        $stmt = $db->prepare('INSERT INTO usuario (nombre, apellido, email, password, tipo) VALUES (?, ?, ?, ?, ?)');
        $stmt->bind_param('sssss', $nombre, $apellido, $email, $password, $tipo);
        if ($stmt->execute()) {
            header('Location: ../index.html?registro=ok');
            exit();
        } else {
            echo 'Error al registrar usuario.';
        }
        $stmt->close();
        $db->close();
    } else {
        echo 'Faltan datos obligatorios.';
    }
} else {
    echo 'Método no permitido.';
}
?>
