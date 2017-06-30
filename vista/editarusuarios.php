<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
<header>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-R">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">CRUD <--R--></a>
			</div>
			<!--Inicia Menu-->
			<div class="collapse navbar-collapse" id="navegacion-R">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
							Menu
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="usuarios.php">Usuarios</a></li>
							<li class="divider"></li>
							<li><a href="medicos.php">Medicos</a></li>
							<li class="divider"></li>
							<li><a href="pacientes.php">Pacientes</a></li>
						</ul>
						<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              Clasificados
              <span class="caret"></span>
            </a>
           
          </li>
						<li class=""><a href="#">Contacto</a></li>
					</li>

				</ul>
				<form action="" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</form>
			</div>
		</div>
	</nav>
</header>

<section class="jumbotron">
	<div class="container">
		<h1 class="titulo-blog">Mini Aplicacion</h1>
		<p>
			CRUD <--R-->
		</p>
	</div>
</section>



	<?php

   $id=$_GET['id'];

   include'../conectar/conectar.php';

       $consulta=mysqli_query($conectar, "SELECT * FROM usuarios where id='$id'") or die(mysqli_error($conectar));

       while ($row=mysqli_fetch_assoc($consulta)){



	?>  
        <div class="container">
	<form action="Bootstrap.php" method="POST">
	<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $row['id'];?>">	
	</div>

	    <div class="form-group">
			<label>Cedula:</label>
			<input type="text" name="Cedula" value="<?php echo $row['Cedula'];?>" class="form-control" required>
		</div>

	
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="Nombre" value="<?php echo $row['Nombre'];?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label>Apellido:</label>
			<input type="text" name="Apellido" value="<?php echo $row['Apellido'];?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label>Direccion:</label>
			<input type="text" name="Direccion" value="<?php echo $row['Direccion'];?>" class="form-control" required>
		</div>

		<div class="form-group">
			<label>Correo:</label>
			<input type="text" name="Correo" value="<?php echo $row['Correo'];?>" class="form-control" required>
		</div>



		

		<button type="submit" name="boton" value="Editar_2" class="btn btn-primary">Editar</button>
		<button type="reset" class="btn btn-primary">Limpiar</button>

		<?php

		  }

		  ?>
	</form>
</div>

      <script type="text/javascript" src="../js/jquery.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>


  <!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <!-- Latest compiled and minified JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
</body>
</html>
