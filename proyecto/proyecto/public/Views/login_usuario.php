<?php
require_once '../../Conexion+BD/ClaseConexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email && $password) {
        $conn = new ClaseConexion();
        $db = $conn->getConexion();
    $stmt = $db->prepare('SELECT Id_Usuario, nombre, apellido, email, password, tipo FROM usuario WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            if ($row['password'] === $password) { // Para mayor seguridad, usa password_hash y password_verify
                session_start();
                $_SESSION['usuario_id'] = $row['Id_Usuario'];
                $_SESSION['usuario_nombre'] = $row['nombre'];
                $_SESSION['usuario_tipo'] = $row['tipo'];
                if ($row['tipo'] === 'publicar') {
                    header('Location: ../../apps/PANTALLA_PUBLICAR.html');
                } else {
                    header('Location: ../../apps/PANTALLA_CONTRATAR.html');
                }
                exit();
            } else {
                header('Location: ../index.html?error=credenciales');
                exit();
            }
        } else {
            header('Location: ../index.html?error=credenciales');
            exit();
        }
        $stmt->close();
        $db->close();
    } else {
        header('Location: ../index.html?error=datos');
        exit();
    }
} else {
    header('Location: ../index.html');
    exit();
}
?>
