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
$id =$_REQUEST['idau'];
mysqli_query($link, "DELETE FROM aula WHERE idaula = '$id'")
or die(mysql_error());  
		echo "   <script>
      swal({
  title: 'Aula eliminada',
  text: 'El registro fue borrado con exito',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='consultaraula.php';
  }
}); 
</script>";
?>