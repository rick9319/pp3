<?php

include("conexion.php");
 $link=conecta();

if(isset($_POST["Import"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		$fecha = time();
		$fecha2 = date("Y-m-d",$fecha);

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	         
	           $sql = "INSERT INTO registro(nombre, apellidos, correl, idrol, nombreusuario, correo, password, activo, fotor, fechar) VALUES('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]',$fecha2)";


	         
			  $result = mysqli_query($link, $sql);

				
			 if(!$result )
				{
			echo "<script type=\"text/javascript\">
							alert(\"Por favor seleccione el archivo correcto\");
							window.location = \"dataimportCSV.php\"
						</script>";
				}
				

	         }
	         
	         fclose($file);
	         
                         echo "<script type=\"text/javascript\">
							alert(\"El CSV se envio correctamente \");
							window.location = \"dataimportCSV.php\"
						</script>";
				
		 	
			
		 }
	}
?>		 