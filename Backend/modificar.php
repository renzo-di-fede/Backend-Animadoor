<?php
  require("conn.php"); //Conexión
  $id_modificar = $_POST["id_modificar"]; //Se almacena en una variable el id del usuario a eliminar
  $sql="SELECT * FROM usuarios WHERE `usuarios`.`id` = $id_modificar" ;
  $result=mysqli_query($conn, $sql);
  $fila=mysqli_fetch_array($result);
  echo $fila[0];
  //ID, CI, NOMBRE, ADMIN

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <script src="js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Cédulas</title>
    <link rel="icon" type="image/png" href="http://anima.edu.uy/wp-content/uploads/2015/08/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="cajaTitulo" align="center">
      <img class="imagen" src="http://anima.edu.uy/wp-content/themes/thekeynote-v1-05-child/images/logo_foot.png" alt="">


    <center>
      <form class="" action="modificar2.php" method="post">
      <input type="hidden" name="id_usuario" value="<?php echo "$id_modificar" ?>">
      <input class="form" type="text" name="nombrenuevo" id="ci" placeholder="" required="" maxlength="50" value="<?= $fila[2] ?>">
      <input class="form" type="text" name="cinueva" id="ci" placeholder="" minlength="8" maxlength="8" required="" value="<?= $fila[1] ?>">
      <span id="admin">¿Admin?</span>
      <input type="checkbox" name="admin" value="0" <?php if ($fila[3]==1) {
        echo "checked";
      }
      else {
        echo "";
      } ?>>
      <br> <br> <br> <br> <br>
      <div class="progress-button" align="center">
            <button class="btn" Onclick="myFunction()" id="ciF"  type="submit">Cambiar</button>
            <svg class="progress-circle" width="150" height="150"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
            <svg class="checkmark" width="150" height="150"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
            <svg class="cross" width="150" height="150"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
        <!-- /progress-button -->
          </div>
  </body>
</html>
