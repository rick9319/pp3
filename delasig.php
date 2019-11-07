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
  $idusuario=$_SESSION["id"];    
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
$querbot=mysqli_query($link,"SELECT token,chat FROM botrecord  WHERE idusuario='$idusuario'");
while($quertbotm = mysqli_fetch_row($querbot))
            {
              $token=$quertbotm[0];
              $chat=$quertbotm[1];
               $website="https://api.telegram.org/bot".$token;
 $tex=urlencode("Se ha eliminado la asignacion con ID #".$idasig. " del sistema" );
 file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
            }
?>