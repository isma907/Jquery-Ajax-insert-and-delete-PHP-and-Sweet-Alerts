<?php 
require("conexion.php");
if (isset($_POST['accion'])){
	$accion = $_POST["accion"];



	if ($accion == "generarListado"){

		$listado= mysql_query("SELECT * FROM `usuarios`ORDER BY `id` DESC");
		$contarList= mysql_num_rows($listado);
		
		if ($contarList== 0){ echo 'No hay usuarios.';
	}
	else{
		while ( $row=mysql_fetch_array($listado) ) { ?>
		<tr class="usr<?php echo $row['id'];  ?> ">
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<button class="btnEliminar remove-item btn btn-danger btn-xs" id="<?php echo $row['id']?>"><i class="fa fa-trash-o "></i></button>
			</td>
		</tr>
		<?php }
	}
	



}

}
else(die);
?>