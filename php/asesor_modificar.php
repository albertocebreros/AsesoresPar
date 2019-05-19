<?php
		include("conexion.php");
		$conexion=Conectar();
		if($conexion){
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];
			$numerocuenta=$_POST['numerocuenta'];
			$query = "UPDATE asesor SET Telefono='$telefono', Correo='$correo' WHERE  Numero_De_Cuenta=$numerocuenta";
			$exec = mysqli_query($conexion,$query);
			$mensaje="El Usuario ya fue modificado gracias";
			$response=array('mensaje' => $mensaje);
			echo json_encode($response);
			}
?>