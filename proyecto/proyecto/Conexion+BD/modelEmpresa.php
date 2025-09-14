<?php
require_once('ClaseConexion.php');
class Empresa
{
	//atributos
	private $numero;
	private $nombre;
	//constructor
	public function __construct($numero, $nombre)
	{
		$this->numero=$numero;
		$this->nombre=$nombre;
	}
	//propiedades
	public function getNumero()
	{
		return $this->numero;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	//funciones
	public function registrar() 
	{
        $conn = new ClaseConexion();
        $conexion = $conn->getConexion();
        $conn = null;
        $declaracion = $conexion->prepare("insert INTO Empresa (nombre) VALUES (?);");
        $declaracion->bind_param("s", $this->nombre);
		//s para string, i para integer
		//d para double, b para blob
        $declaracion->execute();
		$conexion->close();
        return $declaracion->insert_id;
    }
}
?>