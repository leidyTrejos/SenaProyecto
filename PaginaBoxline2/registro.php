<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosFormulario.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/codigo.min.js"></script>
	
	<title>Registro</title>
	<link rel="icon" href="img/icono/logo.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<section class="padreRegistro">
		<div class="jumbotron registro alert alert-light">
			<h2>Registro</h2>
			<hr>
			<form action="crearRegistro.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Ingrese nombre completo :</label>
					<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Ingrese nombre de usuario :</label>
					<input type="text" class="form-control" name="usuarioR" placeholder="Usuario" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Ingrese correo electronico :</label>
					<input type="mail" class="form-control" name="correo" placeholder="Correo electronico" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Ingrese fecha de nacimiento :</label>
					<input type="date" class="form-control" name="fecha" placeholder="Fecha de nacimiento" required>
				</div>
				<div class="DatosIncorrectos">
					<?php
					if(isset($_GET["error1"])){
						echo "* El Usuario o el correo ingresados ya estan registrados *";
					}
					?>
				</div>
				<a href="listaUsuarios.php" class="btn btn-outline-light w-100 registrarse" value="Registrarse">Enviar</a>
				<a href="index.php" class="btn btn-outline-light w-100 cancelar">Cancelar</a>
			</form>
			</div>
		</div>
	</section>
</body>
</html>