<?php
	function cnx(){
		$servidor="localhost";
		$usuario="root";
		$clave="";
		$bd="prueba4";
		$link=mysqli_connect($servidor,$usuario,$clave) or die(mysqli_error());
		$sel=mysqli_select_db($link,$bd) or die(mysqli_error($link));
		return $link;
		}
		?>	