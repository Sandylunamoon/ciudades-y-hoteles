<?php
include("conbase.php");

if(isset($_POST['register'])){
	if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >=1){
		$name= trim($_POST['name']);
		$email=trim($_POST['email']);
		$fechareg= date("d/m/y");
		$consulta="INSERT INTO datos (nombre, correo, fechareg) VALUES ('$name','$email','$fechareg')"; 
		$resultado=mysqli_query($conex,$consulta);
	
if ($resultado) {
?>

<h3 class="ok">Te has registrado exitosamente!</h3>

<?php
} else {
	?>
	<h3 class="bad">UPS!, ha ocurrido un error </h3>
	<?php
}
} else {
	?>
	<h3 class="bad">Completa los campos requeridos</h3>
	<?php
}
  }
?>