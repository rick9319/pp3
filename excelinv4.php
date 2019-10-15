<?php 
 include("conexion.php");
$link=conecta();
include("seguridad.php");
$marca=$_POST['marca'] ;
header("Content-type: application/vnd.ms-excel;charset=utf-8" ) ; 
header("Content-Disposition: attachment; filename=excelinventario-marca.xls" ) ; 
$qry=mysqli_query($link,"SELECT * FROM equipo where marca='$marca'" ) ; 
$campos = mysqli_num_fields($qry) ; 
$i=0; 
echo "<table border='0'><tr>";
echo"<tr>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>ID de equipo</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>ID categoria</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>ID usuario</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>Marca</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>Modelo</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>Numero de serie</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>Cantidad</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #508550; color: #ffffff;'>Fecha de registro</th>";
echo"</tr>";
while($row=mysqli_fetch_array($qry)){ 
echo "<tr>"; 
for($j=0; $j<$campos; $j++) { 
echo "<td style='border: 1px solid #508550;text-align: center;'>".$row[$j]."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>"; 
?> 