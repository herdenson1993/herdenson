<?php

$id=$_GET['id'];

include "../conectar/conectar.php";

$conectar=mysqli_query($conectar, "DELETE FROM medicos where id='$id'") or die (mysqli_error($conectar));

if ($conectar) {
	
	 echo'<script>alert("Exito")</script>';
     echo"<script>location.href='medicos.php'</script>";
}else{

	 echo'<script>alert("Error,intente de nuevo")</script>';
     echo"<script>location.href='medicos.php'</script>";


}

?>