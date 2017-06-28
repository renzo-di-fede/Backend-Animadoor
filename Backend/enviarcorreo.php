<?php
  require("conn.php"); //Conexión
  $correonuevo=$_POST["correonuevo"];


  $to = $correonuevo;
  $subject = "Aplicación Puerta Ánima";
  $body = "Hola,\n\nCómo estás?";
  if (mail($to, $subject, $body)) {
    echo("<p>Se envió</p>");
  } else {
    echo("<p>No se envió xd </p>");
  }
  echo "$correonuevo";

 ?>
