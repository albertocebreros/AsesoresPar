<?php
	include("conexion.php");
	$conexion=Conectar();
		if($conexion){

			$numerocuenta=$_POST['numerocuenta'];
			$apellidopa=$_POST['apellidop'];
			$apellidoma=$_POST['apellidom'];
			$nombres=$_POST['nombre'];
			$usuario=$_POST['usuario'];
			$contrasena=$_POST['contrasena'];
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];
			$Nombre_Completo=$nombres.' '.$apellidopa.' '.$apellidoma;


			$query1="SELECT * FROM asesor where Numero_De_Cuenta=$numerocuenta";
			$query2="SELECT * FROM asesor where Usuario='$usuario'";
			$query3="SELECT * FROM asesorado where Usuario='$usuario'";
			$query11=mysqli_query($conexion,$query1);
			$query22=mysqli_query($conexion,$query2);
			$query33=mysqli_query($conexion,$query3);
			$row_cnt111 = $query11->num_rows;
			$row_cnt222 = $query22->num_rows;
			$row_cnt333 = $query33->num_rows;
			if($row_cnt111>0){
				$mensaje="El Numero de cuenta ya esta registrado";
			}
			else {
				if ($row_cnt222>0){
					$mensaje="El usuario se encuentra en uso";
				}
				else
					if($row_cnt333>0){
					$mensaje="El usuario se encuentra en uso";
					}
					else
				{
					$query = "INSERT INTO asesor(`Nombre_Completo`, `Telefono`, `Correo`, `Numero_De_Cuenta`, `Usuario`, `Contrasena`, `Estatus`) VALUES ('$Nombre_Completo',$telefono,'$correo',$numerocuenta,'$usuario','$contrasena',1)";
					$exec = mysqli_query($conexion,$query);
					mysqli_fetch_array($exec);
					$mensaje="El Usuario ya fue registrado gracias por unirte, espera que tu cuenta sea activada, se te notificara por correo";
				}
			}
		}
		else{
			$mensaje = "Fallo la conexion del servidor";
		}
		$response=array('mensaje' => $mensaje
						);

		echo json_encode($response);
?>