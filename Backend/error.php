<?php   require("index.php"); //De por sí si llega acá es porque erró así que no hay mucho que explicar
 ?>

<!DOCTYPE html>
<html> /
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/error fondo">
    <script src="dist\sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist\sweetalert.css">
    <title>Error</title>
  </head>
  <body>
    <script>
    sweetAlert({ // Sweet Alert de que falló
      title: "Oops!",
      text: "Hubo un error en el ingreso de la cédula",
      type: "error"
    }, function() {
      window.location.href = "index.php";
    });
    </script>

  </body>
</html>
