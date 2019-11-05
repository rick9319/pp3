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
$id=$_POST['id'] ;
$nombre=$_POST['nombre'] ;
$apellidos= $_POST['apellidos'] ;					
$correo=$_POST['correo'] ;
$correl=$_POST['correl'] ;
$nombreusuario=$_POST['nombreusuario'] ;
$contra=md5($_POST['contraseña']);
$rol=$_POST['rol']; 
$result=mysqli_query($link, "UPDATE registro  SET nombre='$nombre', apellidos='$apellidos', correl='$correl',idrol='$rol', nombreusuario= '$nombreusuario',correo='$correo',password='$contra' WHERE idusuario='$id'");
				  if ($result ==1) {
		echo "   <script>
      swal({
  title: 'Registro modificado',
  text: 'El registro ha sido modificado con exito',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='myinfo.php';
  }
}); 
</script>";
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
    window.location='myinfo.php';
  }
}); 
</script>";
		}	
	?>