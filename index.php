<?php
require("conn.php");
$sql="SELECT * FROM usuarios";
$result=mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <script src="js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <meta charset="utf-8">
    <title>Cédulas</title>
    <link rel="icon" type="image/png" href="http://anima.edu.uy/wp-content/uploads/2015/08/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  </head>
  <body>
    <div class="cajaTitulo" onload="verify()">
      <img id="imagen" src="http://anima.edu.uy/wp-content/themes/thekeynote-v1-05-child/images/logo_foot.png" alt="">
    </div>
    <div class="cajaTitulo">

    <center>
      <form class="" action="agregar.php" method="post">
      <input class="form" type="text" name="nombrenuevo" id="ci" placeholder="Agregar Nombre" required="" maxlength="50">
      <input class="form" type="text" name="cinueva" id="ci" placeholder="Agregar Cédula" minlength="8" maxlength="8" required="">
      <input class="form" type="text" name="correonuevo" id="ci" placeholder="Agregar Correo" maxlength="60">
      <span id="admin">¿Admin?</span>
      <input type="checkbox" name="admin" value="0">
      <div class="progress-button">
            <button class="btn" id="ciF" type="submit">Enviar</button>
            <svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
            <svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
            <svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
        <!-- /progress-button -->
          </div>

      <br><br>
    </form>
    <div class="tablita">
    <table class="tblPersonas" cellpadding="15px" style="" >
      <tr>
        <th>ID</th>
        <th>CI</th>
        <th>Nombre</th>
        <th>Admin?</th>
      </tr>
      <?php
      while ($fila=mysqli_fetch_array($result)) { ?>
        <tr>
          <td> <?php echo $fila[0]; ?></td>
          <td><?php echo $fila[1]; ?></td>
          <td><?php echo $fila[2]; ?></td>
          <td><?php if ($fila[3]==1) {
            echo "SI";
          }
          else {
            echo "NO";
          } ?></td>
          <!--Borrar  -->
          <td>
            <form method='post' action='validar.php'>
              <input type='hidden' name='id_usuario' value=<?= $fila[0] ?>>
              <div class="progress-button">
                  <button class="btn" id="ciF " type="submit">Eliminar</button>
                  <svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
                  <svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
                  <svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
                  <!-- /progress-button -->
                </div>
        </td>

            </form>
          <!-- Modificar -->
          <td>
            <form method='post' action='modificar.php'>
              <input type='hidden' name='id_modificar' value=<?= $fila[0] ?>>
              <div class="progress-button">
                <button class="btn" id="ciF " type="submit">Modificar</button>
                <svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
                <svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
                <svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
                <!-- /progress-button -->
              </div>
            </td>
            </form>
            <td>
              <form method='post' action='mailto:<?= $fila[4] ?>?subject=Ánima Puerta APP&body=Hola,%0D%0AEsta%20es%20la%20prueba%20de%20que%20mi%20email%20anda.%0D%0A%0D%0A-LINKAPP.%0D%0A%0D%0ASaludos!!'>
                <!-- <input type='hidden' name='correonuevo' value=<?= $fila[4] ?>> -->
                <div class="progress-button">
                  <button class="btn" id="ciF " type="submit">Enviar APP</button>
                  <svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
                  <svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
                  <svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
                  <!-- /progress-button -->
                </div>
              </td>
              </form>
        </tr>
       <?php }?>
     </div>
    </table>
  </body>
  </html>
