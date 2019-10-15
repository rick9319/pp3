<?php 
	function conecta(){
		$link = mysqli_connect("localhost", "root", "", "proyecto");
		return $link;
	}

 ?>