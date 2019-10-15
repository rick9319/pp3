<!DOCTYPE html>
 <html>
 <head>
<script src="assets/sweetalert2.js"></script>
<link rel="stylesheet" type="text/css" href="assets/sweetalert2.css">
</head>
</html>
<?php
include("conexion.php");
include("seguridad.php");
    $link=conecta();
$nombre=$_POST['nombre'] ;
$apellidos= $_POST['apellidos'] ;					
$correo=$_POST['correo'] ;
$correl=$_POST['correl'] ;
$nombreusuario=$_POST['nombreusuario'] ;
$contra=md5($_POST['contraseña']);
$rol=$_POST['rol'];
		 	$sql = "INSERT INTO registro (nombre, apellidos, correl,idrol,nombreusuario,correo,password,fotor) 
		VALUES ('$nombre', '$apellidos', '$correl', '$rol', '$nombreusuario', '$correo', '$contra',0)";

			  $result=mysqli_query($link, $sql);
				  if ($result) {
	echo "   <script>
      swal({
  title: 'Usuario registrado',
  text: 'El usuario ha sido registrado con exito',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='registrouserbasic.php';
  }
}); 
</script>";
	}
	else{
				echo "   <script>
      swal({
  title: 'error',
  text: 'No se puede completar el registro. Intente de nuevo.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='registrouserbasic.php';
  }
}); 
</script>";
}	
	?>