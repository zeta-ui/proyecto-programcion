<?php
class usuario {
	public $IdUsuario;
	public $Nombre;
	public $Apellido;
	public $Email;
	public $ContrasenaHash;
	public $FotoPerfil;
	public $Descripcion;
	public $FechaRegistro;
	public $EstadoCuenta;
	public $UltimoAcceso;
	public $Rol;

       public function __construct($IdUsuario, $Nombre, $Apellido, $Email, $ContrasenaHash, $FotoPerfil, $Descripcion, $FechaRegistro, $EstadoCuenta, $UltimoAcceso, $Rol) {
	       $this->IdUsuario = $IdUsuario;
	       $this->Nombre = $Nombre;
	       $this->Apellido = $Apellido;
	       $this->Email = $Email;
	       $this->ContrasenaHash = $ContrasenaHash;
	       $this->FotoPerfil = $FotoPerfil;
	       $this->Descripcion = $Descripcion;
	       $this->FechaRegistro = $FechaRegistro;
	       $this->EstadoCuenta = $EstadoCuenta;
	       $this->UltimoAcceso = $UltimoAcceso;
	       $this->Rol = $Rol;
       }
	public function getRol() { return $this->Rol; }
	public function setRol($Rol) { $this->Rol = $Rol; }

	public function getIdUsuario() { return $this->IdUsuario; }

	public function getNombre() { return $this->Nombre; }
	public function setNombre($Nombre) { $this->Nombre = $Nombre; }

	public function getApellido() { return $this->Apellido; }
	public function setApellido($Apellido) { $this->Apellido = $Apellido; }

	public function getEmail() { return $this->Email; }
	public function setEmail($Email) { $this->Email = $Email; }

	public function getContrasenaHash() { return $this->ContrasenaHash; }
	public function setContrasenaHash($ContrasenaHash) { $this->ContrasenaHash = $ContrasenaHash; }

	public function getFotoPerfil() { return $this->FotoPerfil; }
	public function setFotoPerfil($FotoPerfil) { $this->FotoPerfil = $FotoPerfil; }

	public function getDescripcion() { return $this->Descripcion; }
	public function setDescripcion($Descripcion) { $this->Descripcion = $Descripcion; }

	public function getFechaRegistro() { return $this->FechaRegistro; }
	public function setFechaRegistro($FechaRegistro) { $this->FechaRegistro = $FechaRegistro; }

	public function getEstadoCuenta() { return $this->EstadoCuenta; }
	public function setEstadoCuenta($EstadoCuenta) { $this->EstadoCuenta = $EstadoCuenta; }

	public function getUltimoAcceso() { return $this->UltimoAcceso; }
	public function setUltimoAcceso($UltimoAcceso) { $this->UltimoAcceso = $UltimoAcceso; }
}
