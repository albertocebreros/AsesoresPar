<?php 
	// Seleccion de la opcion que se hara
	include("conexion.php");
	$opc=$_POST['opc'];

	switch ($opc) {
		case 'login':
			login();
			break;
		case 'altaasesor':
			altaasesor();
			break;
		case 'altaasesorado':
			altaasesorado();
			break;
		case 'checarasesor':
			checarasesor();
			break;
		case 'checarasesorado':
			checarasesorado();
			break;
		case 'modificarasesor':
			modificarasesor();
			break;
		case 'modificarasesorado':
			modificarasesorado();
			break;
		case 'AltaMateria':
			AltaMaterias();
			break;
		case 'BajaMateria':
			BajaMateria();
			break;
		default:
			
			break;
	}


	// Funcion de Conectar para ambos usuarios
	
	function AltaMaterias()
	{
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
	}

	function login(){
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

	}
	// funcion de dar de alta a un asesor
	function altaasesor(){
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
	}
	// funcion de dar de alta a un asesorado
	function altaasesorado(){
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
	}

	function checarasesor(){
		$conexion=Conectar();
		session_start();
		if($conexion){
			$usuario=$_SESSION["sesion"];
			$query1 = "SELECT * From asesor where Usuario='$usuario'";
			$resultado=mysqli_query($conexion,$query1);
			$fetchA=mysqli_fetch_array($resultado);
			$numerocuenta=$fetchA['Numero_De_Cuenta'];
			$nombre=$fetchA['Nombre_Completo'];
			$correo=$fetchA['Correo'];
			$telefono=$fetchA['Telefono'];
			$return_arr = array('numerocuenta'=>$numerocuenta,'nombre'=>$nombre,'correo'=>$correo,"telefono"=>$telefono);
			print json_encode($return_arr);
		}
		else{
			$mensaje = "Fallo la conexion del servidor";
		}

	}
	function checarasesorado(){
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

	}
	function modificarasesor(){
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
	}
	function modificarasesorado(){
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
	}
	function BajaMateria(){
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
	}
 ?>