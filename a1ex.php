<?php 
 include("conexion.php");
$link=conecta();
include("seguridad.php");
header("Content-type: application/vnd.ms-excel;charset=utf-8" ) ; 
header("Content-Disposition: attachment; filename=excelaulas.xls" ) ; 
$tabla=""; 
$qry=mysqli_query($link," SELECT * FROM aula" ) ; 
$campos = mysqli_num_fields($qry) ; 
$i=0; 
echo "<table border='0'><tr>";
echo"<tr>";
    echo"<th style='border: 1px solid #ffffff; background-color: #6b0a44; color: #ffffff;'>ID aula</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #6b0a44; color: #ffffff;'>Nombre</th>";
   
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