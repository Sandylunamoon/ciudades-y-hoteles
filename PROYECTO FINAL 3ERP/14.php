<!DOCTYPE html>
<html lang="es">
<head>
	<title>REGISTRAR USUARIO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="est.css">
</head>
<body>
	<form method="post">
		<h1>REGISTRATE</h1>
		<input type="text" name="name" placeholder="Nombre">
		<input type="email" name="email" placeholder="Email">
		<input type="submit" name="register">
	</form>
<?php
include("registro.php");
?>

<a href="14.html">SIGUIENTE</a>
</body>
</html>