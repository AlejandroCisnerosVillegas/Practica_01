<?php

include("conexion.php");

$cod = $_POST["txtcodigo"];
$edad = $_POST["txtedad"];
$nom = $_POST["txtnombre"];
$tel = $_POST["txttelefono"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: index.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO poject_14_clientes(codigo, nombre, edad, telefono) values ('$cod','$nom','$edad','$tel')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: index.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE poject_14_clientes SET nombre='$nom',edad='$edad',telefono='$tel' WHERE codigo=$cod";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: index.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM poject_14_clientes WHERE codigo=$cod";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: index.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>