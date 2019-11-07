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
$marca=$_POST['marca'] ;
$modelo= $_POST['modelo'] ;					
$tipo=$_POST['tipo'] ;
$nserie=$_POST['nserie'] ;
$cantidad=$_POST['cantidad'] ;
$resultequp=mysqli_query($link, "UPDATE equipo  SET idtipo='$tipo', marca='$marca', modelo='$modelo', nserie='$nserie', cantidad='$cantidad' WHERE idequipo='$id'");
				  if ($resultequp ==1) {
		echo "   <script>
      swal({
  title: 'Registro modificado',
  text: 'El equipo ha sido modificado con exito',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='consultaequipos.php';
  }
}); 
</script>";
$querbot=mysqli_query($link,"SELECT token,chat FROM botrecord  WHERE idusuario='$idusuario'");
while($quertbotm = mysqli_fetch_row($querbot))
            {
              $token=$quertbotm[0];
              $chat=$quertbotm[1];
               $website="https://api.telegram.org/bot".$token;
 $tex=urlencode("El equipo con ID #".$id. " se ha modificado correctamente los nuevos valores son los siguientes: Marca - " .$marca." Modelo - " .$modelo." Numero de serie - " .$nserie." Tipo - " .$tipo." Cantidad - " .$cantidad );
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
    window.location='consultaequipos.php';
  }
}); 
</script>";
		}	
	?>