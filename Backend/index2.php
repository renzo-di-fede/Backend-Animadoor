<?php
require("conn.php");
$sql="SELECT * FROM usuarios";
$result=mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cédulas</title>
  </head>
  <body>

    <h1>Estructura xD</h1>
    <form class="" action="agregar.php" method="post">
      <div id="resultado"></div>
      <input type="text" name="nombrenuevo" placeholder="Agregar Nombre" required="" maxlength="50">
      <input type="text" name="cinueva" placeholder="Agregar Cédula" minlength="8" maxlength="8" required="">
      <label for="admin">Admin?</label>
      <input type="checkbox" name="admin" value="0">
      <button type="submit" name="button">Enviar</button>
      <br><br>
    </form>
    <table cellpadding="10px">
      <tr>
        <td>ID</td>
        <td>CI</td>
        <td>Nombre</td>
        <td>Admin?</td>
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
              <input type='submit' value='Eliminar'></td>
            </form>
          <!-- Modificar SIN HACER-->
          <td>
            <form method='post' action='modificar.php'>
              <input type='hidden' name='id_modificar' value=<?= $fila[0] ?>>
              <input type='submit' value='Modificar'></td>
            </form>
        </tr>
       <?php }?>
    </table>
  </body>
  </html>
