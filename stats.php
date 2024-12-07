<?php
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'heavensward';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM `total_estadisticas`";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Estadisticas</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
	<style>
		h1{
			color:white;
			font-size:xx-large;
		}
		
		.Contenido_Principal{
			background-image:url('img/Nebula_Aqua-Pink.png')
		}		
	</style>
</head>

<body class="Contenedor_Principal">
	<div class="BarraMenu">
		<header class="Cabezera">
			<a href="index.html"><img alt="Logo" src="img/Heavensward Logo.png" style="padding-top:40px"></a>
		</header>
		
		<nav class="Navegación">
			<ul>
				<li><a href="game.html">Jugar</a></li>
				<li><a href="gameplay.html">Gameplay</a></li>
				<li><a href="stats.php">Estadísticas</a></li>
				<li><a href="login.html">Login</a></li>
			</ul>
		</nav>
	</div>
	
	<main class="Contenido_Principal">
		<article style="display: grid;place-items: center">
			<h1>Estadísticas</h1>
			<table class="Tabla_Estadisticas">
				<tr>
					<th>Usuario</th>
					<th>Nave</th>
					<th>Mejor Puntaje</th>
					<th>Mejor Tiempo</th>
				</tr>
				<?php 
	                // LOOP TILL END OF DATA
	                while($rows=$result->fetch_assoc())
	                {
	            ?>
	            <tr>
	                <!-- FETCHING DATA FROM EACH
	                    ROW OF EVERY COLUMN -->
	                <td><?php echo $rows['Usuario'];?></td>
	                <td><?php echo $rows['Nave'];?></td>
	                <td><?php echo $rows['Mejor Puntaje'];?></td>
	                <td><?php echo $rows['Mejor Tiempo'];?></td>
	            </tr>
	            <?php
	                }
	            ?>
			</table>
		</article>
	</main >
	
	<div class="BarraPiePagina">
		<footer class="Pie_Pagina">
			© 2024 Christian Dael Silis Silvestre. Todos los derechos reservados		
		</footer>
	</div>
	
</body>

</html>
