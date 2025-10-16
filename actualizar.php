<?php 
	include "./clases/Conexion.php";
	include "./clases/Crud.php";

	$crud = new Crud();
	$id = $_POST['id'];
	$datos = $crud->obtenerDocumento($id);
	$idMongo = $datos->_id;
?>

<?php include "./header.php"; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card mt-4">
				<div class="card-body">

					<a href="index.php" class="btn btn-outline-info">
						<i class="fa-solid fa-angles-left"></i> Regresar
					</a>
					<h2>Actualizar información de la mascota</h2>

					<form action="./procesos/actualizar.php" method="POST">
						<input type="hidden" value="<?php echo $idMongo ?>" name="id">

						<label for="nombreMascota" class="mt-2">Nombre de la mascota</label>
						<input type="text" class="form-control" id="nombreMascota" name="nombre_mascota" value="<?php echo $datos->nombre_mascota ?>">

						<label for="edad" class="mt-2">Edad</label>
						<input type="number" class="form-control" id="edad" name="edad" value="<?php echo $datos->edad ?>">

						<label for="especie" class="mt-2">Especie</label>
						<input type="text" class="form-control" id="especie" name="especie" value="<?php echo $datos->especie ?>">

						<label for="raza" class="mt-2">Raza</label>
						<input type="text" class="form-control" id="raza" name="raza" value="<?php echo $datos->raza ?>">

						<label for="nombreDueno" class="mt-2">Nombre del dueño</label>
						<input type="text" class="form-control" id="nombreDueno" name="nombre_dueno" value="<?php echo $datos->nombre_dueno ?>">

						<button class="btn btn-warning mt-3">
							<i class="fa-solid fa-floppy-disk"></i> Actualizar
						</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php include "./scripts.php"; ?>
