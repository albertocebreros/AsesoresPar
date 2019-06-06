<?php
    session_start();
    if($_SESSION["tipo"]=="2"){}
    else{
        header('Location: login.php');
    }
    include("php/conexion.php");

    $conexion=Conectar();
  
    $query="SELECT Nombre_Materia, idmateria FROM materias";
  
    $resultado=mysqli_query($conexion,$query);
?>


<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Asesores Par</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <img src="Resourse/imagenes/LogoFicBlanco.png">
      <a class="navbar-brand js-scroll-trigger" href="login.php">Tutorias Uas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="cambioasesorado.php">
            <?php
                echo "<strong>Bienvenido ".$_SESSION["sesion"]."</strong>";
            ?>
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="asesorado.php">Panel de menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Desconectar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Asesoria Par</h1>
    </div>
  </header>

  <!-- Creacion de tabla -->
    <table class="table" width="70%" border="1px" align="center">

        <thead>    
            <tr align="center">
                <th scope="col">Codigo</th>
                <th scope="col">Nombre de materia</th>
            </tr>
        </thead>
          
        <tbody>    
        <?php 
            while($datos=$resultado->fetch_array()){
            ?>
                <tr>
                    <td><?php echo $datos["idmateria"]?></td>
                    <td><?php echo $datos["Nombre_Materia"]?></td>
                </tr>
                <?php   
            }

         ?>
        </tbody>
    </table>

    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Linces</p>
    </div>
  </footer>
</body>
</html>