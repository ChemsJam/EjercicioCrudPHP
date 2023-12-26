<!DOCTYPE html>
<html>

<head>
      <title>Create user</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <meta name="description" content="Sistemas computacionales">
      <meta name="keywords" content="MySql, conexión, Wamp">
      <meta name="author" content="Ramirez Erik, Sistemas">

      <link rel="stylesheet" href="css/estilos.css">
      <link rel="stylesheet" href="css/menu_en.css">

      <?php include("php/conexion.php"); ?>
</head>

<body>
      <div id="container">
            <div id="header">
                  <h1>Create user</h1>
                  <?php include('php/menu_en.php'); ?>
            </div>
            <div id="content">
                  <div id="section">
                        <h2>Shows data insertion</h2>
                        <hr>
                        <?php

                        //obtener las variables
                        $nombre = $_POST['txt_Nombre'];
                        $apPat = $_POST['txt_ApPat'];
                        $apMat = $_POST['txt_ApMat'];
                        $edad = $_POST['txt_Edad'];
                        $sexo = $_POST['lst_sexo'];
                        ?>

                        <h2>Data received</h2>
                        <hr>
                        <p> You entered the following data:</p>
                        <?php
                        //mostrar los datos recibidos
                        echo "<h3>$nombre</h3>
        <h3>$apPat</h3>
        <h3>$apMat</h3>
        <h3>$edad</h3>
        <h3>$sexo</h3>";

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                        $cons = insert(
                              'usuarios',
                              'NULL,"' . $nombre . '","' . $apPat . '","' . $apMat . '",' . $edad . ',"' . $sexo . '"'
                        );
                        if ($cons) {
                        ?>
                              <p>The news was CORRECTLY ADDED to the database.</p>
                        <?php
                        } else {
                        ?>
                              <p>The news could not be inserted into the database.</p>
                        <?php
                        }
                        ?>
                        <!--<meta http-equiv="refresh" content="3;URL=index.php" >-->
                  </div>
                  
            </div>
            <!-- footer ******************** -->
            <?php include("php/footer.php"); ?>
      </div>
</body>

</html>