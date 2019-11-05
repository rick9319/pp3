<?php 
 include("conexion.php");
$link=conecta();
include("seguridad.php");
header("Content-type: application/vnd.ms-excel;charset=utf-8" ) ; 
header("Content-Disposition: attachment; filename=excelentradas.xls" ) ; 
$tabla=""; 
$fecha1=$_POST['date1'] ;
$fecha2=$_POST['date2'] ;
$qry=mysqli_query($link,"SELECT * FROM equipo WHERE fechre >='$fecha1' AND fechre <='$fecha2 23:59:59'" ) ; 
$campos = mysqli_num_fields($qry) ; 
$i=0; 
echo "<table border='0'><tr>";
echo"<tr>";
    echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>ID Equipo</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>ID Tipo</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>ID Usuario</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>Marca</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>Modelo</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>Numero de serie</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>Cantidad</th>";
   echo"<th style='border: 1px solid #ffffff; background-color: #396b96; color: #ffffff;'>Fecha de registro</th>";
echo"</tr>";
while($row=mysqli_fetch_array($qry)){ 
echo "<tr>"; 
for($j=0; $j<$campos; $j++) { 
echo "<td style='border: 1px solid #6b0a44;text-align: center;'>".$row[$j]."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>"; 
?> 