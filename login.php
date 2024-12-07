<?php
	session_start();
	
	$conn = mysqli_connect("localhost", "root", "", "heavensward");

	$usuario =  $_REQUEST['Usuario'];
    $password = $_REQUEST['Password'];
    
    $sql = "SELECT usuarios.Nombre, usuarios.Contraseña FROM usuarios WHERE Nombre = '$usuario' AND Contraseña = '$password'"; 
    
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result) >= 1)
    {
    	$_SESSION["myuser"] = $usuario;
    	echo "<h3>Sesion Iniciada</h3>"; 
    }
    else
    {
    	$_SESSION["error"] = "Usuario no encontrado";
    	 echo "<h3>Usuario No Valido</h3>"; 
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sin título 1</title>
</head>

<body>

</body>

</html>
