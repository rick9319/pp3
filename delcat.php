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
$id =$_REQUEST['idtipo'];
mysqli_query($link, "DELETE FROM tipo WHERE idtipo = '$id'")
or die(mysql_error());  
		echo "   <script>
      swal({
  title: 'Categoria eliminada',
  text: 'La categoria ha sido eliminada con exito',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='consultarcat.php';
  }
}); 
</script>";
?>