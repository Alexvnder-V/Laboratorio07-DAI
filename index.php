<?php 
include_once 'crud.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laboratorio 7</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

		
		<br><br>
		<h1 align="center">Biblioteca Digital</h1>
		<h2 align="center">TECSUP</h2>


		<p>Lista de libros:</p>

		<div>
			<table width="100%" border="1" cellpadding="15" align="center">
				<?php
				$res = $MySQLiconn->query("SELECT * FROM libros");
				while ($row=$res->fetch_array()){
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['anio']; ?></td>
					<td><?php echo $row['autor']; ?></td>
					<td><?php echo $row['titulo']; ?></td>
					<td><a href="<?php echo $row['url'] ?>" onclick="return confirm('Confirmar link del libro')" target="_blank">Leer Libro</a></td>
					<td><?php echo $row['especialidad']; ?></td>
					<td><?php echo $row['editorial']; ?></td>
					

				</tr>
				<?php
				}
				?>
				
			</table>
		</div>
		<br>
		<center>
			<div>
				<a class="boton" href="./index01.php" >Registrar, Editar, Eliminar libro</a>
			</div>
		</center>
	
</body>
</html>