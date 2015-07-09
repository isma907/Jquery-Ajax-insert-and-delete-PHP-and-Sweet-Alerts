<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="">


	<title>ISMA SASS</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet"> 
	<link rel="stylesheet" href="css/alert.css">
</head>

<body>




	<div class="container">

		
		<div class="col-sm-6 col-sm-offset-2 clearfix">
			<input type="text" id="nombre" placeholder="Nombre" required><br><br>
			<input type="text" id="apellido" placeholder="Apellido" required><br><br>
			<input type="email" id="email" placeholder="Email" required><br><br>
			<button class="btn btn-primary btn-lg" id="agregar">Agregar Usuario</button>
		</div>


	<hr>	

	<div class="col-sm-12 clearfix" id="mensaje">
		
	</div>
	<img src="img/loading.gif" id="cargando">
			<table class="table table-striped table-advance table-hover">
			<thead>
				<tr>
				<th><i class="fa fa-bullhorn"></i> Nombre</th>
					<th class="hidden-phone"><i class="fa fa-question-circle"></i> Apellido</th>
					<th><i class="fa fa-bookmark"></i> Email</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="listado">
			

			</tbody>
		</table>	



	</div>



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script> 
	<script src="js/function.js"></script>
</body>
</html>
