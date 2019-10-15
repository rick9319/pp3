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
$marca=$_POST['marca'] ;
$idregistro=$_SESSION["id"];
$modelo= $_POST['modelo'] ;					
$tipo=$_POST['tipo'] ;
$nserie=$_POST['nserie'] ;
$cantidad=$_POST['cantidad'] ;
		 	$sql = "INSERT INTO equipo (idtipo, idusuario, marca,modelo,nserie,cantidad) 
		VALUES ('$tipo', '$idregistro', '$marca', '$modelo', '$nserie', '$cantidad')";

			  $result=mysqli_query($link, $sql);
				  if ($result ==1) {
	echo "   <script>
      swal({
  title: 'Equipo registrado',
  text: 'El equipo se ha registrado con exito',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='registroequipo.php';
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
    window.location='registroequipo.php';
  }
}); 
</script>";
}	
	?>