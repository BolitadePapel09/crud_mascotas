<?php 
class Crud {
public function mostrarDatos() {
    try {
        $conexion = Conexion::conectar();

        if (is_string($conexion)) {
            return []; // Error en la conexión, retorna array vacío
        }

        $coleccion = $conexion->mascotas;
        $datos = $coleccion->find();
        return $datos;
    } catch (\Throwable $th) {
        return []; // Error en consulta, retorna array vacío
    }
}

    public function obtenerDocumento($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            $datos = $coleccion->findOne([
                '_id' => new MongoDB\BSON\ObjectId($id)
            ]);
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarDatos($datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function eliminar($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            $respuesta = $coleccion->deleteOne([
                "_id" => new MongoDB\BSON\ObjectId($id)
            ]);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizar($id, $datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            $respuesta = $coleccion->updateOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)],
                ['$set' => $datos]
            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mensajesCrud($mensaje) {
        $msg = '';

        if ($mensaje == 'insert') {
            $msg = 'swal("Excelente!", "Mascota agregada con éxito!", "success")';
        } else if ($mensaje == 'update') {
            $msg = 'swal("Excelente!", "Información actualizada con éxito!", "info")';
        } else if ($mensaje == 'delete') {
            $msg = 'swal("Excelente!", "Mascota eliminada con éxito!", "warning")';
        }

        return $msg;
    }
}
?>
