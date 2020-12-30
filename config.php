<?php
	
	define("DB_SERVER","localhost");
	define("DB_USERNAME","root");
	define("DB_PASSWORD","");
	define("DB_NAME","proyecto");

	$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
	$link -> set_charset("utf8");
	if($link === false){
		die("Error : No se logro establecer la conexión. " .mysqli_connect_error());
	}
?>