<?php

include'../conectar/conectar.php';

$boton=$_POST['boton'];

if ($boton=='Publicar') {

$Cedula=$_POST['Cedula'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];

$query= "INSERT INTO usuarios VALUES ('','$Cedula','$Nombre','$Apellido','$Direccion','$Correo')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='usuarios.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}



if ($boton=='Publicar_1') {


$Cedula=$_POST['Cedula'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Historial=$_POST['Historial'];

$query= "INSERT INTO pacientes VALUES ('','$Cedula','$Nombre','$Apellido','$Historial')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='pacientes.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}


if ($boton=='Publicar_2') {

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$query= "INSERT INTO medicos VALUES ('','$Nombre','$Apellido','$Correo','$Telefono')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='medicos.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}

if ($boton=='Eliminar') {

    $id=$_POST['id'];
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Correo=$_GET['Correo'];
    $Telefono=$_POST['Telefono'];

$query= "DELETE FROM medicos where id='$id'";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='medicos.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}

if ($boton=='Eliminar_1') {

    $id=$_POST['id'];

$query= "DELETE FROM pacientes WHERE id='$id'";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='pacientes.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}


if ($boton=='Eliminar_2') {

$query= "DELETE FROM usuarios";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='usuarios.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}

if ($boton=='Editar') {

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$query= "UPDATE medicos SET Nombre='$Nombre', Apellido='$Apellido', Correo='$Correo', Telefono='$Telefono' WHERE id='$id'";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='medicos.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}

if ($boton=='Editar_1') {
$id=$_POST['id'];
$Cedula=$_POST['Cedula'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Historial=$_POST['Historial'];

$query= "UPDATE pacientes SET Cedula='$Cedula', Nombre='$Nombre', Apellido='$Apellido', Historial='$Historial' where id='$id'";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='pacientes.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}


if ($boton=='Editar_2') {

$id=$_POST['id'];
$Cedula=$_POST['Cedula'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];


$query= "UPDATE usuarios SET Cedula='$Cedula', Nombre='$Nombre', Apellido='$Apellido', Direccion='$Direccion', Correo='$Correo' where id='$id'";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='usuarios.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='index.php'</script>";

}

}



/*

if ($boton=='Publicar_3') {


$Titulo=$_POST['Titulo'];
$Ofrecido=$_POST['Ofrecido'];
$Zona=$_POST['Zona'];
$Cuerpo=$_POST['Cuerpo'];
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));





$query= "INSERT INTO Servicios VALUES ('','$Titulo','$Ofrecido','$Zona','$Cuerpo','$Imagen')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='servicios.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='publicacion'.php'</script>";

}

}


if ($boton=='Publicar_4') {


$Titulo=$_POST['Titulo'];
$Precio=$_POST['Precio'];
$Ofrecido=$_POST['Ofrecido'];
$Ubicacion=$_POST['Ubicacion'];
$Cuerpo=$_POST['Cuerpo'];
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));





$query= "INSERT INTO Carros VALUES ('','$Titulo','$Precio','$Ofrecido','$Ubicacion','$Cuerpo','$Imagen')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='carros.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='publicacion'.php'</script>";

}

}

if ($boton=='Publicar_5') {


$Titulo=$_POST['Titulo'];
$Precio=$_POST['Precio'];
$Ofrecido=$_POST['Ofrecido'];
$Ubicacion=$_POST['Ubicacion'];
$Cuerpo=$_POST['Cuerpo'];
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));





$query= "INSERT INTO Motos VALUES ('','$Titulo','$Precio','$Ofrecido','$Ubicacion','$Cuerpo','$Imagen')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='motos.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='publicacion'.php'</script>";

}

}


if ($boton=='Publicar_6') {


$Titulo=$_POST['Titulo'];
$Precio=$_POST['Precio'];
$Ofrecido=$_POST['Ofrecido'];
$Ubicacion=$_POST['Ubicacion'];
$Cuerpo=$_POST['Cuerpo'];
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));





$query= "INSERT INTO Terreno VALUES ('','$Titulo','$Precio','$Ofrecido','$Ubicacion','$Cuerpo','$Imagen')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='terrenos.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='publicacion'.php'</script>";

}

}

if ($boton=='Publicar_7') {

$Titulo=$_POST['Titulo'];
$Precio= $_POST['Precio'];
$Ofrecido=$_POST['Ofrecido'];
$Ubicacion=$_POST['Ubicacion'];
$Cuerpo=$_POST['Cuerpo'];
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$query= "INSERT INTO Computadoras VALUES ('','$Titulo','$Precio','$Ofrecido','$Ubicacion','$Cuerpo','$Imagen')";

$resultado=$conectar->query($query);


if($resultado){

    echo'<script>alert("Exito")</script>';
    echo"<script>location.href='computadoras.php'</script>";

}else{

    echo'<script>alert("Error, intente de nuevo")</script>';
    echo"<script>location.href='publicacion'.php'</script>";

}

}

*/















?>
