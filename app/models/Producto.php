<?php
require_once __DIR__ . '/../../config/conexion.php';

class Producto {

    private $conexion;
    private $tabla = 'productos';

    public function __construct() {
        $this->conexion = Conexion::obtenerInstancia()->obtenerConexion();
    }

    public function obtenerTodos() {
        $sql = "SELECT * FROM {$this->tabla} ORDER BY fecha_creacion DESC";
        $resultado = $this->conexion->query($sql);
        return $resultado ? $resultado->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function obtenerPorId($id) {
        $sql = "SELECT * FROM {$this->tabla} WHERE id_producto = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function crear($datos) {
        $sql = "INSERT INTO {$this->tabla} (nombre, descripcion, precio, stock)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param(
            'ssdi',
            $datos['nombre'],
            $datos['descripcion'],
            $datos['precio'],
            $datos['stock']
        );

        return $stmt->execute();
    }

    public function actualizar($id, $datos) {
        $sql = "UPDATE {$this->tabla}
                SET nombre = ?, descripcion = ?, precio = ?, stock = ?
                WHERE id_producto = ?";

        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param(
            'ssdii',
            $datos['nombre'],
            $datos['descripcion'],
            $datos['precio'],
            $datos['stock'],
            $id
        );

        return $stmt->execute();
    }

    public function eliminar($id) {
        $sql = "DELETE FROM {$this->tabla} WHERE id_producto = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
