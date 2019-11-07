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
$idusuario2=$_SESSION["id"]; 
$id =$_REQUEST['idusuario'];
if($_SESSION["id"] == $id){
mysqli_query($link, "DELETE FROM registro WHERE idusuario = '$id'")
or die(mysql_error());  
	echo "   <script>
      swal({
  title: 'Usuario eliminado',
  text: 'Su usuario ha sido borrado con exito, sera redirigido al inicio de sesion.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='salir.php';
  }
}); 
</script>";
$querbot=mysqli_query($link,"SELECT token,chat FROM botrecord  WHERE idusuario='$idusuario2'");
while($quertbotm = mysqli_fetch_row($querbot))
            {
              $token=$quertbotm[0];
              $chat=$quertbotm[1];
               $website="https://api.telegram.org/bot".$token;
 $tex=urlencode("ALERTA: Su usuario ha sido eliminado del sistema SES" );
 file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
            }
}	
else{
	mysqli_query($link, "DELETE FROM registro WHERE idusuario = '$id'")
or die(mysql_error());  
		echo "   <script>
      swal({
  title: 'Usuario Eliminado',
  text: 'El usuario ha sido borrado con exito',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='consultausuarios.php';
  }
}); 
</script>";
$querbot=mysqli_query($link,"SELECT token,chat FROM botrecord  WHERE idusuario='$idusuario2'");
while($quertbotm = mysqli_fetch_row($querbot))
            {
              $token=$quertbotm[0];
              $chat=$quertbotm[1];
               $website="https://api.telegram.org/bot".$token;
 $tex=urlencode("Se ha eliminado el usuario con ID #".$id. " del sistema" );
 file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
            }
}

?>