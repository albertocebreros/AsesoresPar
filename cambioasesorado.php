<?php
    session_start();
    if($_SESSION["tipo"]=="2"){}
    else{
    header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
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

  <section >
      <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
           
            <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="nombre">Nombre Completo</label>
      <input type="text" class="form-control" id="nombre" placeholder="" maxlength="200" >
      
    </div>
    </div>
    
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="telefono">Telefono:</label>
                <input type="number" class="form-control" id="telefono" placeholder="(xxx)xxx xxxx" maxlength="10" >
               
              </div>
              <div class="form-group col-md-6">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" placeholder="Correo Electronico" maxlength="200" >
                
              </div>
            </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
  <button class="btn btn-primary" id="btn" onclick="actualizarasesorado()">Actualizar</button>
</div>
</div>
          <br>
<form action="asesor.php">
            <input type="submit" value="Regresar" class="btn btn-outline-primary" />
          </form>
          
        </div>
      </div>
    </div>

  </section>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Linces</p>
    </div>
    <!-- /.container -->
  </footer>
  <script type="text/javascript" src="jquery/jq.js"></script>
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <script type="text/javascript" src="js/asesorado_cambio.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>