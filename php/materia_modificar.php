<?php
		include("conexion.php");
		$conexion=Conectar();
		if($conexion){
			$idmateria=$_POST['idmateria'];
			$nombremateria=$_POST['nombremateria'];
			$query = "UPDATE materias SET Nombre_Materia='$nombremateria' WHERE  idmateria=$idmateria";
			$exec = mysqli_query($conexion,$query);
			$mensaje="La Materia ya fue modificado gracias";
			$response=array('mensaje' => $mensaje);
			echo json_encode($response);
			}
?>