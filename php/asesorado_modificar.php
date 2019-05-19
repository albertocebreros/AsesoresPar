<?php
	include("conexion.php");
	$conexion=Conectar();
		session_start();
		if($conexion){
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];
			$usuario=$_SESSION["sesion"];
			$query = "UPDATE asesorado SET Telefono='$telefono', Correo='$correo' WHERE  Usuario='$usuario'";
			$exec = mysqli_query($conexion,$query);
			$mensaje="El Usuario ya fue modificado gracias";
			$response=array('mensaje' => $mensaje);
			echo json_encode($response);
			}
?>