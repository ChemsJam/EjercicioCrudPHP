<!DOCTYPE html>
<html>

<head>
  <title>eliminar Usuario</title>
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
      <h1>eliminar Usuario</h1>
      <?php include('php/menu.php'); ?>
    </div>
    <div id="content">
      <div id="section">
        <h1>Eliminar Registro de la Base de datos</h1>
        <hr>
        <?php
        echo 'esta es la variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("usuarios", "id_usuarios", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <h3>Datos de eliminación</h3>
            <p>id: <?php echo $row->id_usuarios; ?></p>
            <p>Nombre: <?php echo $row->usu_nombre; ?></p>
            <p>Apellido Paterno: <?php echo $row->usu_ap_pat; ?></p>
            <p>Apellido Materno: <?php echo $row->usu_ap_mat; ?></p>
            <p>Edad: <?php echo $row->usu_edad; ?></p>
            <p>sexo: <?php echo $row->usu_sexo; ?></p>

        <?php

          }
          $result = delete("usuarios", "id_usuarios", $_GET['id']);
        } else {
          echo "El registro no existe";
        }
        ?>
        </table>

        <meta http-equiv="refresh" content="3;URL=index.php">
      </div>
    </div>
    <!-- footer ******************** -->
    <?php include("php/footer.php"); ?>
  </div>
</body>
<script src="js/Validacion.js"></script>

</html>