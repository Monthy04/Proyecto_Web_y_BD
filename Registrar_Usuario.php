<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registro Usuario</title>
</head>

<body>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "heavensward");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }		
		$usuario =  $_REQUEST['Usuario'];
        $password = $_REQUEST['Password'];
        $email = $_REQUEST['Correo'];
        
        $sql = "INSERT INTO usuarios  VALUES ('', '$usuario ','$password','$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            echo nl2br("\n$usuario\n $password\n "
                . "$email\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        mysqli_close($conn);
	?>
</body>

</html>
