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
$querbot=mysqli_query($link,"SELECT idusuario FROM botrecord  WHERE idusuario='$idusuario'");
                           $checkbot = mysqli_num_rows($querbot); 
            if ($checkbot >0 ) {
                         $bot=$_POST['bot'] ;
$chat= $_POST['chat'] ;
$website="https://api.telegram.org/bot".$bot;         
$sql = "UPDATE botrecord SET token='$bot', chat='$chat' WHERE idusuario='$idusuario'";
               $result=mysqli_query($link, $sql);

              if ($result) {
             echo "   <script>
      swal({
  title: 'Bot actualizado correctamente',
  text: 'A partir de este momento recibira notificaciones en su dispositivo',
  type: 'success',
  confirmButtonColor: '#29b80d',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='bienvenido.php';
  }
}); 
</script>";

           $tex=urlencode("Mensaje de confirmacion: se ha actualizado el bot correctamente");
           file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
  }

else
{
  echo "   <script>
      swal({
  title: 'Error',
  text: 'No se ha realizado la configuracion de bot. Intente nuevamente.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='bottel.php';
  }
}); 
</script>";
}
                           }
                           else{
                       $bot=$_POST['bot'] ;
$chat= $_POST['chat'] ;
$website="https://api.telegram.org/bot".$bot;         
$sql = "INSERT INTO botrecord (idusuario, token, chat) 
               VALUES ('$idusuario', '$bot', '$chat')";
               $result=mysqli_query($link, $sql);

              if ($result) {
             echo "   <script>
      swal({
  title: 'Bot configurado',
  text: 'A partir de este momento recibira notificaciones en su dispositivo',
  type: 'success',
  confirmButtonColor: '#29b80d',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='bienvenido.php';
  }
}); 
</script>";

           $tex=urlencode("Mensaje de confirmacion: se ha configurado el bot correctamente");
           file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
  }

else
{
  echo "   <script>
      swal({
  title: 'Error',
  text: 'No se ha realizado la configuracion de bot. Intente nuevamente.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='bottel.php';
  }
}); 
</script>";
}
                        }

	?>