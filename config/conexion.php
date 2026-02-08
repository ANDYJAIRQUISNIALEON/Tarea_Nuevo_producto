<?php
class Conexion
{
    private static $instancia = null;
    private $conexion;
    
    private function __construct()
    {
        $servidor = "127.0.0.1";
        $base_datos = "tienda";
        $usuario = "root";
        $clave = "";
        $puerto = 3306;

        $this->conexion = new mysqli($servidor, $usuario, $clave, $base_datos, $puerto);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
        
        $this->conexion->set_charset("utf8mb4");
    }
    
    public static function obtenerInstancia()
    {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }
    
    public function obtenerConexion()
    {
        return $this->conexion;
    }
    
    // Prevenir clonación
    private function __clone() {}
}
?>