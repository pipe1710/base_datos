<?php 

$pgsql  = pg_connect("host=localhost dbname=barrio port=5432 user=postgres password=1710");
	

	if(isset($_POST['guardar'])){
		$id_estudiante=$_POST['id_estudiante'];
		$nombre=$_POST['nombre'];
		$nombre2=$_POST['nombre_2'];
		$apellido=$_POST['apellido'];
		$apellido2=$_POST['apellido_2'];
		$telefono=$_POST['celular'];
		$cod_ciudad=$_POST['cod_ciudad'];
		$correo=$_POST['correo'];
		$direccion=$_POST['direccion'];
		$barrio=$_POST['cod_barrio'];
		$cod_estrato=$_POST['cod_estrato'];
		$cod_genero=$_POST['cod_genero'];
		$cod_sangre=$_POST['cod_sangre'];
		$cod_eps=$_POST['cod_eps'];
		$cod_estado_civil=$_POST['cod_estado_civil'];
		$cod_ciudad=$_POST['cod_ciudad'];
		
		
	
	
				$pgsql="INSERT INTO estudiante
				VALUES('$id_estudiante','$nombre','$nombre_2','$apellido','$apellido_2','$direccion','$cod_barrio','$celular','$correo','$cod_estrato','$cod_genero','$cod_sangre','$cod_eps','$cod_estado_civil','$cod_ciudad')";
			
				header('Location: principal.php');
			}
		
	


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>INGRESE LOS DATOS DEL ESTUDIANTE</h2>
		<form action="" method="post">
			<div class="form-group">
			<input type="text" name="id_estudiante" placeholder="Cedula" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
				<input type="text" name="nombre_2" placeholder="Nombre 2" class="input__text">
			</div>
			<div class="form-group">
			
				
				<input type="text" name="apellido" placeholder="Apellido" class="input__text">
				<input type="text" name="apellido_2" placeholder="Apellido 2" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="celular" placeholder="Teléfono" class="input__text">
				<input type="text" name="cod_ciudad" placeholder="ciudad" class="input__text">
			
			</div>
			<div class="form-group">
				<input type="text" name="correo" placeholder="Correo electrónico" class="input__text">
				<input type="text" name="direccion" placeholder="Direccion" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="cod_barrio" placeholder="barrio" class="input__text">
				<input type="text" name="cod_estrato" placeholder="estrato" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="cod_genero" placeholder="genero" class="input__text">
				<input type="text" name="cod_sangre" placeholder="sangre" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="cod_estado_civil" placeholder="estado civil" class="input__text">
				<input type="text" name="cod_eps" placeholder="eps" class="input__text">
			</div>
			<div class="btn__group">
				<a href="principal.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
