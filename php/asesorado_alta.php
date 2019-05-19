<?php
	include("conexion.php");
	$conexion=Conectar();
		if($conexion){

			$apellidopa=$_POST['apellidop'];
			$apellidoma=$_POST['apellidom'];
			$nombres=$_POST['nombre'];
			$usuario=$_POST['usuario'];
			$contrasena=$_POST['contrasena'];
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];
			$Nombre_Completo=$nombres.' '.$apellidopa.' '.$apellidoma;


	
			$query1="SELECT * FROM asesorado where Usuario='$usuario'";
			$query2="SELECT * FROM asesor where Usuario='$usuario'";
			$query11=mysqli_query($conexion,$query1);
			$query22=mysqli_query($conexion,$query2);
			
			$row_cnt111 = $query11->num_rows;
			$row_cnt222 = $query22->num_rows;
			if($row_cnt111>0){
				$mensaje="El Usuario ya esta registrado";
			}
			else if($row_cnt222>0){
					$mensaje="El Usuario ya esta registrado";
					}
					else{
				
					$query = "INSERT INTO asesorado(`Nombre_Completo`, `Telefono`, `Correo`, `Usuario`, `Contrasena`, `Estatus`) VALUES ('$Nombre_Completo',$telefono,'$correo','$usuario','$contrasena',1)";
					$exec = mysqli_query($conexion,$query);
					mysqli_fetch_array($exec);
					$mensaje="El Usuario ya fue registrado gracias por unirte";
			}
		}
		else{
			$mensaje = "Fallo la conexion del servidor";
		}
		$response=array('mensaje' => $mensaje
						);

		echo json_encode($response);
?>