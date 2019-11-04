<!DOCTYPE html>
 <html>
 <head>
<script src="assets/sweetalert2.js"></script>
<link rel="stylesheet" type="text/css" href="assets/sweetalert2.css">
</head>
</html>
<!-- PROCESO DE CARGA Y PROCESAMIENTO DEL EXCEL-->
<?php 
 include("conexion.php");
$link=conecta();
extract($_POST);
if (isset($_POST['action'])) {
$action=$_POST['action'];
}

if (isset($action)== "upload"){
//cargamos el fichero
$archivo = $_FILES['excel']['name'];
$tipo = $_FILES['excel']['type'];
$destino = "cop_".$archivo;//Le agregamos un prefijo para identificarlo el archivo cargado
if (copy($_FILES['excel']['tmp_name'],$destino)) echo "";
else echo "Error Al Cargar el Archivo";
		
if (file_exists ("cop_".$archivo)){ 
/** Llamamos las clases necesarias PHPEcel */
require_once('dist/PHPExcel.php');
require_once('dist/PHPExcel/Reader/Excel2007.php');					
// Cargando la hoja de excel
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load("cop_".$archivo);
$objFecha = new PHPExcel_Shared_Date();       

// Asignamon la hoja de excel activa

$objPHPExcel->setActiveSheetIndex(0);


// Importante - conexión con la base de datos 
//$cn = mysqli_connect("localhost", "root", "", "prueba") or die ("ERROR EN LA CONEXION CON LA BD");
//$db = mysql_select_db ("fidelizacionsv",$cn) or die ("ERROR AL CONECTAR A LA BD");

// Rellenamos el arreglo con los datos  del archivo xlsx que ha sido subido

$columnas = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn();
$filas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

$fecha = time();
$fecha2 = date("Y-m-d",$fecha);

//Creamos un array con todos los datos del Excel importado
for ($i=2;$i<=$filas;$i++){
						$_DATOS_EXCEL[$i]['nombre'] = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
						$_DATOS_EXCEL[$i]['apellidos'] = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
						$_DATOS_EXCEL[$i]['correl']= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
						$_DATOS_EXCEL[$i]['idrol']= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
						$_DATOS_EXCEL[$i]['nombreusuario'] = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
						$_DATOS_EXCEL[$i]['correo'] = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['password'] = md5($objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue());
                        $_DATOS_EXCEL[$i]['activo'] = 1;

					
					}		
					$errores=0;

$fecha = time();
$fecha2 = date("Y-m-d",$fecha);

list($anio, $mes, $dia) = explode("-",$fecha2); 

foreach($_DATOS_EXCEL as $campo => $valor){
$sql = "INSERT INTO registro (
nombre,
apellidos,
correl,
idrol,
nombreusuario,
correo,
password,
activo) VALUES ('";
						foreach ($valor as $campo2 => $valor2){
							$campo2 == "activo" ? $sql.= $valor2."');" : $sql.= $valor2."','";
						}

						$result = mysqli_query($link ,$sql);
						if (!$result){ echo "Error al insertar registro ".$campo;$errores+=1;}
					}	
					/////////////////////////////////////////////////////////////////////////	
echo "   <script>
      swal({
  title: 'Importacion completa',
  text: 'El archivo ha sido importado con exito',
  type: 'success',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
})
.then((result) => {
  if (result.value) {
    window.location='dataimport.php';
  }
}); 
</script>";
							//Borramos el archivo que esta en el servidor con el prefijo cop_
					unlink($destino);
					
				}
					//si por algun motivo no cargo el archivo cop_ 
				else{
					echo "Primero debes cargar el archivo con extencion .xlsx";
				}
			}
		?>
<?php 
			if (isset($action)) {
$filas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
				}
			if (isset($filas)) {
$columnas = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn();
				}
			if (isset($filas)) {
$filas = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
				}

//echo 'getHighestColumn() =  [' . $columnas . ']<br/>';
//echo 'getHighestRow() =  [' . $filas . ']<br/>';

/*      <table class="table table-bordered" width="80%">
      <thead>
            <tr>
              <th width="10%">Nombres</th>
              <th width="10%">Apellidos</th>
              <th width="5%">Rol</th>
                      <th width="10%">Usuario</th>
                      <th width="10%">Pass</th>
                      <th width="10%">E-mail</th>
                      <th width="10%">Fecha de Ingreso</th>
                  </tr>
              </thead>
              <?php
              $SQLSELECT = "SELECT * FROM `usu_nirolari_temp`";

        $result_set = mysqli_query($link, $SQLSELECT);
        

        while($row = mysqli_fetch_row($result_set)){
        ?>
        <tr>
          <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                </tr>
                <?php
        }
      ?>
    </table>

  </div>';*/



?>



 

 <script type="text/javascript" src="dist/filestyle.min.js"></script>

  

    <!--<script  src="js/index.js"></script>-->