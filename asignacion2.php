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
$idequipo=$_POST['id'] ;
$idaula= $_POST['aula'];
$idusuario=$_SESSION["id"];				
$cantidad=$_POST['cantidad'];
$validacion1sql=mysqli_query($link,"SELECT cantidad,modelo,nserie FROM equipo WHERE idequipo='$idequipo'");
while($rowval1 = mysqli_fetch_row($validacion1sql))
            {
              $cantidadactual=$rowval1[0];
               $modelo=$rowval1[1];
               $nserie=$rowval1[2];
            }
            if($cantidadactual<$cantidad)
            {
echo "   <script>
      swal({
  title: 'Error de cantidad',
  text: 'La cantidad ingresada es mayor a la cantidad en inventario: "; 
echo $cantidadactual;
echo " unidad/es del modelo: ";
echo $modelo;
  echo " . Modifique la cantidad a asignar',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='asignacion.php';
  }
}); 
</script>";
            }
else{

		 	$sql = "INSERT INTO procesoasig (idequipo,idaula,idusuario,cantidad,fechaasig,aprob) 
		VALUES ('$idequipo', '$idaula', '$idusuario','$cantidad',CURRENT_TIMESTAMP,2)";    

			  $result=mysqli_query($link, $sql);
				  if ($result ==1) {
            $cantidadnueva=$cantidadactual-$cantidad;
$sql2 = mysqli_query($link,"UPDATE  equipo SET cantidad='$cantidadnueva' WHERE idequipo='$idequipo' ");
	echo "   <script>
      swal({
  title: 'Asignacion completada',
  text: 'Usted asigno ";
echo $cantidad;
  echo " unidades del modelo ";
  echo $modelo;
  echo " con numero de serie ";
echo $nserie;
 echo ". La nueva cantidad en inventario es de: ";
echo $cantidadnueva;
echo " unidades existentes ',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='asignacion.php';
  }
}); 
</script>";

	}
	else{
				echo "   <script>
      swal({
  title: 'error',
  text: 'No se puede completar la asignacion. Intente de nuevo.',
  type: 'error',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='asignacion.php';
  }
}); 
</script>";
}	
}
	?>