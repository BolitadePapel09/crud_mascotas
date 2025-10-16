

session_start();

include "../clases/Conexion.php";
include "../clases/Crud.php";

$Crud = new Crud();

// Datos que vienen del formulario agregar.php
$datos = array(
    "nombre_mascota" => $_POST['nombre_mascota'],
    "edad" => $_POST['edad'],
    "especie" => $_POST['especie'],
    "raza" => $_POST['raza'],
    "nombre_dueno" => $_POST['nombre_dueno']
);

// Insertar en la base de datos
$respuesta = $Crud->insertarDatos($datos);

// Validar la inserción
if ($respuesta->getInsertedId() > 0) {
    $_SESSION['mensaje_crud'] = 'insert';
    header("location:../index.php"); 
} else {
    print_r($respuesta);
}
?>
