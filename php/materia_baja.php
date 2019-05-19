<?php
	include("conexion.php");	
	$conexion=Conectar();
		if($conexion){
			$materia=$_POST['materia'];
			$query = "DELETE FROM materias WHERE Nombre_Materia='$materia'";
			$resultado=mysqli_query($conexion,$query);
			$mensaje=" ";
			$response=array('mensaje' => $mensaje);
			echo json_encode($response);
		}
		else{
			$mensaje = "Fallo la conexion del servidor";
		}
?>