<?php
@session_start();
if($_SESSION["autentica"] != "SI")
{
	header("Location:index.php");
	exit();
}
  ?>