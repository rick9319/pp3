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
$id=$_SESSION["id"];
$eval=$_POST['btn'] ;
$facultad= $_POST['btn2'] ;					
$edad=$_POST['btn3'] ;
$considera=$_POST['btn4'] ;
$nombre=$_POST['namepro'] ;

$sqlidrol = mysqli_query($link,"SELECT idrol FROM registro where idusuario='$id'");
while($row = mysqli_fetch_row($sqlidrol)){
  $rol=$row[0];
}

		 	$sql = "INSERT INTO encuesta (iduser,idrol,evalsistema,facultad,edad,implementacion,nombre) 
		VALUES ('$id','$rol', '$eval', '$facultad', '$edad', '$considera', '$nombre')";

			  $result=mysqli_query($link, $sql);
				  if ($result) {
	echo "   <script>
      swal({
  title: 'Gracias por su opinión',
  text: 'Encuesta ingresada',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='bienvenido.php';
  }
}); 
</script>";
	}
	else{
				echo "   <script>
      swal({
  title: 'error',
  text: 'No se puede completar el registro de la encuesta. Intente de nuevo.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='bienvenido.php';
  }
}); 
</script>";
}	
	?>