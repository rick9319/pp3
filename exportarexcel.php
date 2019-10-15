<?php 
 include("conexion.php");
$link=conecta();
include("seguridad.php");
header("Content-type: application/vnd.ms-excel;charset=utf-8" ) ; 
header("Content-Disposition: attachment; filename=excelusuarios.xls" ) ; 
$tabla=""; 
$qry=mysqli_query($link," SELECT * FROM registro" ) ; 
$campos = mysqli_num_fields($qry) ; 
$i=0; 
echo "<table border='0'><tr>";
echo"<tr>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>ID de usuario</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Nombre</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Apellidos</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Numero de correlativo</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Rol</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Nombre de usuario</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Correo</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Contraseña</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Foto</th>";
    echo"<th style='border: 1px solid #ffffff; background-color: #87c9a7; color: #ffffff;'>Fecha de registro</th>";
echo"</tr>";
while($row=mysqli_fetch_array($qry)){ 
echo "<tr>"; 
for($j=0; $j<$campos; $j++) { 
echo "<td style='border: 1px solid #87c7c9;text-align: center;'>".$row[$j]."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>"; 
?> 