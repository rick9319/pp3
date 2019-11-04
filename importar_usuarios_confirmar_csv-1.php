<?php 

include("conexion.php");
$link=conecta();


	$sql = "INSERT INTO registro (idusuario, nombre, apellidos, correl, idrol, nombreusuario, correo, password, activo, fotor, fechar) SELECT NULL, nombre, apellidos, correl, idrol, nombreusuario, correo, MD5(password), activo, fotor, fechar FROM temps_registro";

	$result = mysqli_query($link, $sql);

	echo $result;

	if ($result==1) {
	     
	   echo "<script type=\"text/javascript\">
							alert(\"Agregado con exito\");
							window.location = \"consultausuarios.php\"
						</script>";

	$sql2 = "DELETE FROM temps_registro";

	$result2 = mysqli_query($link, $sql2);

	    
	  }else{
	    
	    echo "<script type=\"text/javascript\">
							alert(\"Error al enviar el archivo\");
							window.location = \"dataimportCSV.php\"
						</script>";
	     
	 }


 ?>