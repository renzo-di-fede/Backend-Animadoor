<?php
    $id_usuario = $_POST["id_usuario"]; //Se almacena en una variable el id del usuario a eliminar
    require("index.php");
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="dist\sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist\sweetalert.css">
    <title>Borro</title>
  </head>
  <body>
    <script>
    swal({ //Sweet Alert
    title: "Estás seguro?",
    text: " Se borrará la cédula de la base de datos",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Si, estoy seguro",
    cancelButtonText: "No, cancelar.",
    closeOnConfirm: false,
    closeOnCancel: false
  },
function(isConfirm){
  if (isConfirm) {
    // Redirije al index -- Friendly Reminder; Odio JavaScript
    document.getElementById("formenviar").submit();
  } else {
    window.location.href = "index.php";
  }
});
    </script>
      <form class="" action="borrar.php" method="post" id="formenviar">
        <input type='hidden' name='id_usuario' value='<?= $id_usuario ?>'>
    </form>
  </body>
</html>
