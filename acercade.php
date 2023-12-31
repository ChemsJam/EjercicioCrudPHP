<!DOCTYPE html>
<html>

<head>
  <title>Acerca de</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Sistemas computacionales">
	<meta name="keywords" content="MySql, conexión, Wamp">
	<meta name="author" content="Ramirez Erik, Sistemas">

  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/menu.css">

  <?php include("php/conexion.php"); ?>
</head>

<body>
  <div id="container">
    <div id="header">
      <h1>Acerca del proyecto</h1>
      <?php include('php/menu.php'); ?>
    </div>
    <div id="content">
      <div id="section">
        <h1>Practicas de Programación Web de 5o semestre </h1>
        <p>Ingeniría en sistemas computacionales</p>
        <h3>Integrante 1 </h3>
        <p>Nombre: ISC. Erik Augusto Ramirez Vargas</p>
        <p>No control: </p>
        <p>Area: Responsable de diseño</p>
        <h3>Integrante 2 </h3>
        <p>Nombre: </p>
        <p>No control: </p>
        <p>Area: </p>
        <h3>Integrante 3 </h3>
        <p>Nombre: </p>
        <p>No control: </p>
        <p>Area: </p>
      </div>
      
    </div>
    <!-- footer ******************** -->
    <?php include("php/footer.php"); ?>
  </div>
</body>
<script src="js/Validacion.js"></script>

</html>