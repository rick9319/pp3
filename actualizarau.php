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
$nombre=$_POST['nombre'] ;
$result=mysqli_query($link, "UPDATE aula  SET aula='$nombre' WHERE idaula='$id'");
				  if ($result ==1) {
		echo "   <script>
      swal({
  title: 'Registro modificado',
  text: 'El nombre del aula ha sido modificado con exito',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='consultaraula.php';
  }
}); 
</script>";
$querbot=mysqli_query($link,"SELECT token,chat FROM botrecord  WHERE idusuario='$idusuario'");
while($quertbotm = mysqli_fetch_row($querbot))
            {
              $token=$quertbotm[0];
              $chat=$quertbotm[1];
               $website="https://api.telegram.org/bot".$token;
 $tex=urlencode("El aula con ID #".$id. " se ha modificado correctamente, el nuevo nombre del aula es: " .$nombre);
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
    window.location='consultaraula.php';
  }
}); 
</script>";
		}	
	?>