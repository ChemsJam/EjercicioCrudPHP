<!DOCTYPE html>
<html>

<head>
  <title>Modificar</title>
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
      <h1>20_2075cProWebT2ValidacionRamirezErik</h1>
      <?php include('php/menu.php'); ?>
    </div>
    <div id="content">
      <div id="section">
        <h1>Modifcar</h1>
        <hr>
        <?php
        echo 'esta es la variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("usuarios", "id_usuarios", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
            <h2>Modifique los datos y guarde en la base de datos</h2>
            <form id="form1" name="form1" method="post" action="actualizar_usuario.php">
              <table>
                <tr>
                  <td><label for="txt_Nombre">Nombre </label></td>
                  <td><input type="text" name="txt_id" id="txt_id" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->id_usuarios; ?>" hidden />
                    <input type="text" name="txt_Nombre" id="txt_Nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->usu_nombre; ?>" />
                  </td>
                </tr>
                <tr>
                  <td><label for="txt_ApPat">Apellido Paterno </label></td>
                  <td><input type="text" name="txt_ApPat" id="txt_ApPat" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->usu_ap_pat; ?>" /> </td>
                </tr>
                <tr>
                  <td><label for="txt_ApMat">Apellido Materno </label></td>
                  <td><input type="text" name="txt_ApMat" id="txt_ApMat" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->usu_ap_mat; ?>" /></td>
                </tr>
                <tr>
                  <td><label for="txt_Edad">Edad </label></td>
                  <td><input type="text" name="txt_Edad" id="txt_Edad" value="<?php echo $row->usu_edad; ?>" /></td>
                </tr>
                <tr>
                  <td><label for="lst_sexo">sexo </label></td>
                  <td><select name="lst_sexo" id="lst_sexo">
                      <option><?php echo $row->usu_sexo; ?></option>
                      <option>M</option>
                      <option>F</option>
                    </select>
                  </td>
                </tr>


              </table>
              <p><input type="submit" name="btn_guardar" id="btn_guardar" value="Actualizar" /></p>
              <p>&nbsp;</p>
            </form>



            <tr>
              <td><?php echo $row->id_usuarios; ?></td>
              <td></td>
              <td><?php echo $row->usu_ap_pat; ?></td>
              <td><?php echo $row->usu_ap_mat; ?></td>
              <td><?php echo $row->usu_edad; ?></td>
              <td><?php echo $row->usu_sexo; ?></td>

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

</html>