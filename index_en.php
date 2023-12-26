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
      <?php include("php/menu_en.php"); ?>
    </div>

    <div id="content">
      <div id="section">
        <h2>User registration </h2>
        <form id="form1" name="form1" method="post" action="crear_usuario_en.php" onsubmit="return validarForm(this);">

          <p><label for="txt_Nombre">Name </label><br>
            <input type="text" name="txt_Nombre" id="txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_ApPat">Father´s Last name </label><br>
            <input type="text" name="txt_ApPat" id="txt_ApPat" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_ApMat">Mother's last name </label><br>
            <input type="text" name="txt_ApMat" id="txt_ApMat" onkeyup="javascript:this.value=this.value.toUpperCase();" />
          </p>
          <p><label for="txt_Edad">Age </label><br>
            <input type="text" name="txt_Edad" id="txt_Edad" />
          </p>
          <p><label for="lst_sexo">gender </label><br>
            <select name="lst_sexo" id="lst_sexo">
              <option>select...</option>
              <option>M</option>
              <option>W</option>
            </select>
          </p>
          <p><button name="btn_guardar" id="btn_guardar" class="button">Save</button> button that sends us to create_user.php</p>
        </form>

        <?php
        //invocar la funcion select y la tabla
        $result = select("usuarios");
        // Realizamos un bucle que muestre el resultado
        ?>
        <table border=1>
          <thead>
            <td>Id</td>
            <td>Name</td>
            <td>Father´s Last name</td>
            <td>Mother's last name</td>
            <td>Age</td>
            <td>gender</td>
            <td>Actions</td>
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
                  <a href="modificar_en.php?id=<?php echo $row->id_usuarios; ?>" class="button">Modify </a>
                  <a href="eliminar_en.php?id=<?php echo $row->id_usuarios; ?>" onclick="return confirmation()" class="buttonDelete">Delete </a>

                </td>
              </tr>
          <?php

            }
          } else {
            echo "there is no record";
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
    if (confirm("¿You really want to delete the record?")) {
      return true;
    }
    return false;
  }
</script>

</html>