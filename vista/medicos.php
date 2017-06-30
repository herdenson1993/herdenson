<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mi Primera Pagina en boostrap</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/file.css">
       

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
			<!--Inicia menu-->
			<div class="collapse navbar-collapse" id="navegacion-R">
				<ul class="nav navbar-nav">
					<li class=""><a href="index.php">Inicio</a></li>
					<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
						Menu
						<span class="caret"></span>

					<ul class="dropdown-menu" role="menu">
							<li class="1"><a href="usuarios.php" target="">Usuarios</a></li>
                            <li class="divider"></li>
					        <li class="2"><a href="pacientes.php">Pacientes</a></li>
					        <li class="divider"></li>
					        <li class="3"><a href="medicos.php">Medicos</a></li>
					        
						</ul>

					</a>
					</li>
					<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              Clasificados
              <span class="caret"></span>
            </a>
           
          </li>
					<li class=""><a href="">Blog</a></li>
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
		<h1 class="titulo-blog">Mini-Aplicacion</h1>
		<p>
			CRUD <--R-->
		</p>
	</div>
</section>


<table class="table table-bordered table-hover">
	<thead>
		<th>id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Telefono</th>
		<th>Acciones</th>

	</thead>

	<?php
       
       include "../conectar/conectar.php";

       $consulta=mysqli_query($conectar, "SELECT * FROM medicos") or die(mysqli_error($conectar));

       while ($row=mysqli_fetch_assoc($consulta)){

       ?>

       <tr>

       <td><?php echo $row['id']?></td>
		<td><?php echo $row['Nombre']?></td>
		<td><?php echo $row['Apellido']?></td>
		<td><?php echo $row['Correo']?></td>
		<td><?php echo $row['Telefono']?></td>
		<td><a href="eliminarmedicos.php?eliminarmedicos&id=<?php echo $row['id']?>" class="btn btn-primary">Eliminar</a> <a href="edtitarmedicos.php?view=editarmedicos&id=<?php echo $row['id'];?>" class="btn btn-primary">Editar</a></td>

		</tr>
          
       <?php  

		}

		?>
	
</table>

      <script type="text/javascript" src="../js/jquery.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
