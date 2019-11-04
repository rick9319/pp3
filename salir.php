<?php
@session_start();
include("conexion.php"); 
$link=conecta();
$idusuario=$_SESSION["id"]; 
$updateestado = mysqli_query($link,"UPDATE registro SET activo=0 WHERE idusuario='$idusuario'"); 
session_start();
session_destroy();
header("Location:index.php");
  ?>