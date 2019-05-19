<?php
    session_start();
    unset($_SESSION["sesion"]);
    unset($_SESSION["tipo"]);
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
<body id="page-top">
	<!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <img src="Resourse/imagenes/LogoFicBlanco.png">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Tutorias Uas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="registro.php">Registrarse</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="bg-primary text-white">
    <div class="container text-center" background-image="Resourse/imagenes/Banner.jpeg">
      <h1>Asesoria Par</h1>
    </div>
  </header>
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mx-auto">
          <center><h2>Login</h2></center>
          <p class="lead">
            <div class="row">
    <label for="usuario" class="col-sm-3 col-form-label">Usuario</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="" id="usuario" placeholder="Usuario" maxlength="200" >
    </div>
  </div>
          
	<div class="row">
    <label for="contrasena" class="col-sm-3 col-form-label">Contraseña</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" maxlength="200" >
    </div>
  </div>
  <center>
  	<button class="btn btn-outline-primary" onclick="consultarUsuarios()" id="Btn">
  		Ingresar
  	</button>
  </center>
			</p>
        </div>
      </div>
    </div>
  
  </section>
	
</body>
<!-- Pie de pagina -->
  <footer class="py-5 bg-dark">
    <div class="contsainer">
      <p class="m-0 text-center text-white">Copyright &copy; Linces</p>
    </div>
  </footer>
<script type="text/javascript" src="jquery/jq.js"></script>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
</html>