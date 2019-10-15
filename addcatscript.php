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
		 	$sqlcat = "INSERT INTO tipo (nombre) VALUES ('$nombre')";
			  $result=mysqli_query($link, $sqlcat);
				  if ($result == 1) {
	echo "   <script>
      swal({
  title: 'Exito',
  text: 'La categoria ha sido ingresada',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='addcat.php';
  }
}); 
</script>";
	}
	else{
				echo "   <script>
      swal({
  title: 'error',
  text: 'No se puede completar el ingreso. Intente de nuevo.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='addcat.php';
  }
}); 
</script>";
}	
	?>