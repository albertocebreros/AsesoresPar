<?php
	include("conexion.php");
	$conexion=Conectar();

		if($conexion)
		{
			$idMateria=$_POST['idMateria'];
			$NombreMateria=utf8_decode($_POST['NombreMateria']);

			$query="insert into materias (idmateria,Nombre_Materia) values ('$idMateria','$NombreMateria')";

			$insert=mysqli_query($conexion,$query);

			$query="select * from materias where idmateria='$idMateria'";
			$consulta = mysqli_query($conexion,$query);
			if($cantidad=mysqli_num_rows($consulta)>0)
			{
				$salida= array (
				"mensaje" => "El insert fue exitoso",
				"cantidad" => $cantidad
				);
			}
			else
			{	
				$salida= array (
					"mensaje" => "No se dio de alta la materia",
					"consulta" => $cantidad
				);
			}
			print json_encode($salida);
		}
?>