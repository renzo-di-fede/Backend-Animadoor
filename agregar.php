<?php
  require("conn.php");

  $cinueva=$_POST["cinueva"];
  $nombrenuevo=$_POST["nombrenuevo"];
  //$admin=$_POST["admin"];
  $admin=0;
  if (isset($_POST["admin"])) {
    $admin=1;
  }
  $sql="INSERT INTO usuarios VALUES(null,$cinueva,'$nombrenuevo',$admin)";

  $result = mysqli_query($conn, $sql) or die ("Hola" . mysql_error());
  header("Location:index.php");
?>
