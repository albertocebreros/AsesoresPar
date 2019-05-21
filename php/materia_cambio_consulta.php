<?php
		include("conexion.php");
		$conexion=Conectar();
		if($conexion){
			$nombremateria=$_POST["materia"];
			$query1 = "SELECT * From materias where Nombre_Materia='$nombremateria'";
			$resultado=mysqli_query($conexion,$query1);
			$fetchA=mysqli_fetch_array($resultado);
			$nombremateria=$fetchA['Nombre_Materia'];
			$idmateria=$fetchA['idmateria'];
			$return_arr = array('idmateria'=>$idmateria,'nombremateria'=>$nombremateria);
			print json_encode($return_arr);
		}
		else{
			$mensaje = "Fallo la conexion del servidor";
		}
?>