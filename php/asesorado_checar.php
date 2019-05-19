<?php
	include("conexion.php");
	$conexion=Conectar();
		session_start();
		if($conexion){
			$usuario=$_SESSION["sesion"];
			$query1 = "SELECT * From asesorado where Usuario='$usuario'";
			$resultado=mysqli_query($conexion,$query1);
			$fetchA=mysqli_fetch_array($resultado);
			$nombre=$fetchA['Nombre_Completo'];
			$correo=$fetchA['Correo'];
			$telefono=$fetchA['Telefono'];
			$return_arr = array('nombre'=>$nombre,'correo'=>$correo,"telefono"=>$telefono);
			print json_encode($return_arr);
		}
		else{
			$mensaje = "Fallo la conexion del servidor";
		}
?>