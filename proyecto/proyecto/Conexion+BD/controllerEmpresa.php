<?php
//ControllerEmpresa
require_once('modelEmpresa.php');
//require
//include
//include_once

if($_SERVER['REQUEST_METHOD']==='POST')
{
	if(isset($_POST['nom']) && !empty($_POST['nom']))
	{
		$nombreEmpresa = $_POST['nom'];
		$unaEmpresa = new Empresa(null,$nombreEmpresa);
		$unaEmpresa->registrar();
		Header('Location:index.html');
	}
}
?>