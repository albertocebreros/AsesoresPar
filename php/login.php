<?php
	include("conexion.php");
	$conexion=Conectar();
		if($conexion){
			session_start();
			$usuario=$_POST['usuario'];
			$contrasena=$_POST['contrasena'];
			$query1 = "SELECT * From asesor where Usuario='$usuario' and Contrasena='$contrasena'";
			$query2 = "SELECT * From asesorado where Usuario='$usuario' and Contrasena='$contrasena'";
			$query11=mysqli_query($conexion,$query1);
			$query22=mysqli_query($conexion,$query2);

			$row_cnt111 = $query11->num_rows;
			$row_cnt222 = $query22->num_rows;
			if($row_cnt111>0){
				$tipo="1";
				$_SESSION["sesion"]=$usuario;
				$_SESSION["tipo"]="1";
			}else{
				if($row_cnt222>0){
					$tipo="2";
					$_SESSION["sesion"]=$usuario;
					$_SESSION["tipo"]="2";
				}else{
					$tipo="0";
					
				}
			}
			
			$salida = array(
				"tipo" =>$tipo
			);
			print json_encode($salida);

		}
		else{
			$mensaje = "Fallo la conexion del servidor";
		}
?>