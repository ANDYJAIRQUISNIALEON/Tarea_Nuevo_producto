<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new Producto();
    }

    // LISTAR
    public function index()
    {
        $titulo = 'Listado de Productos';
        $productos = $this->modelo->obtenerTodos();

        ob_start();
        require __DIR__ . '/../views/producto/index.php';
        $contenido = ob_get_clean();

        require __DIR__ . '/../views/layouts/main.php';
    }

    // CREAR (formulario)
    public function crear()
    {
        $titulo = 'Crear Producto';

        ob_start();
        require __DIR__ . '/../views/producto/crear.php';
        $contenido = ob_get_clean();

        require __DIR__ . '/../views/layouts/main.php';
    }

    // GUARDAR (crear)
    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $datos = [
            'nombre' => trim($_POST['nombre']),
            'descripcion' => trim($_POST['descripcion']),
            'precio' => $_POST['precio'],
            'stock' => $_POST['stock']
        ];

        $this->modelo->crear($datos);

        $_SESSION['exito'] = 'Producto creado correctamente';
        header('Location: index.php?controlador=producto');
        exit;
    }

    // VER DETALLE
    public function ver()
    {
        if (!isset($_GET['id'])) {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $id = $_GET['id'];
        $producto = $this->modelo->obtenerPorId($id);

        if (!$producto) {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $titulo = 'Detalle del Producto';

        ob_start();
        require __DIR__ . '/../views/producto/ver.php';
        $contenido = ob_get_clean();

        require __DIR__ . '/../views/layouts/main.php';
    }

    // EDITAR (formulario)
    public function editar()
    {
        if (!isset($_GET['id'])) {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $id = $_GET['id'];
        $producto = $this->modelo->obtenerPorId($id);

        if (!$producto) {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $titulo = 'Editar Producto';

        ob_start();
        require __DIR__ . '/../views/producto/editar.php';
        $contenido = ob_get_clean();

        require __DIR__ . '/../views/layouts/main.php';
    }

    // ACTUALIZAR (editar)
    public function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $id = $_POST['id'];

        $datos = [
            'nombre' => trim($_POST['nombre']),
            'descripcion' => trim($_POST['descripcion']),
            'precio' => $_POST['precio'],
            'stock' => $_POST['stock']
        ];

        $this->modelo->actualizar($id, $datos);

        $_SESSION['exito'] = 'Producto actualizado correctamente';
        header('Location: index.php?controlador=producto');
        exit;
    }


    // CONFIRMAR ELIMINAR
    public function confirmarEliminar()
    {
        if (!isset($_GET['id'])) {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $id = $_GET['id'];
        $producto = $this->modelo->obtenerPorId($id);

        if (!$producto) {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $titulo = 'Confirmar Eliminación';

        ob_start();
        require __DIR__ . '/../views/producto/eliminar.php';
        $contenido = ob_get_clean();

        require __DIR__ . '/../views/layouts/main.php';
    }

    // ELIMINAR (POST)
    public function eliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?controlador=producto');
            exit;
        }

        $id = $_POST['id'];
        $this->modelo->eliminar($id);

        $_SESSION['exito'] = 'Producto eliminado correctamente';
        header('Location: index.php?controlador=producto');
        exit;
    }
}
