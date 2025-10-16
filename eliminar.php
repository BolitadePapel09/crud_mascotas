<?php
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Eliminar mascota</h2>
                    
                    <table class="table table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Nombre de la mascota</th>
                                <th>Edad</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>Nombre del dueño</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $datos->nombre_mascota; ?></td>
                                <td><?php echo $datos->edad; ?></td>
                                <td><?php echo $datos->especie; ?></td>
                                <td><?php echo $datos->raza; ?></td>
                                <td><?php echo $datos->nombre_dueno; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <div class="alert alert-danger" role="alert">
                        <p><strong>¿Está seguro de eliminar esta mascota?</strong></p>
                        <p>Una vez eliminada, no podrá ser recuperada.</p>
                    </div>

                    <form action="./procesos/eliminar.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $datos->_id; ?>">
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i> Eliminar definitivamente
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>
