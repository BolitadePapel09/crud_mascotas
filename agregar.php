<?php include "./header.php"; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card mt-4">
				<div class="card-body">
					<a href="index.php" class="btn btn-outline-info">
						<i class="fa-solid fa-angles-left"></i> Regresar
					</a>
					<h2>Agregar nueva mascota</h2>

					<form action="./procesos/insertar.php" method="post">
						<label for="nombreMascota" class="mt-2">Nombre de la mascota</label>
						<input type="text" class="form-control" id="nombreMascota" name="nombre_mascota" required>

						<label for="edad" class="mt-2">Edad</label>
						<input type="number" class="form-control" id="edad" name="edad" required>

						<label for="especie" class="mt-2">Especie</label>
						<input type="text" class="form-control" id="especie" name="especie" required>

						<label for="raza" class="mt-2">Raza</label>
						<input type="text" class="form-control" id="raza" name="raza" required>

						<label for="nombreDueno" class="mt-2">Nombre del dueño</label>
						<input type="text" class="form-control" id="nombreDueno" name="nombre_dueno" required>

						<button class="btn btn-primary mt-3">
							<i class="fa-solid fa-floppy-disk"></i> Agregar
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "./scripts.php"; ?>
