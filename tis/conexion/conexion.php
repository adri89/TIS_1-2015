<?php
/*CONEXION CON LA BASE DE DATOS USUARIO:jimmy PASS:201101027 BASEDEDATOS:sistema_tis*/
	$conn = mysql_connect("localhost","root","Aac1989@") or die("Error en conexion");
	mysql_select_db("TeamScript_BD", $conn) or die("Error en base de datos");
	mysql_query("SET NAMES 'utf8'");
?>
