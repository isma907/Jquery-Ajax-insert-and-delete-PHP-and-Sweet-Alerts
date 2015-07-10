<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jquery Ajax Insert and Delete + Sweet alerts + Bootstrap Sass</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet"> 
	<script src="js/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="css/sweetalert.css">
</head>
   
<body>




	<div class="container">
		<h1>Jquery Ajax Insert and Delete + Sweet alerts</h1>
		<hr>
		<div class="col-sm-3 clearfix"></div>
		<div class="col-sm-6 clearfix">
			<form action="" id="agregar">
				<input type="text" id="nombre" placeholder="Nombre" required><br><br>
				<input type="text" id="apellido" placeholder="Apellido" required><br><br>
				<input type="email" id="email" placeholder="Email" required><br><br>
				<input type="submit" class="btn btn-primary btn-lg" value="Agregar Usuario">
			</form>
			
			<img src="img/loading.gif" id="cargando">
		</div>
		<div class="col-sm-3 clearfix"></div>
		
		
		<div class="col-sm-12 clearfix" id="mensaje">
			<hr>
			
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

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script> 
	<script src="js/function.js"></script>
</body>
</html>
