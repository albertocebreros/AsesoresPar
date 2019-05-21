<?php
  include("./conexion.php");

  $conexion=Conectar();
  
  $query="SELECT Nombre_Materia FROM materias";
  
  $resultado=mysqli_query($conexion,$query);
  
  $optiones=Array();
  
  while($row=mysqli_fetch_array($resultado)){
	$optiones[] = Array(
    	'nombre' => $row['Nombre_Materia']
    );
  };

  echo json_encode($optiones);
?>