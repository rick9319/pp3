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
$nombre=$_POST['nombre'] ;
		 	$sqlcat = "INSERT INTO tipo (nombre) VALUES ('$nombre')";
			  $result=mysqli_query($link, $sqlcat);
				  if ($result == 1) {
	echo "   <script>
      swal({
  title: 'Exito',
  text: 'La categoria ha sido ingresada',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='addcat.php';
  }
}); 
</script>";
$querbot=mysqli_query($link,"SELECT token,chat FROM botrecord  WHERE idusuario='$idusuario'");
while($quertbotm = mysqli_fetch_row($querbot))
            {
              $token=$quertbotm[0];
              $chat=$quertbotm[1];
               $website="https://api.telegram.org/bot".$token;
 $tex=urlencode("Categoria insertada correctamente. Nombre de la categoria: " .$nombre );
 file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
            }
	}
	else{
				echo "   <script>
      swal({
  title: 'error',
  text: 'No se puede completar el ingreso. Intente de nuevo.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='addcat.php';
  }
}); 
</script>";
}	
	?>