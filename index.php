<?php 
session_start();
include "./clases/Conexion.php";
include "./clases/Crud.php";
$crud = new Crud();
$datos = $crud->mostrarDatos();

$mensaje = '';
if (isset($_SESSION['mensaje_crud'])) {
    $mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
    unset($_SESSION['mensaje_crud']);
}
?>

<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Agenda Veterinaria</h2>
                    <a href="./agregar.php" class="btn btn-primary">
                        <i class="fa-solid fa-paw"></i> Agregar nueva mascota
                    </a>
                    <hr>

                    <table class="table table-sm table-hover table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Nombre de la mascota</th>
                                <th>Edad</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>Nombre del dueño</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $item) { ?>
                                <tr>
                                    <td><?php echo $item->nombre_mascota; ?></td>
                                    <td><?php echo $item->edad; ?></td>
                                    <td><?php echo $item->especie; ?></td>
                                    <td><?php echo $item->raza; ?></td>
                                    <td><?php echo $item->nombre_dueno; ?></td>
                                    <td class="text-center">
                                        <form action="./actualizar.php" method="POST">
                                            <input type="hidden" value="<?php echo $item->_id ?>" name="id">
                                            <button class="btn btn-warning" title="Editar">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="./eliminar.php" method="POST">
                                            <input type="hidden" value="<?php echo $item->_id ?>" name="id">
                                            <button class="btn btn-danger" title="Eliminar">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>

<script>
    let mensaje = <?php echo $mensaje; ?>;
    console.log(mensaje);
</script>
