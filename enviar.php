<?php 
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"registros");

	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$sql = "INSERT INTO usuarios(`id`, `name`, `email`, `password`)VALUES(NULL,'$name','$email','$pass')";

	mysqli_query($conexion,$sql);

	mysqli_close($conexion);

	echo "Usuario Registrado GRACIAS!!";

?>
<br>
<a href="index.php">regresar</a>