<?php 
require("conexion.php");
if (isset($_POST['accion'])){
$accion = $_POST["accion"];



 if ($accion == "borrarUsuario"){

// $nombre=$_POST["nombre"];
// $apellido=$_POST["apellido"];
// $email=$_POST["email"];

$idaborrar= $_POST["id"]; 	

$borrar= mysql_query("DELETE FROM `usuarios` WHERE id = $idaborrar ");

if ($borrar){ echo "Usuario borrado satisfactoriamente";}
	else{echo "error al borrar";}


}

}
else(die);
?>