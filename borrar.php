<?php
    require("conn.php");
    $id_usuario = $_POST["id_usuario"]; //Se almacena en una variable el id del usuario a eliminar
    $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = $id_usuario"; //Consulta
    $result=mysqli_query($conn,$sql) or die(mysql_error()); //Arrancar la consulta
    header("Location:index.php"); //redirigir nueva mente a la página para ver el resultado
?>
