<!DOCTYPE html>
 <html>
  <head>
<script src="assets/sweetalert2.js"></script>
<link rel="stylesheet" type="text/css" href="assets/sweetalert2.css">
</head>
</html>
<?php
/* realizamos la conexi�n con nuestra base de datos en MySQL */ 
$link = mysqli_connect("localhost","root","","proyecto"); 
$myusuario = mysqli_query($link, "SELECT nombreusuario FROM registro WHERE nombreusuario = '".htmlentities($_POST["user"])."'"); 
$nmyusuario = mysqli_num_rows($myusuario); 


//Si existe el usuario, validamos tambi�n la contrase�a ingresada y el estado del usuario... 
if($nmyusuario != 0)
{ 
  $myclave = mysqli_query($link,"SELECT idusuario,nombreusuario FROM registro WHERE nombreusuario = '".htmlentities($_POST["user"])."' and password = '".md5(htmlentities($_POST["password"]))."'"); 
  $nmyclave = mysqli_num_rows($myclave); 
  //Si el usuario y clave ingresado son correctos (y el usuario est� activo en la BD), creamos la sesi�n del mismo. 
  if($nmyclave != 0)
  { 
      session_start(); 
      //Guardamos dos variables de sesi�n que nos auxiliar� para saber si se est� o no "logueado" un usuario 
      $_SESSION["autentica"] = "SI"; 
while($row = mysqli_fetch_row($myclave))
{
$id = $row[0];
$nombreuser= $row[1];
}
      $_SESSION["id"] = $id;
      $_SESSION["usuarioactual"] = $nombreuser;
      $updateestado = mysqli_query($link,"UPDATE registro SET activo=1 WHERE idusuario='$id'"); 
      //nombre del usuario logueado. 
      //Direccionamos a nuestra p�gina principal del sistema. 


      header ("Location: bienvenido.php"); 
   }
      else{ 
      echo "   <script>
      swal({
  title: 'Error',
  text: 'Credenciales incorrectas, favor intentar de nuevo.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='index.php';
  }
}); 
</script>";
   } 
}
else{ 
      echo "   <script>
      swal({
  title: 'Error',
  text: 'Credenciales incorrectas, favor intentar de nuevo.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='index.php';
  }
}); 
</script>";
   }
?>