
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



<div class="container">
    
    <form action="" method="POST"> 
	<div class="form-group">
			<label>Categoria:</label>
			<select name="Categorias"  class="form-control" >
				<option>----</option>
				<option value="Usuarios">Usuarios</option>
				<option value="Medicos">Medicos</option>
				<option value="Pacientes">Pacientes</option>
				

			</select>
		</div>
<button type="submit" name="Categoria" class="btn btn-primary" value="Categorias">Enviar categoria</button>
<p class="help-block">Envie una categoria.</p>

      <div class="form-group">
	  <input type="hidden" name="id" value="">	
	  </div>


		</form>

		<form action="Bootstrap.php" name="Formulario" method="POST" enctype="multipart/form-data">

		<?php

		if (isset($_POST['Categorias'])) {
		

		$Categorias=$_POST['Categorias'];


        	if ($Categorias=='Usuarios') { 	
        

        	?>

        	<?php

echo '<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Cedula:</label>
	<input type="number" name="Cedula" class="form-control">
</div>

<div class="form-group_1">
<label>Nombre:</label>
	<input type="text" name="Nombre" class="form-control">
	<p class="help-block">El nombre no debe contener mas de 50 caracteres.</p>		
</div>

<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Apellido:</label>
	<input type="text" name="Apellido" class="form-control">
	<p class="help-block">El apellido no debe contener mas de 50 caracteres.</p>	
</div>


<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Direccion:</label>
	<textarea rows="2" cols="95" name="Direccion" class="form-control"></textarea>	
	<p class="help-block">La direccion no debe contener mas de 1000 caracteres.</p>	
</div>

<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Correo:</label>
	<input type="text" name="Correo" class="form-control">
	<p class="help-block">El correo no debe contener mas de 50 caracteres.</p>	
</div>


 <div class="form-group_1" class="col-xs-12 col-md-12"> 
<button type="submit"  class="btn btn-primary" name="boton" value="Publicar">Publicar</button>
<button type="reset" class="btn btn-primary">Limpiar</button>
</div>
</form>'



  ;?>

<?php


          	  }else{

          	  	//echo "error, intente de nuevo";

          	  	if ($Categorias=='Pacientes') {
          	  	

          	  	?>

          	  	<?php

 echo '<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Cedula:</label>
	<input type="number" name="Cedula" class="form-control">
</div>

<div class="form-group_1">
<label>Nombre:</label>
	<input type="text" name="Nombre" class="form-control">
	<p class="help-block">El nombre no debe contener mas de 50 caracteres.</p>		
</div>

<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Apellido:</label>
	<input type="text" name="Apellido" class="form-control">
	<p class="help-block">El apellido no debe contener mas de 50 caracteres.</p>	
</div>


<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Historial:</label>
	<textarea rows="2" cols="95" name="Historial" class="form-control"></textarea>	
	<p class="help-block">El Historial no debe contener mas de 1000 caracteres.</p>	
</div>


 <div class="form-group_1" class="col-xs-12 col-md-12"> 
<button type="submit"  class="btn btn-primary" name="boton" value="Publicar_1">Publicar</button>
<button type="reset" class="btn btn-primary">Limpiar</button>
</div>
</form>'



  ;?>

  <?php




          	  	}else{

          	  		//echo "error, al procesar, inetente de nuevo";

          	  		if ($Categorias=='Medicos') {
          	  			
          	  			?>
          	  			<?php

 echo '<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Nombre:</label>
	<input type="text" name="Nombre" class="form-control">
	<p class="help-block">El nombre no debe contener mas de 50 caracteres.</p>		
</div>

<div class="form-group_1">
<label>Apellido:</label>
	<input type="text" name="Apellido" class="form-control">
	<p class="help-block">El Apellido no debe contener mas de 50 caracteres.</p>		
</div>

<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Correo:</label>
	<input type="text" name="Correo" class="form-control">
	<p class="help-block">El correo no debe contener mas de 100 caracteres.</p>	
</div>

<div class="form-group_1" class="col-xs-12 col-md-12">
<label>Telefono:</label>
	<input type="text" name="Telefono" class="form-control">
	<p class="help-block">El telefono no debe contener mas de 12 caracteres.</p>	
</div>


 <div class="form-group_1" class="col-xs-12 col-md-12"> 
<button type="submit"  class="btn btn-primary" name="boton" value="Publicar_2">Publicar</button>
<button type="reset" class="btn btn-primary">Limpiar</button>
</div>
</form>'

  ;?>

  <?php



          	  		}else{

          	  			echo "Error, al procesar, intente de nuevo";
          	  		}
          	  	}

          	  }

            }

        ?>

</form>
</div>

     <script type="text/javascript" src="../js/jquery.js"></script>
      <script src="../js/fileinput.min.js"></script>
     <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    

  <!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <!-- Latest compiled and minified JavaScript -->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
  


</body>
</html>
