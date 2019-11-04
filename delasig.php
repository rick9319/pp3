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
$idasig =$_REQUEST['idasig'];
mysqli_query($link, "DELETE FROM procesoasig WHERE idasig = '$idasig'")
or die(mysql_error());  
	echo "   <script>
      swal({
  title: 'Asignacion eliminada',
  text: 'La asignacion ha sido eliminada con exito',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='consultaasig.php';
  }
}); 
</script>";
?>