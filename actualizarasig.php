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
$idusuario=$_SESSION["id"]; 
$id=$_POST['id'] ;
$apr=$_POST['apr'] ;
$resultequp=mysqli_query($link, "UPDATE procesoasig  SET aprob='$apr' WHERE idasig='$id'");
				  if ($resultequp ==1) {
		echo "   <script>
      swal({
  title: 'Solicitud modificada',
  text: 'La solicitud se modifico con exito',
  type: 'success',
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
 $tex=urlencode("El proceso de asignacion con ID: #".$id. " se ha modificado correctamente, el nuevo estado de aprobacion es: " .$apr);
 file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
            }

	}
	else{
			echo "   <script>
      swal({
  title: 'Error',
  text: 'Error en la modificacion',
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
		}	
	?>