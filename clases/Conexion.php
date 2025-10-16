<?php 
    require_once __DIR__ . '/../vendor/autoload.php';

    class Conexion {
        public static function conectar() {
        try {
            // Credenciales de conexión
            $servidor = "localhost";
            $puerto = "27017";
            $usuario = "backend";
            $password = "backend2025";
            $BD = "agenda_veterinaria";

            // Cadena de conexión corregida
            $cadenaConexion = "mongodb://$usuario:$password@$servidor:$puerto/$BD?authSource=admin";
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($BD);
           } catch (\Throwable $th) {
               return $th->getMessage();
           }
        }
    }

?>



<!-- 
    // Carga automática de las clases del paquete MongoDB
    require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_mongo/vendor/autoload.php";

    class Conexion {
        public static function conectar() {
            try {
                // Parámetros de conexión a MongoDB
                $servidor = "127.0.0.1";
                $puerto = "27017";
                $usuario = "mongoadmin";
                $password = "123456";
                $BD = "agenda_veterinaria"; // ✅ cambia el nombre de la BD si tu proyecto usa otro

                // Cadena de conexión
                $cadenaConexion = "mongodb://{$usuario}:{$password}@{$servidor}:{$puerto}/{$BD}";

                // Crear cliente MongoDB
                $cliente = new MongoDB\Client($cadenaConexion);

                // Retornar conexión a la base de datos
                return $cliente->selectDatabase($BD);

            } catch (\Throwable $th) {
                // Retorna el mensaje de error en caso de fallo
                return $th->getMessage();
            }
        }
    }
 -->
