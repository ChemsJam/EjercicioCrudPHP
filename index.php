<!DOCTYPE html>
<html>

<head>
  <title>Index</title>
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
      <h1>Index</h1>
      <?php include("php/menu.php"); ?>
    </div>

    <div id="content">
      <div id="section">
        <h2>Alta de usuarios </h2>
        <form id="form1" name="form1" method="post" action="crear_usuario.php" onsubmit="return validarForm(this);">

          <p><label for="txt_Nombre">Nombre </label><br>
            <input type="text" name="txt_Nombre" id="txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_ApPat">Apellido Paterno </label><br>
            <input type="text" name="txt_ApPat" id="txt_ApPat" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_ApMat">Apellido Materno </label><br>
            <input type="text" name="txt_ApMat" id="txt_ApMat" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_Edad">Edad </label><br>
            <input type="text" name="txt_Edad" id="txt_Edad" />
          </p>
          <p><label for="lst_sexo">sexo </label><br>
            <select name="lst_sexo" id="lst_sexo">
              <option>Seleccionar...</option>
              <option>M</option>
              <option>F</option>
            </select>
          </p>
          <p><button name="btn_guardar" id="btn_guardar" class="button">Guardar</button> boton que nos envia a crear_usuario.php</p>
        </form>

        <?php
        //invocar la funcion select y la tabla
        $result = select("usuarios");
        // Realizamos un bucle que muestre el resultado
        ?>
        <table border=1>
          <thead>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Edad</td>
            <td>Sexo</td>
            <td>Acciones</td>
          </thead>
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {
          ?>
              <tr>
                <td><?php echo $row->id_usuarios; ?></td>
                <td><?php echo $row->usu_nombre; ?></td>
                <td><?php echo $row->usu_ap_pat; ?></td>
                <td><?php echo $row->usu_ap_mat; ?></td>
                <td><?php echo $row->usu_edad; ?></td>
                <td><?php echo $row->usu_sexo; ?></td>
                <td>
                  <a href="modificar.php?id=<?php echo $row->id_usuarios; ?>" class="button">Modificar </a>
                  <a href="eliminar.php?id=<?php echo $row->id_usuarios; ?>" onclick="return confirmation()" class="buttonDelete">Emilinar </a>

                </td>
              </tr>
          <?php

            }
          } else {
            echo "no hay ningun registro";
          }
          ?>
        </table>

      </div>
    </div>
    <!-- footer ******************** -->
    <?php include("php/footer.php"); ?>
  </div>

</body>
<script src="js/Validacion.js"></script>
<script type=" text/javascript">
  function confirmation() {
    if (confirm("¿Realmente desea eliminar el registro?")) {
      return true;
    }
    return false;
  }
</script>

</html>