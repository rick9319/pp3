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
$id =$_REQUEST['idequipo'];
	mysqli_query($link, "DELETE FROM equipo WHERE idequipo = '$id'")
or die(mysql_error());  
		echo "   <script>
      swal({
  title: 'Eliminado',
  text: 'El equipo ha sido eliminado exitosamente',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='consultaequipos.php';
  }
}); 
</script>";
?>