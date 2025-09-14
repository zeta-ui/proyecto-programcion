<?php
class ConexionDB {
    private $host = 'localhost';
    private $dbname = 'nombre_base_datos';
    private $user = 'usuario';
    private $pass = 'contraseña';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error de conexión: ' . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conn;
    }

    public function cerrarConexion() {
        $this->conn = null;
    }
}
?>
