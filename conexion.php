<?php

$dbhost = "IP_Adrress";
$dbuser = "User";
$dbpass = "Password";
$dbname = "DataBase_Name";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>
