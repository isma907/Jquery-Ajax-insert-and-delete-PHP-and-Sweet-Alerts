<?php 
require("conexion.php");
if (isset($_POST['accion'])){
$accion = $_POST["accion"];



if ($accion == "generarListado"){

// $nombre=$_POST["nombre"];
// $apellido=$_POST["apellido"];
// $email=$_POST["email"];

$listado= mysql_query("SELECT * FROM `usuarios`ORDER BY `id` DESC");
while ( $row=mysql_fetch_array($listado) ) { ?>
<tr class="usr<?php echo $row['id'];  ?> ">
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['apellido']; ?></td>
<td><?php echo $row['email']; ?></td>
<td>
	<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
	<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
	<button class="btnEliminar remove-item btn btn-danger btn-xs" id="<?php echo $row['id']?>" onClick="borrarUsuario()"><i class="fa fa-trash-o "></i></button>
</td>
</tr>

<?php }


}

}
else(die);
?>