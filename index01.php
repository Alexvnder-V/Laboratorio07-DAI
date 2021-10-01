<?php 
include_once 'crud.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar Libro</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>
<body>
	<a class="boton" href="./index.php">Volver</a>

	<center>
		<br>
		<h1>Agregar libro a la biblioteca digital</h1>
		<div id="form">
			<form method="post">
				<table width="100%" border="1px" cellpadding="15">
					<tr>
						<td>
							<input type="text" name="anio" placeholder="Año" value="<?php if(isset($_GET['edit'])) echo $getROW['anio']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="autor" placeholder="Autor" value="<?php if(isset($_GET['edit'])) echo $getROW['autor']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="titulo" placeholder="Título" value="<?php if(isset($_GET['edit'])) echo $getROW['titulo']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="url" placeholder="URL" value="<?php if(isset($_GET['edit'])) echo $getROW['url']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="especialidad" placeholder="Especialidad" value="<?php if(isset($_GET['edit'])) echo $getROW['especialidad']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="editorial" placeholder="Editorial" value="<?php if(isset($_GET['edit'])) echo $getROW['editorial']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<?php 
							if (isset($_GET['edit'])) {
								?>
								<button type="submit" name="update">Editar</button>
								<?php
							}else{
								?>
								<button type="submit" name="save">Registrar</button>
								<?php
							}
							?>
						</td>
					</tr>
				</table>
			</form>
			<br><br>
			<table width="100%" border="1" cellpadding="15" align="center">
				<tr>
					<td colspan="8">LIBROS</td>
				</tr>
				<tr>
					<td>N°</td>
					<td>Año</td>
					<td>Autor</td>
					<td>Título</td>
					<td>Especialidad</td>
					<td>Editorial</td>


				</tr>
				<?php
				$res = $MySQLiconn->query("SELECT * FROM libros");
				while ($row=$res->fetch_array()){
				?>
				
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['anio']; ?></td>
					<td><?php echo $row['autor']; ?></td>
					<td><?php echo $row['titulo']; ?></td>
					<td><?php echo $row['especialidad']; ?></td>
					<td><?php echo $row['editorial']; ?></td>
					<td><a href="?edit=<?php echo $row['id'];?>" onclick="return confirm('Confirmar edición de libro')">Editar</a></td>
					<td><a href="?del=<?php echo $row['id'];?>" onclick="return confirm('Confirmar eliminación del libro')">Eliminar</a></td>

				</tr>
				<?php
				}
				?>
				
			</table>
		</div>
	</center>

</body>
</html>