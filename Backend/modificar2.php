<?php
$cinueva=$_POST["cinueva"]; //cinueva de referencia "5040082-6" --> Vector 8123476
$verificador=$cinueva[0]*8+$cinueva[1]*1+$cinueva[2]*2+$cinueva[3]*3+$cinueva[4]*4+$cinueva[5]*7+$cinueva[6]*6;
$verificador = $verificador % 10; // Modulo de verificador
$nombrenuevo=$_POST["nombrenuevo"]; //Recibe POST Nombre
$id_usuario=$_POST["id_usuario"];
if ($verificador==$cinueva[7]) { //Verificador de cedula correcta
  require("conn.php"); //Conexión
  $nombrenuevo=$_POST["nombrenuevo"]; //Recibe POST Nombre
  $admin=0; //Esto establece que por default la cedula no es admin
  if (isset($_POST["admin"])) { //Si es admin cambia la variable a que es admin ekside
    $admin=1;
  }

  $sql="UPDATE usuarios Set ci = $cinueva, nombre = '$nombrenuevo', admin = $admin WHERE `usuarios`.`id` = $id_usuario"; //Establece la consulta

  $result = mysqli_query($conn, $sql) or die ("Hola" . mysql_error()); // Realiza la consulta
  header("Location:index.php"); //Vuelve para atrás
  }

else {
  header("Location:error.php"); //Lleva a error
}
 ?>
