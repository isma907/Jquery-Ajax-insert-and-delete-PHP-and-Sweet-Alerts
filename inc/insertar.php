<?php 
require("conexion.php");


if (isset($_POST["accion"])){
$accion = $_POST["accion"];

		if ($accion == "insertarUsuario"){

		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];

		$sql= mysql_query("INSERT INTO `usuarios` (`id`, `nombre`, `apellido`,`email`) VALUES (NULL, '$nombre', '$apellido','$email')");
		         mysql_query("set names 'utf8'");   
		    	if($sql){echo "DATOS INSERTADOS";}
		    	else { echo "error de insersión";}  

		}
		else{
			echo "error";
		}


}
else{die();}

?>