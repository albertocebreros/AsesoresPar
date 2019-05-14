<?php 

	function Conectar()
	{
		$conexion=mysqli_connect("localhost","root","","asesorespar") or die("Problemas con la conexión");
		return $conexion;
	}

 ?>