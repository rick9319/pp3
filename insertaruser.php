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
$apellidos= $_POST['apellidos'] ;					
$correo=$_POST['correo'] ;
$correl=$_POST['correl'] ;
$nombreusuario=$_POST['nombreusuario'] ;
$contra=md5($_POST['contraseña']);
$rol=$_POST['rol'];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];

$validation= mysqli_query($link,"SELECT correl from registro where correl='$correl'");
$rv = mysqli_num_rows($validation); 

if($rv == 0){
           $validation2= mysqli_query($link,"SELECT nombreusuario from registro where nombreusuario='$nombreusuario'");
            $rv2 = mysqli_num_rows($validation2); 
             if($rv2 == 0){
              $sql = "INSERT INTO registro (nombre, apellidos, correl,idrol,nombreusuario,correo,password,activo,fotor) 
               VALUES ('$nombre', '$apellidos', '$correl', '$rol', '$nombreusuario', '$correo', '$contra',0,0)";
               $result=mysqli_query($link, $sql);
               $idnuevo=mysqli_query($link,"SELECT idusuario from registro WHERE nombreusuario='$nombreusuario' AND correl='$correl' ");
              while($idre=mysqli_fetch_row($idnuevo))
               {
$idnew=$idre[0];
$destino="assets/fotos/".$idnew.".jpg";
copy($ruta,$destino);
$sqlfoto =mysqli_query($link,"UPDATE registro SET fotor='$destino' WHERE idusuario='$idnew'");
}

              if ($result) {
             echo "   <script>
      swal({
  title: 'Usuario registrado',
  text: 'El usuario ha sido registrado con exito',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='registrouserbasic.php';
  }
}); 
</script>";
$querbot=mysqli_query($link,"SELECT token,chat FROM botrecord  WHERE idusuario='$idusuario'");
      while($quertbotm = mysqli_fetch_row($querbot))
            {
              $token=$quertbotm[0];
              $chat=$quertbotm[1];
               $website="https://api.telegram.org/bot".$token;
 $tex=urlencode("Un nuevo usuario ha sido ingresado al sistema. Nombre: ".$nombre. ". Apellidos: ".$apellidos.". Correlativo: ".$correl. ". Nombre de usuario: ".$nombreusuario );
 file_get_contents($website."/sendmessage?chat_id=$chat&text=$tex");
            }
  }
}
else{
  echo "   <script>
      swal({
  title: 'Error',
  text: 'El nombre de usuario no esta disponible, intente con un diferente nombre',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='registrouserbasic.php';
  }
}); 
</script>";
}
}
else
{
  echo "   <script>
      swal({
  title: 'Error',
  text: 'El correlativo ya esta registrado en la base',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='registrouserbasic.php';
  }
}); 
</script>";
}
	?>