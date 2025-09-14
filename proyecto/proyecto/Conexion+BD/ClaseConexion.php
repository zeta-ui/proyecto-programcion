<?php
class ClaseConexion
{
    private $servidor ="127.0.0.1";
    private $usuario = "root";
    private $contrasena = "pablo200717";
    private $baseDeDatos = "proyect";
    private $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->baseDeDatos);
        if ($this->conexion->connect_error) 
        {
	        exit("Error de conexión: " . $conexion->connect_error);
        }
    }
    public function getConexion()
    {
        return $this->conexion;
    }
}
?>